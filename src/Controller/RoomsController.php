<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('rooms'));
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

        $this->set('room', $room);
    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $room = $this->Rooms->newEntity();
        if ($this->request->is('post')) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $this->Flash->success(__('The room has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room could not be saved. Please, try again.'));
        }
        $roomTypes = $this->Rooms->RoomTypes->find('list', ['limit' => 200]);
        $floors = $this->Rooms->Floors->find('list', ['limit' => 200]);
        $roomOwners = $this->Rooms->RoomOwners->find('list', ['limit' => 200]);
        $amenities = $this->Rooms->Amenities->find('list', ['limit' => 200]);
        $weekDays = $this->Rooms->WeekDays->find('list', ['limit' => 200]);
        $this->set(compact('room', 'roomTypes', 'floors', 'roomOwners', 'amenities', 'weekDays'));
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
        $room = $this->Rooms->get($id, [
            'contain' => ['Amenities', 'WeekDays']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $room = $this->Rooms->patchEntity($room, $this->request->getData());
            if ($this->Rooms->save($room)) {
                $this->Flash->success(__('The room has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room could not be saved. Please, try again.'));
        }
        $roomTypes = $this->Rooms->RoomTypes->find('list', ['limit' => 200]);
        $floors = $this->Rooms->Floors->find('list', ['limit' => 200]);
        $roomOwners = $this->Rooms->RoomOwners->find('list', ['limit' => 200]);
        $amenities = $this->Rooms->Amenities->find('list', ['limit' => 200]);
        $weekDays = $this->Rooms->WeekDays->find('list', ['limit' => 200]);
        $this->set(compact('room', 'roomTypes', 'floors', 'roomOwners', 'amenities', 'weekDays'));
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
        $this->request->allowMethod(['post', 'delete']);
        $room = $this->Rooms->get($id);
        if ($this->Rooms->delete($room)) {
            $this->Flash->success(__('The room has been deleted.'));
        } else {
            $this->Flash->error(__('The room could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
