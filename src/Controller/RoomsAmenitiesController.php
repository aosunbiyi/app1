<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomsAmenities Controller
 *
 * @property \App\Model\Table\RoomsAmenitiesTable $RoomsAmenities
 *
 * @method \App\Model\Entity\RoomsAmenity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomsAmenitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms', 'Amenities']
        ];
        $roomsAmenities = $this->paginate($this->RoomsAmenities);

        $this->set(compact('roomsAmenities'));
    }

    /**
     * View method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomsAmenity = $this->RoomsAmenities->get($id, [
            'contain' => ['Rooms', 'Amenities']
        ]);

        $this->set('roomsAmenity', $roomsAmenity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomsAmenity = $this->RoomsAmenities->newEntity();
        if ($this->request->is('post')) {
            $roomsAmenity = $this->RoomsAmenities->patchEntity($roomsAmenity, $this->request->getData());
            if ($this->RoomsAmenities->save($roomsAmenity)) {
                $this->Flash->success(__('The rooms amenity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rooms amenity could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomsAmenities->Rooms->find('list', ['limit' => 200]);
        $amenities = $this->RoomsAmenities->Amenities->find('list', ['limit' => 200]);
        $this->set(compact('roomsAmenity', 'rooms', 'amenities'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomsAmenity = $this->RoomsAmenities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomsAmenity = $this->RoomsAmenities->patchEntity($roomsAmenity, $this->request->getData());
            if ($this->RoomsAmenities->save($roomsAmenity)) {
                $this->Flash->success(__('The rooms amenity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rooms amenity could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomsAmenities->Rooms->find('list', ['limit' => 200]);
        $amenities = $this->RoomsAmenities->Amenities->find('list', ['limit' => 200]);
        $this->set(compact('roomsAmenity', 'rooms', 'amenities'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomsAmenity = $this->RoomsAmenities->get($id);
        if ($this->RoomsAmenities->delete($roomsAmenity)) {
            $this->Flash->success(__('The rooms amenity has been deleted.'));
        } else {
            $this->Flash->error(__('The rooms amenity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
