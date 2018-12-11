<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryItemsLaundryServices Controller
 *
 * @property \App\Model\Table\LaundryItemsLaundryServicesTable $LaundryItemsLaundryServices
 *
 * @method \App\Model\Entity\LaundryItemsLaundryService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryItemsLaundryServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LaundryItems', 'LaundryServices']
        ];
        $laundryItemsLaundryServices = $this->paginate($this->LaundryItemsLaundryServices);

        $this->set(compact('laundryItemsLaundryServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Items Laundry Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->get($id, [
            'contain' => ['LaundryItems', 'LaundryServices']
        ]);

        $this->set('laundryItemsLaundryService', $laundryItemsLaundryService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->newEntity();
        if ($this->request->is('post')) {
            $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->patchEntity($laundryItemsLaundryService, $this->request->getData());
            if ($this->LaundryItemsLaundryServices->save($laundryItemsLaundryService)) {
                $this->Flash->success(__('The laundry items laundry service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry items laundry service could not be saved. Please, try again.'));
        }
        $laundryItems = $this->LaundryItemsLaundryServices->LaundryItems->find('list', ['limit' => 200]);
        $laundryServices = $this->LaundryItemsLaundryServices->LaundryServices->find('list', ['limit' => 200]);
        $this->set(compact('laundryItemsLaundryService', 'laundryItems', 'laundryServices'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Items Laundry Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->patchEntity($laundryItemsLaundryService, $this->request->getData());
            if ($this->LaundryItemsLaundryServices->save($laundryItemsLaundryService)) {
                $this->Flash->success(__('The laundry items laundry service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The laundry items laundry service could not be saved. Please, try again.'));
        }
        $laundryItems = $this->LaundryItemsLaundryServices->LaundryItems->find('list', ['limit' => 200]);
        $laundryServices = $this->LaundryItemsLaundryServices->LaundryServices->find('list', ['limit' => 200]);
        $this->set(compact('laundryItemsLaundryService', 'laundryItems', 'laundryServices'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Items Laundry Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryItemsLaundryService = $this->LaundryItemsLaundryServices->get($id);
        if ($this->LaundryItemsLaundryServices->delete($laundryItemsLaundryService)) {
            $this->Flash->success(__('The laundry items laundry service has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry items laundry service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
