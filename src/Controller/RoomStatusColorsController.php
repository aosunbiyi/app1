<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomStatusColors Controller
 *
 * @property \App\Model\Table\RoomStatusColorsTable $RoomStatusColors
 *
 * @method \App\Model\Entity\RoomStatusColor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomStatusColorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roomStatusColors = $this->paginate($this->RoomStatusColors);

        $this->set(compact('roomStatusColors'));
    }

    /**
     * View method
     *
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomStatusColor = $this->RoomStatusColors->get($id, [
            'contain' => []
        ]);

        $this->set('roomStatusColor', $roomStatusColor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomStatusColor = $this->RoomStatusColors->newEntity();
        if ($this->request->is('post')) {
            $roomStatusColor = $this->RoomStatusColors->patchEntity($roomStatusColor, $this->request->getData());
            if ($this->RoomStatusColors->save($roomStatusColor)) {
                $this->Flash->success(__('The room status color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room status color could not be saved. Please, try again.'));
        }
        $this->set(compact('roomStatusColor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomStatusColor = $this->RoomStatusColors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomStatusColor = $this->RoomStatusColors->patchEntity($roomStatusColor, $this->request->getData());
            if ($this->RoomStatusColors->save($roomStatusColor)) {
                $this->Flash->success(__('The room status color has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room status color could not be saved. Please, try again.'));
        }
        $this->set(compact('roomStatusColor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomStatusColor = $this->RoomStatusColors->get($id);
        if ($this->RoomStatusColors->delete($roomStatusColor)) {
            $this->Flash->success(__('The room status color has been deleted.'));
        } else {
            $this->Flash->error(__('The room status color could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
