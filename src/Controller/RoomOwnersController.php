<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomOwners Controller
 *
 * @property \App\Model\Table\RoomOwnersTable $RoomOwners
 *
 * @method \App\Model\Entity\RoomOwner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomOwnersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roomOwners = $this->paginate($this->RoomOwners);

        $this->set(compact('roomOwners'));
    }

    /**
     * View method
     *
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomOwner = $this->RoomOwners->get($id, [
            'contain' => ['Rooms.RoomTypes','Rooms.RoomOwners']
        ]);

        $this->set('roomOwner', $roomOwner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomOwner = $this->RoomOwners->newEntity();
        if ($this->request->is('post')) {
            $roomOwner = $this->RoomOwners->patchEntity($roomOwner, $this->request->getData());
            if ($this->RoomOwners->save($roomOwner)) {
                $this->Flash->success(__('The room owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room owner could not be saved. Please, try again.'));
        }
        $this->set(compact('roomOwner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomOwner = $this->RoomOwners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomOwner = $this->RoomOwners->patchEntity($roomOwner, $this->request->getData());
            if ($this->RoomOwners->save($roomOwner)) {
                $this->Flash->success(__('The room owner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room owner could not be saved. Please, try again.'));
        }
        $this->set(compact('roomOwner'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomOwner = $this->RoomOwners->get($id);
        if ($this->RoomOwners->delete($roomOwner)) {
            $this->Flash->success(__('The room owner has been deleted.'));
        } else {
            $this->Flash->error(__('The room owner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
