<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryItemCategories Controller
 *
 * @property \App\Model\Table\LaundryItemCategoriesTable $LaundryItemCategories
 *
 * @method \App\Model\Entity\LaundryItemCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryItemCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $laundryItemCategories = $this->paginate($this->LaundryItemCategories);

        $this->set(compact('laundryItemCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Item Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryItemCategory = $this->LaundryItemCategories->get($id, [
            'contain' => []
        ]);

        $this->set('laundryItemCategory', $laundryItemCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryItemCategory = $this->LaundryItemCategories->newEntity();
        if ($this->request->is('post')) {

            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber

            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['category_image'] = $file['name'];
                $laundryItemCategory = $this->LaundryItemCategories->patchEntity($laundryItemCategory, $this->request->getData());
                
                if ($this->LaundryItemCategories->save($laundryItemCategory)) {
                    $this->Flash->success(__('The laundry item has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                       }
                } else {
                    $this->Flash->error(__('The laundry item could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
            }

        }
        $this->set(compact('laundryItemCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Laundry Item Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryItemCategory = $this->LaundryItemCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryItemCategory = $this->LaundryItemCategories->patchEntity($laundryItemCategory, $this->request->getData());

            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            

            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['category_image'] = $file['name'];
                $laundryItemCategory = $this->LaundryItemCategories->patchEntity($laundryItemCategory, $this->request->getData());
                
                if ($this->LaundryItemCategories->save($laundryItemCategory)) {
                    $this->Flash->success(__('The laundry item category has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                      }
            } else {
                    $this->Flash->error(__('The laundry item category could not be saved. Please, try again.'));
                    $this->Flash->error(__('Could not upload the file'));
            }

        }
        $this->set(compact('laundryItemCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Laundry Item Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryItemCategory = $this->LaundryItemCategories->get($id);
        if ($this->LaundryItemCategories->delete($laundryItemCategory)) {
            $this->Flash->success(__('The laundry item category has been deleted.'));
        } else {
            $this->Flash->error(__('The laundry item category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
