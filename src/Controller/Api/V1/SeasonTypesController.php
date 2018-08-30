<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * SeasonTypes Controller
 *
 * @property \App\Model\Table\SeasonTypesTable $SeasonTypes
 *
 * @method \App\Model\Entity\SeasonType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeasonTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $seasonTypes = $this->paginate($this->SeasonTypes);

        $this->set([
            'seasonTypes'=>$seasonTypes,
            '_serialize'=>['seasonTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seasonTypes = $this->SeasonTypes->get($id, [
            'contain' => ['Seasons']
        ]);

        $this->set([
            'seasonTypes'=>$seasonTypes,
            '_serialize'=>['seasonTypes']
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
        $seasonType = $this->SeasonTypes->newEntity();
        if ($this->request->is('post')) {
            $seasonType = $this->SeasonTypes->patchEntity($seasonType, $this->request->getData());
            if ($this->SeasonTypes->save($seasonType)) {
                $res['status'] = 1;
                $res['msg'] = 'The seasonType has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The seasonType could not be saved. Please, try again.';  
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
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $seasonType = $this->SeasonTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seasonType = $this->SeasonTypes->patchEntity($seasonType, $this->request->getData());
            if ($this->SeasonTypes->save($seasonType)) {
                $res['status'] = 1;
                $res['msg'] = 'The seasonType has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The seasonType could not be saved. Please, try again.';  
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
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $seasonType = $this->SeasonTypes->get($id);
        if ($this->SeasonTypes->delete($seasonType)) {
            $res['status'] = 1;
            $res['msg'] = 'The seasonType has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The seasonType could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
