<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Remarks Controller
 *
 * @property \App\Model\Table\RemarksTable $Remarks
 *
 * @method \App\Model\Entity\Remark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RemarksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RemarkCategories']
        ];
        $remarks = $this->paginate($this->Remarks);

        $this->set(compact('remarks'));
    }

    /**
     * View method
     *
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $remark = $this->Remarks->get($id, [
            'contain' => ['RemarkCategories']
        ]);

        $this->set('remark', $remark);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $remark = $this->Remarks->newEntity();
        if ($this->request->is('post')) {
            $remark = $this->Remarks->patchEntity($remark, $this->request->getData());
            if ($this->Remarks->save($remark)) {
                $this->Flash->success(__('The remark has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The remark could not be saved. Please, try again.'));
        }
        $remarkCategories = $this->Remarks->RemarkCategories->find('list', ['limit' => 200]);
        $this->set(compact('remark', 'remarkCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $remark = $this->Remarks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $remark = $this->Remarks->patchEntity($remark, $this->request->getData());
            if ($this->Remarks->save($remark)) {
                $this->Flash->success(__('The remark has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The remark could not be saved. Please, try again.'));
        }
        $remarkCategories = $this->Remarks->RemarkCategories->find('list', ['limit' => 200]);
        $this->set(compact('remark', 'remarkCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $remark = $this->Remarks->get($id);
        if ($this->Remarks->delete($remark)) {
            $this->Flash->success(__('The remark has been deleted.'));
        } else {
            $this->Flash->error(__('The remark could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
