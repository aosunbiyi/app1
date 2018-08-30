<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HotelRepresentatives Controller
 *
 * @property \App\Model\Table\HotelRepresentativesTable $HotelRepresentatives
 *
 * @method \App\Model\Entity\HotelRepresentative[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HotelRepresentativesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hotelRepresentatives = $this->paginate($this->HotelRepresentatives);

        $this->set(compact('hotelRepresentatives'));
    }

    /**
     * View method
     *
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelRepresentative = $this->HotelRepresentatives->get($id, [
            'contain' => ['Accounts']
        ]);

        $this->set('hotelRepresentative', $hotelRepresentative);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hotelRepresentative = $this->HotelRepresentatives->newEntity();
        if ($this->request->is('post')) {
            $hotelRepresentative = $this->HotelRepresentatives->patchEntity($hotelRepresentative, $this->request->getData());
            if ($this->HotelRepresentatives->save($hotelRepresentative)) {
                $this->Flash->success(__('The hotel representative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel representative could not be saved. Please, try again.'));
        }
        $this->set(compact('hotelRepresentative'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hotelRepresentative = $this->HotelRepresentatives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelRepresentative = $this->HotelRepresentatives->patchEntity($hotelRepresentative, $this->request->getData());
            if ($this->HotelRepresentatives->save($hotelRepresentative)) {
                $this->Flash->success(__('The hotel representative has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The hotel representative could not be saved. Please, try again.'));
        }
        $this->set(compact('hotelRepresentative'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hotelRepresentative = $this->HotelRepresentatives->get($id);
        if ($this->HotelRepresentatives->delete($hotelRepresentative)) {
            $this->Flash->success(__('The hotel representative has been deleted.'));
        } else {
            $this->Flash->error(__('The hotel representative could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
