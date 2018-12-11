<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryServices Controller
 *
 * @property \App\Model\Table\LaundryServicesTable $LaundryServices
 *
 * @method \App\Model\Entity\LaundryService[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $laundryServices = $this->paginate($this->LaundryServices);

        $this->set(compact('laundryServices'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryService = $this->LaundryServices->get($id, [
            'contain' => ['LaundryItems', 'LaundryGuestLaundryTransactions', 'LaundryHotelLaundryTransactions']
        ]);

        $this->set('laundryService', $laundryService);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryService = $this->LaundryServices->newEntity();
        if ($this->request->is('post')) {

            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber

                
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['service_image'] = $file['name'];
                $laundryService = $this->LaundryServices->patchEntity($laundryService, $this->request->getData());
                
                if ($this->LaundryServices->save($laundryService)) {
                    $this->Flash->success(__('The laundry service has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                      }
                } else {
                    $this->Flash->error(__('The laundry service could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
                }

            } 

        
        $laundryItems = $this->LaundryServices->LaundryItems->find('list', ['limit' => 200]);
        $this->set(compact('laundryService', 'laundryItems'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryService = $this->LaundryServices->get($id, [
            'contain' => ['LaundryItems']
        ]);
    

        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryService = $this->LaundryServices->patchEntity($laundryService, $this->request->getData());
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
           
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['service_image'] = $file['name'];
                $laundryService = $this->LaundryServices->patchEntity($laundryService, $this->request->getData());
                
                if ($this->LaundryServices->save($laundryService)) {
                    $this->Flash->success(__('The laundry service has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                } else {
                    $this->Flash->error(__('The laundry service could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
                }
            
        }


        $laundryItems = $this->LaundryServices->LaundryItems->find('list', ['limit' => 200]);
        $this->set(compact('laundryService', 'laundryItems'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryService = $this->LaundryServices->get($id);
        if ($this->LaundryServices->delete($laundryService)) {
            $this->Flash->success(__('The laundry service has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
