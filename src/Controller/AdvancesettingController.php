<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Advancesetting Controller
 *
 * @property \App\Model\Table\AdvancesettingTable $Advancesetting
 *
 * @method \App\Model\Entity\Advancesetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdvancesettingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $advancesetting = $this->paginate($this->Advancesetting);

        $this->set(compact('advancesetting'));
    }

    /**
     * View method
     *
     * @param string|null $id Advancesetting id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $advancesetting = $this->Advancesetting->get($id, [
            'contain' => []
        ]);

        $this->set('advancesetting', $advancesetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $advancesetting = $this->Advancesetting->newEntity();
        if ($this->request->is('post')) {
            $advancesetting = $this->Advancesetting->patchEntity($advancesetting, $this->request->getData());
            if ($this->Advancesetting->save($advancesetting)) {
                $this->Flash->success(__('The advancesetting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The advancesetting could not be saved. Please, try again.'));
        }
        $this->set(compact('advancesetting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Advancesetting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $advancesetting = $this->Advancesetting->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $advancesetting = $this->Advancesetting->patchEntity($advancesetting, $this->request->getData());
            if ($this->Advancesetting->save($advancesetting)) {
                $this->Flash->success(__('The advancesetting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The advancesetting could not be saved. Please, try again.'));
        }
        $this->set(compact('advancesetting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Advancesetting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $advancesetting = $this->Advancesetting->get($id);
        if ($this->Advancesetting->delete($advancesetting)) {
            $this->Flash->success(__('The advancesetting has been deleted.'));
        } else {
            $this->Flash->error(__('The advancesetting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
