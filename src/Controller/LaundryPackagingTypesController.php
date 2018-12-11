<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryPackagingTypes Controller
 *
 * @property \App\Model\Table\LaundryPackagingTypesTable $LaundryPackagingTypes
 *
 * @method \App\Model\Entity\LaundryPackagingType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryPackagingTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $laundryPackagingTypes = $this->paginate($this->LaundryPackagingTypes);

        $this->set(compact('laundryPackagingTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Packaging Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryPackagingType = $this->LaundryPackagingTypes->get($id, [
            'contain' => ['LaundryGuestLaundryTransactions', 'LaundryHotelLaundryTransactions']
        ]);

        $this->set('laundryPackagingType', $laundryPackagingType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryPackagingType = $this->LaundryPackagingTypes->newEntity();
        if ($this->request->is('post')) {

            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber


            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['packaging_image'] = $file['name'];
                $laundryPackagingType = $this->LaundryPackagingTypes->patchEntity($laundryPackagingType, $this->request->getData());
                
                if ($this->LaundryPackagingTypes->save($laundryPackagingType)) {
                    $this->Flash->success(__('The laundry packaging type has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                      }
            } else {
                $this->Flash->error(__('The laundry packaging type could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
            }

        }
        $this->set(compact('laundryPackagingType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Packaging Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryPackagingType = $this->LaundryPackagingTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryPackagingType = $this->LaundryPackagingTypes->patchEntity($laundryPackagingType, $this->request->getData());
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber


            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['service_image'] = $file['name'];
                
                if ($this->LaundryPackagingTypes->save($laundryPackagingType)) {
                    $this->Flash->success(__('The laundry packaging type has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('The laundry packaging type could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
            }


        }
        $this->set(compact('laundryPackagingType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Packaging Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryPackagingType = $this->LaundryPackagingTypes->get($id);
        if ($this->LaundryPackagingTypes->delete($laundryPackagingType)) {
            $this->Flash->success(__('The laundry packaging type has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry packaging type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
