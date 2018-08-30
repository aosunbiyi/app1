<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WeekDays Controller
 *
 * @property \App\Model\Table\WeekDaysTable $WeekDays
 *
 * @method \App\Model\Entity\WeekDay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WeekDaysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $weekDays = $this->paginate($this->WeekDays);

        $this->set(compact('weekDays'));
    }

    /**
     * View method
     *
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weekDay = $this->WeekDays->get($id, [
            'contain' => ['Rooms.RoomTypes','Rooms.Wings','Rooms.RoomOwners']
        ]);

        $this->set('weekDay', $weekDay);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $weekDay = $this->WeekDays->newEntity();
        if ($this->request->is('post')) {
            $weekDay = $this->WeekDays->patchEntity($weekDay, $this->request->getData());
            if ($this->WeekDays->save($weekDay)) {
                $this->Flash->success(__('The week day has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week day could not be saved. Please, try again.'));
        }
        $rooms = $this->WeekDays->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('weekDay', 'rooms'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $weekDay = $this->WeekDays->get($id, [
            'contain' => ['Rooms']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weekDay = $this->WeekDays->patchEntity($weekDay, $this->request->getData());
            if ($this->WeekDays->save($weekDay)) {
                $this->Flash->success(__('The week day has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The week day could not be saved. Please, try again.'));
        }
        $rooms = $this->WeekDays->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('weekDay', 'rooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $weekDay = $this->WeekDays->get($id);
        if ($this->WeekDays->delete($weekDay)) {
            $this->Flash->success(__('The week day has been deleted.'));
        } else {
            $this->Flash->error(__('The week day could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
