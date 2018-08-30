<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomsWeekDays Controller
 *
 * @property \App\Model\Table\RoomsWeekDaysTable $RoomsWeekDays
 *
 * @method \App\Model\Entity\RoomsWeekDay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomsWeekDaysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms', 'WeekDays']
        ];
        $roomsWeekDays = $this->paginate($this->RoomsWeekDays);

        $this->set([
            'roomsWeekDays'=>$roomsWeekDays,
            '_serialize'=>['roomsWeekDays']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Rooms Week Day id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomsWeekDays = $this->RoomsWeekDays->get($id, [
            'contain' => ['Rooms', 'WeekDays']
        ]);

        $this->set([
            'roomsWeekDays'=>$roomsWeekDays,
            '_serialize'=>['roomsWeekDays']
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
        $roomsWeekDay = $this->RoomsWeekDays->newEntity();
        if ($this->request->is('post')) {
            $roomsWeekDay = $this->RoomsWeekDays->patchEntity($roomsWeekDay, $this->request->getData());
            if ($this->RoomsWeekDays->save($roomsWeekDay)) {
                $res['status'] = 1;
                $res['msg'] = 'The rooms week day has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rooms week day could not be saved. Please, try again.';  
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
     * @param string|null $id Rooms Week Day id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomsWeekDay = $this->RoomsWeekDays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomsWeekDay = $this->RoomsWeekDays->patchEntity($roomsWeekDay, $this->request->getData());
            if ($this->RoomsWeekDays->save($roomsWeekDay)) {
                $res['status'] = 1;
                $res['msg'] = 'The rooms week day has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rooms week day could not be saved. Please, try again.';  
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
     * @param string|null $id Rooms Week Day id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomsWeekDay = $this->RoomsWeekDays->get($id);
        if ($this->RoomsWeekDays->delete($roomsWeekDay)) {
            $res['status'] = 1;
            $res['msg'] = 'The Rooms Week Day has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Rooms Week Day could not be deleted. Please, try again.';
        }

           
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
