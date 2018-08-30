<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propertysetup Controller
 *
 * @property \App\Model\Table\PropertysetupTable $Propertysetup
 *
 * @method \App\Model\Entity\Propertysetup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropertysetupController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $propertysetup = $this->paginate($this->Propertysetup);

        $this->set(compact('propertysetup'));
    }

    /**
     * View method
     *
     * @param string|null $id Propertysetup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertysetup = $this->Propertysetup->get($id, [
            'contain' => []
        ]);

        $this->set('propertysetup', $propertysetup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertysetup = $this->Propertysetup->newEntity();
        if ($this->request->is('post')) {
            $propertysetup = $this->Propertysetup->patchEntity($propertysetup, $this->request->getData());
            if ($this->Propertysetup->save($propertysetup)) {
                $this->Flash->success(__('The propertysetup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propertysetup could not be saved. Please, try again.'));
        }
        $this->set(compact('propertysetup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Propertysetup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propertysetup = $this->Propertysetup->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propertysetup = $this->Propertysetup->patchEntity($propertysetup, $this->request->getData());
            if ($this->Propertysetup->save($propertysetup)) {
                $this->Flash->success(__('The propertysetup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propertysetup could not be saved. Please, try again.'));
        }
        $this->set(compact('propertysetup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Propertysetup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propertysetup = $this->Propertysetup->get($id);
        if ($this->Propertysetup->delete($propertysetup)) {
            $this->Flash->success(__('The propertysetup has been deleted.'));
        } else {
            $this->Flash->error(__('The propertysetup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
