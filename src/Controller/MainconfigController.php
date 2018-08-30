<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mainconfig Controller
 *
 * @property \App\Model\Table\MainconfigTable $Mainconfig
 *
 * @method \App\Model\Entity\Mainconfig[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MainconfigController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mainconfig = $this->paginate($this->Mainconfig);

        $this->set(compact('mainconfig'));
    }

    /**
     * View method
     *
     * @param string|null $id Mainconfig id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mainconfig = $this->Mainconfig->get($id, [
            'contain' => []
        ]);

        $this->set('mainconfig', $mainconfig);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mainconfig = $this->Mainconfig->newEntity();
        if ($this->request->is('post')) {
            $mainconfig = $this->Mainconfig->patchEntity($mainconfig, $this->request->getData());
            if ($this->Mainconfig->save($mainconfig)) {
                $this->Flash->success(__('The mainconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mainconfig could not be saved. Please, try again.'));
        }
        $this->set(compact('mainconfig'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mainconfig id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mainconfig = $this->Mainconfig->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mainconfig = $this->Mainconfig->patchEntity($mainconfig, $this->request->getData());
            if ($this->Mainconfig->save($mainconfig)) {
                $this->Flash->success(__('The mainconfig has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mainconfig could not be saved. Please, try again.'));
        }
        $this->set(compact('mainconfig'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mainconfig id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mainconfig = $this->Mainconfig->get($id);
        if ($this->Mainconfig->delete($mainconfig)) {
            $this->Flash->success(__('The mainconfig has been deleted.'));
        } else {
            $this->Flash->error(__('The mainconfig could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
