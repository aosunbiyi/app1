<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('roomTypesRates'));
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
        $roomTypesRate = $this->RoomTypesRates->get($id, [
            'contain' => ['RoomTypes', 'Rates']
        ]);

        $this->set('roomTypesRate', $roomTypesRate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomTypesRate = $this->RoomTypesRates->newEntity();
        if ($this->request->is('post')) {
            $roomTypesRate = $this->RoomTypesRates->patchEntity($roomTypesRate, $this->request->getData());
            if ($this->RoomTypesRates->save($roomTypesRate)) {
                $this->Flash->success(__('The room types rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room types rate could not be saved. Please, try again.'));
        }
        $roomTypes = $this->RoomTypesRates->RoomTypes->find('list', ['limit' => 200]);
        $rates = $this->RoomTypesRates->Rates->find('list', ['limit' => 200]);
        $this->set(compact('roomTypesRate', 'roomTypes', 'rates'));
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
        $roomTypesRate = $this->RoomTypesRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomTypesRate = $this->RoomTypesRates->patchEntity($roomTypesRate, $this->request->getData());
            if ($this->RoomTypesRates->save($roomTypesRate)) {
                $this->Flash->success(__('The room types rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room types rate could not be saved. Please, try again.'));
        }
        $roomTypes = $this->RoomTypesRates->RoomTypes->find('list', ['limit' => 200]);
        $rates = $this->RoomTypesRates->Rates->find('list', ['limit' => 200]);
        $this->set(compact('roomTypesRate', 'roomTypes', 'rates'));
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
        $this->request->allowMethod(['post', 'delete']);
        $roomTypesRate = $this->RoomTypesRates->get($id);
        if ($this->RoomTypesRates->delete($roomTypesRate)) {
            $this->Flash->success(__('The room types rate has been deleted.'));
        } else {
            $this->Flash->error(__('The room types rate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
