<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notices Controller
 *
 * @property \App\Model\Table\NoticesTable $Notices
 *
 * @method \App\Model\Entity\Notice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoticesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $notices = $this->paginate($this->Notices);

        $this->set(compact('notices'));
    }

    /**
     * View method
     *
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notice = $this->Notices->get($id, [
            'contain' => []
        ]);

        $this->set('notice', $notice);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notice = $this->Notices->newEntity();
        if ($this->request->is('post')) {
            $notice = $this->Notices->patchEntity($notice, $this->request->getData());
            if ($this->Notices->save($notice)) {
                $this->Flash->success(__('The notice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notice could not be saved. Please, try again.'));
        }
        $this->set(compact('notice'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notice = $this->Notices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notice = $this->Notices->patchEntity($notice, $this->request->getData());
            if ($this->Notices->save($notice)) {
                $this->Flash->success(__('The notice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notice could not be saved. Please, try again.'));
        }
        $this->set(compact('notice'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notice = $this->Notices->get($id);
        if ($this->Notices->delete($notice)) {
            $this->Flash->success(__('The notice has been deleted.'));
        } else {
            $this->Flash->error(__('The notice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
