<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Rates Controller
 *
 * @property \App\Model\Table\RatesTable $Rates
 *
 * @method \App\Model\Entity\Rate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RateTypes']
        ];
        $rates = $this->paginate($this->Rates);

        $this->set([
            'rates'=>$rates,
            '_serialize'=>['rates']
        ]);
    }

    
    public function get_rate_by_type($rate_type_id){

        $rates = $this->Rates->find()->where(['rate_type_id' => $rate_type_id])->contain(['RateTypes'])->toList();
   
        $this->set([
            'rates'=>$rates,
            '_serialize'=>['rates']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rates = $this->Rates->get($id, [
            'contain' => ['RateTypes', 'RoomTypes']
        ]);

        $this->set([
            'rates'=>$rates,
            '_serialize'=>['rates']
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
        $rate = $this->Rates->newEntity();
        if ($this->request->is('post')) {
            $rate = $this->Rates->patchEntity($rate, $this->request->getData());
            if ($this->Rates->save($rate)) {
                $res['status'] = 1;
                $res['msg'] = 'The rate has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rate could not be saved. Please, try again.';  
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
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $rate = $this->Rates->get($id, [
            'contain' => ['RoomTypes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rate = $this->Rates->patchEntity($rate, $this->request->getData());
            if ($this->Rates->save($rate)) {
                $res['status'] = 1;
                $res['msg'] = 'The rate has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rate could not be saved. Please, try again.';  
            }
        }
     
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $rate = $this->Rates->get($id);
        if ($this->Rates->delete($rate)) {
            $res['status'] = 1;
            $res['msg'] = 'The rate has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The rate could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
