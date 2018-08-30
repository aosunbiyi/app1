<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wings Controller
 *
 * @property \App\Model\Table\WingsTable $Wings
 *
 * @method \App\Model\Entity\Wing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $wings = $this->paginate($this->Wings);

        $this->set(compact('wings'));
    }

    /**
     * View method
     *
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wing = $this->Wings->get($id, [
            'contain' => ['Floors']
        ]);

        $this->set('wing', $wing);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wing = $this->Wings->newEntity();
        if ($this->request->is('post')) {
            $wing = $this->Wings->patchEntity($wing, $this->request->getData());
            if ($this->Wings->save($wing)) {
                $this->Flash->success(__('The wing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wing could not be saved. Please, try again.'));
        }
        $this->set(compact('wing'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wing = $this->Wings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wing = $this->Wings->patchEntity($wing, $this->request->getData());
            if ($this->Wings->save($wing)) {
                $this->Flash->success(__('The wing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wing could not be saved. Please, try again.'));
        }
        $this->set(compact('wing'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wing = $this->Wings->get($id);
        if ($this->Wings->delete($wing)) {
            $this->Flash->success(__('The wing has been deleted.'));
        } else {
            $this->Flash->error(__('The wing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
