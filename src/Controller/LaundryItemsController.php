<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryItems Controller
 *
 * @property \App\Model\Table\LaundryItemsTable $LaundryItems
 *
 * @method \App\Model\Entity\LaundryItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LaundryItemCategories']
        ];
        $laundryItems = $this->paginate($this->LaundryItems);

        $this->set(compact('laundryItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryItem = $this->LaundryItems->get($id, [
            'contain' => ['LaundryItemCategories', 'LaundryServices', 'LaundryGuestLaundryTransactionItems', 'LaundryHotelLaundryTransactionItems']
        ]);

        $this->set('laundryItem', $laundryItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryItem = $this->LaundryItems->newEntity();
        if ($this->request->is('post')) {
            $laundryItem = $this->LaundryItems->patchEntity($laundryItem, $this->request->getData());
            if ($this->LaundryItems->save($laundryItem)) {
                $this->Flash->success(__('The laundry item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry item could not be saved. Please, try again.'));
        }
        $laundryItemCategories = $this->LaundryItems->LaundryItemCategories->find('list', ['limit' => 200]);
        $laundryServices = $this->LaundryItems->LaundryServices->find('list', ['limit' => 200]);
        $laundryItemTypes=['Guest Laundry'=>'Guest Laundry','Hotel Laundry'=>'Hotel Laundry','Both'=>'Both'];
        $this->set(compact('laundryItem', 'laundryItemCategories', 'laundryServices','laundryItemTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryItem = $this->LaundryItems->get($id, [
            'contain' => ['LaundryServices']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryItem = $this->LaundryItems->patchEntity($laundryItem, $this->request->getData());
            if ($this->LaundryItems->save($laundryItem)) {
                $this->Flash->success(__('The laundry item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry item could not be saved. Please, try again.'));
        }
        $laundryItemCategories = $this->LaundryItems->LaundryItemCategories->find('list', ['limit' => 200]);
        $laundryServices = $this->LaundryItems->LaundryServices->find('list', ['limit' => 200]);
        $laundryItemTypes=['Guest Laundry'=>'Guest Laundry','Hotel Laundry'=>'Hotel Laundry','Both'=>'Both'];
        $this->set(compact('laundryItem', 'laundryItemCategories', 'laundryServices','laundryItemTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryItem = $this->LaundryItems->get($id);
        if ($this->LaundryItems->delete($laundryItem)) {
            $this->Flash->success(__('The laundry item has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
