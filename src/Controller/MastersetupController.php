<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mastersetup Controller
 *
 * @property \App\Model\Table\MastersetupTable $Mastersetup
 *
 * @method \App\Model\Entity\Mastersetup[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MastersetupController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mastersetup = $this->paginate($this->Mastersetup);

        $this->set(compact('mastersetup'));
    }

    /**
     * View method
     *
     * @param string|null $id Mastersetup id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mastersetup = $this->Mastersetup->get($id, [
            'contain' => []
        ]);

        $this->set('mastersetup', $mastersetup);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mastersetup = $this->Mastersetup->newEntity();
        if ($this->request->is('post')) {
            $mastersetup = $this->Mastersetup->patchEntity($mastersetup, $this->request->getData());
            if ($this->Mastersetup->save($mastersetup)) {
                $this->Flash->success(__('The mastersetup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mastersetup could not be saved. Please, try again.'));
        }
        $this->set(compact('mastersetup'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mastersetup id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mastersetup = $this->Mastersetup->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mastersetup = $this->Mastersetup->patchEntity($mastersetup, $this->request->getData());
            if ($this->Mastersetup->save($mastersetup)) {
                $this->Flash->success(__('The mastersetup has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mastersetup could not be saved. Please, try again.'));
        }
        $this->set(compact('mastersetup'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mastersetup id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mastersetup = $this->Mastersetup->get($id);
        if ($this->Mastersetup->delete($mastersetup)) {
            $this->Flash->success(__('The mastersetup has been deleted.'));
        } else {
            $this->Flash->error(__('The mastersetup could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
