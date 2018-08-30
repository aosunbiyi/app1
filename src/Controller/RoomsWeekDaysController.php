<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('roomsWeekDays'));
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
        $roomsWeekDay = $this->RoomsWeekDays->get($id, [
            'contain' => ['Rooms', 'WeekDays']
        ]);

        $this->set('roomsWeekDay', $roomsWeekDay);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomsWeekDay = $this->RoomsWeekDays->newEntity();
        if ($this->request->is('post')) {
            $roomsWeekDay = $this->RoomsWeekDays->patchEntity($roomsWeekDay, $this->request->getData());
            if ($this->RoomsWeekDays->save($roomsWeekDay)) {
                $this->Flash->success(__('The rooms week day has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rooms week day could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomsWeekDays->Rooms->find('list', ['limit' => 200]);
        $weekDays = $this->RoomsWeekDays->WeekDays->find('list', ['limit' => 200]);
        $this->set(compact('roomsWeekDay', 'rooms', 'weekDays'));
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
        $roomsWeekDay = $this->RoomsWeekDays->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomsWeekDay = $this->RoomsWeekDays->patchEntity($roomsWeekDay, $this->request->getData());
            if ($this->RoomsWeekDays->save($roomsWeekDay)) {
                $this->Flash->success(__('The rooms week day has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The rooms week day could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomsWeekDays->Rooms->find('list', ['limit' => 200]);
        $weekDays = $this->RoomsWeekDays->WeekDays->find('list', ['limit' => 200]);
        $this->set(compact('roomsWeekDay', 'rooms', 'weekDays'));
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
        $this->request->allowMethod(['post', 'delete']);
        $roomsWeekDay = $this->RoomsWeekDays->get($id);
        if ($this->RoomsWeekDays->delete($roomsWeekDay)) {
            $this->Flash->success(__('The rooms week day has been deleted.'));
        } else {
            $this->Flash->error(__('The rooms week day could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
