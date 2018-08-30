<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomTypesRates Controller
 *
 * @property \App\Model\Table\RoomTypesRatesTable $RoomTypesRates
 *
 * @method \App\Model\Entity\RoomTypesRate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomTypesRatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RoomTypes', 'Rates']
        ];
        $roomTypesRates = $this->paginate($this->RoomTypesRates);

        $this->set([
            'roomTypesRates'=>$roomTypesRates,
            '_serialize'=>['roomTypesRates']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Room Types Rate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomTypesRates = $this->RoomTypesRates->get($id, [
            'contain' => ['RoomTypes', 'Rates']
        ]);

        $this->set([
            'roomTypesRates'=>$roomTypesRates,
            '_serialize'=>['roomTypesRates']
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
        $roomTypesRate = $this->RoomTypesRates->newEntity();
        if ($this->request->is('post')) {
            $roomTypesRate = $this->RoomTypesRates->patchEntity($roomTypesRate, $this->request->getData());
            if ($this->RoomTypesRates->save($roomTypesRate)) {
                $res['status'] = 1;
                $res['msg'] = 'The room types rate  has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room types rate  could not be saved. Please, try again.';  
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
     * @param string|null $id Room Types Rate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomTypesRate = $this->RoomTypesRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomTypesRate = $this->RoomTypesRates->patchEntity($roomTypesRate, $this->request->getData());
            if ($this->RoomTypesRates->save($roomTypesRate)) {
                $res['status'] = 1;
                $res['msg'] = 'The room types rate  has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room types rate  could not be saved. Please, try again.';  
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
     * @param string|null $id Room Types Rate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomTypesRate = $this->RoomTypesRates->get($id);
        if ($this->RoomTypesRates->delete($roomTypesRate)) {
            $res['status'] = 1;
            $res['msg'] = 'The Room Types Rate has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Room Types Rate could not be deleted. Please, try again.';
        }


        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
