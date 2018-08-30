<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RateTypes Controller
 *
 * @property \App\Model\Table\RateTypesTable $RateTypes
 *
 * @method \App\Model\Entity\RateType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RateTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $rateTypes = $this->paginate($this->RateTypes);

        $this->set([
            'rateTypes'=>$rateTypes,
            '_serialize'=>['rateTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rateTypes = $this->RateTypes->get($id, [
            'contain' => ['Rates']
        ]);

        $this->set([
            'rateTypes'=>$rateTypes,
            '_serialize'=>['rateTypes']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res=array();
        $rateType = $this->RateTypes->newEntity();
        if ($this->request->is('post')) {
            $rateType = $this->RateTypes->patchEntity($rateType, $this->request->getData());
            if ($this->RateTypes->save($rateType)) {
                $res['status'] = 1;
                $res['msg'] = 'The rateTypes has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rateTypes could not be saved. Please, try again.';  
            }
        }
      
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $rateType = $this->RateTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rateType = $this->RateTypes->patchEntity($rateType, $this->request->getData());
            if ($this->RateTypes->save($rateType)) {
                $res['status'] = 1;
                $res['msg'] = 'The rateTypes has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rateTypes could not be saved. Please, try again.';  
            }
        }
       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rate Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $rateType = $this->RateTypes->get($id);
        if ($this->RateTypes->delete($rateType)) {
            $res['status'] = 1;
            $res['msg'] = 'The rateTypes has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The rateTypes could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
