<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Identities Controller
 *
 * @property \App\Model\Table\IdentitiesTable $Identities
 *
 * @method \App\Model\Entity\Identity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdentitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $identities = $this->paginate($this->Identities);

        $this->set(compact('identities'));
    }

    /**
     * View method
     *
     * @param string|null $id Identity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $identity = $this->Identities->get($id, [
            'contain' => []
        ]);

        $this->set('identity', $identity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $identity = $this->Identities->newEntity();
        if ($this->request->is('post')) {
            $identity = $this->Identities->patchEntity($identity, $this->request->getData());
            if ($this->Identities->save($identity)) {
                $this->Flash->success(__('The identity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The identity could not be saved. Please, try again.'));
        }
        $this->set(compact('identity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Identity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $identity = $this->Identities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $identity = $this->Identities->patchEntity($identity, $this->request->getData());
            if ($this->Identities->save($identity)) {
                $this->Flash->success(__('The identity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The identity could not be saved. Please, try again.'));
        }
        $this->set(compact('identity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Identity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $identity = $this->Identities->get($id);
        if ($this->Identities->delete($identity)) {
            $this->Flash->success(__('The identity has been deleted.'));
        } else {
            $this->Flash->error(__('The identity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
