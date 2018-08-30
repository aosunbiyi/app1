<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Rooms Controller
 *
 * @property \App\Model\Table\RoomsTable $Rooms
 *
 * @method \App\Model\Entity\Room[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RoomTypes', 'Floors', 'RoomOwners']
        ];
        $rooms = $this->paginate($this->Rooms);
        $this->set([
            'rooms'=>$rooms,
            '_serialize'=>['rooms']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $room = $this->Rooms->get($id, [
            'contain' => ['RoomTypes', 'Floors', 'RoomOwners', 'Amenities.AmenityTypes', 'WeekDays', 'RoomImages']
        ]);
      

        $this->set([
            'room'=>$room,
            '_serialize'=>['room']
        ]);
    }

    public function get_room_by_type($room_type_id){

        $rooms = $this->Rooms->find()->where(['room_type_id' => $room_type_id])->contain(['RoomTypes', 'Floors', 'RoomOwners', 'Amenities.AmenityTypes', 'WeekDays', 'RoomImages'])->toList();

   
        $this->set([
            'rooms'=>$rooms,
            '_serialize'=>['rooms']
        ]);
    }

    public function get_room_by_floor_id($id){
        $rooms = $this->Rooms->find()->where(['floor_id' => $id])->contain(['RoomTypes', 'Floors', 'RoomOwners', 'Amenities.AmenityTypes', 'WeekDays', 'RoomImages'])->toList();
        $this->set([
            'rooms'=>$rooms,
            '_serialize'=>['rooms']
        ]);
    }

    public function out_of_order_rooms($data){
        $this->set([
            'rooms'=>$data.rooms,
            '_serialize'=>['rooms']
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
        $room = $this->Rooms->newEntity();
        if ($this->request->is('post')) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $res['status'] = 1;
                $res['msg'] = 'The room has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room could not be saved. Please, try again.';  
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
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $room = $this->Rooms->get($id, [
            'contain' => ['Amenities', 'WeekDays']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $res['status'] = 1;
                $res['msg'] = 'The room has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room could not be saved. Please, try again.';  
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
     * @param string|null $id Room id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $room = $this->Rooms->get($id);
        if ($this->Rooms->delete($room)) {          
            $res['status'] = 1;
            $res['msg'] = 'The room has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The room could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
