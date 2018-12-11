<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryHotelServices Controller
 *
 * @property \App\Model\Table\LaundryHotelServicesTable $LaundryHotelServices
 *
 * @method \App\Model\Entity\LaundryHotelService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryHotelServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $laundryHotelServices = $this->paginate($this->LaundryHotelServices);

        $this->set(compact('laundryHotelServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Hotel Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryHotelService = $this->LaundryHotelServices->get($id, [
            'contain' => ['LaundryGuestLaundryTransactions', 'LaundryHotelLaundryTransactions']
        ]);

        $this->set('laundryHotelService', $laundryHotelService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryHotelService = $this->LaundryHotelServices->newEntity();
        if ($this->request->is('post')) {
            $laundryHotelService = $this->LaundryHotelServices->patchEntity($laundryHotelService, $this->request->getData());
            if ($this->LaundryHotelServices->save($laundryHotelService)) {
                $this->Flash->success(__('The laundry hotel service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry hotel service could not be saved. Please, try again.'));
        }
        $this->set(compact('laundryHotelService'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Hotel Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryHotelService = $this->LaundryHotelServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryHotelService = $this->LaundryHotelServices->patchEntity($laundryHotelService, $this->request->getData());
            if ($this->LaundryHotelServices->save($laundryHotelService)) {
                $this->Flash->success(__('The laundry hotel service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry hotel service could not be saved. Please, try again.'));
        }
        $this->set(compact('laundryHotelService'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Hotel Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryHotelService = $this->LaundryHotelServices->get($id);
        if ($this->LaundryHotelServices->delete($laundryHotelService)) {
            $this->Flash->success(__('The laundry hotel service has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry hotel service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
