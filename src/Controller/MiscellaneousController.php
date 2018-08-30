<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Miscellaneous Controller
 *
 * @property \App\Model\Table\MiscellaneousTable $Miscellaneous
 *
 * @method \App\Model\Entity\Miscellaneous[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MiscellaneousController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $miscellaneous = $this->paginate($this->Miscellaneous);

        $this->set(compact('miscellaneous'));
    }

    /**
     * View method
     *
     * @param string|null $id Miscellaneous id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $miscellaneous = $this->Miscellaneous->get($id, [
            'contain' => []
        ]);

        $this->set('miscellaneous', $miscellaneous);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $miscellaneous = $this->Miscellaneous->newEntity();
        if ($this->request->is('post')) {
            $miscellaneous = $this->Miscellaneous->patchEntity($miscellaneous, $this->request->getData());
            if ($this->Miscellaneous->save($miscellaneous)) {
                $this->Flash->success(__('The miscellaneous has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miscellaneous could not be saved. Please, try again.'));
        }
        $this->set(compact('miscellaneous'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Miscellaneous id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $miscellaneous = $this->Miscellaneous->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $miscellaneous = $this->Miscellaneous->patchEntity($miscellaneous, $this->request->getData());
            if ($this->Miscellaneous->save($miscellaneous)) {
                $this->Flash->success(__('The miscellaneous has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The miscellaneous could not be saved. Please, try again.'));
        }
        $this->set(compact('miscellaneous'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Miscellaneous id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $miscellaneous = $this->Miscellaneous->get($id);
        if ($this->Miscellaneous->delete($miscellaneous)) {
            $this->Flash->success(__('The miscellaneous has been deleted.'));
        } else {
            $this->Flash->error(__('The miscellaneous could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
