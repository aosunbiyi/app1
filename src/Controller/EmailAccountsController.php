<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailAccounts Controller
 *
 * @property \App\Model\Table\EmailAccountsTable $EmailAccounts
 *
 * @method \App\Model\Entity\EmailAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailAccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emailAccounts = $this->paginate($this->EmailAccounts);

        $this->set(compact('emailAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailAccount = $this->EmailAccounts->get($id, [
            'contain' => []
        ]);

        $this->set('emailAccount', $emailAccount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailAccount = $this->EmailAccounts->newEntity();
        if ($this->request->is('post')) {
            $emailAccount = $this->EmailAccounts->patchEntity($emailAccount, $this->request->getData());
            if ($this->EmailAccounts->save($emailAccount)) {
                $this->Flash->success(__('The email account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email account could not be saved. Please, try again.'));
        }
        $this->set(compact('emailAccount'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailAccount = $this->EmailAccounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailAccount = $this->EmailAccounts->patchEntity($emailAccount, $this->request->getData());
            if ($this->EmailAccounts->save($emailAccount)) {
                $this->Flash->success(__('The email account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The email account could not be saved. Please, try again.'));
        }
        $this->set(compact('emailAccount'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailAccount = $this->EmailAccounts->get($id);
        if ($this->EmailAccounts->delete($emailAccount)) {
            $this->Flash->success(__('The email account has been deleted.'));
        } else {
            $this->Flash->error(__('The email account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
