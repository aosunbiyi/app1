<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RevenueBreakdowns Controller
 *
 * @property \App\Model\Table\RevenueBreakdownsTable $RevenueBreakdowns
 *
 * @method \App\Model\Entity\RevenueBreakdown[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RevenueBreakdownsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $revenueBreakdowns = $this->paginate($this->RevenueBreakdowns);

        $this->set(compact('revenueBreakdowns'));
    }

    /**
     * View method
     *
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $revenueBreakdown = $this->RevenueBreakdowns->get($id, [
            'contain' => []
        ]);

        $this->set('revenueBreakdown', $revenueBreakdown);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $revenueBreakdown = $this->RevenueBreakdowns->newEntity();
        if ($this->request->is('post')) {
            $revenueBreakdown = $this->RevenueBreakdowns->patchEntity($revenueBreakdown, $this->request->getData());
            if ($this->RevenueBreakdowns->save($revenueBreakdown)) {
                $this->Flash->success(__('The revenue breakdown has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The revenue breakdown could not be saved. Please, try again.'));
        }
        $this->set(compact('revenueBreakdown'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $revenueBreakdown = $this->RevenueBreakdowns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $revenueBreakdown = $this->RevenueBreakdowns->patchEntity($revenueBreakdown, $this->request->getData());
            if ($this->RevenueBreakdowns->save($revenueBreakdown)) {
                $this->Flash->success(__('The revenue breakdown has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The revenue breakdown could not be saved. Please, try again.'));
        }
        $this->set(compact('revenueBreakdown'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $revenueBreakdown = $this->RevenueBreakdowns->get($id);
        if ($this->RevenueBreakdowns->delete($revenueBreakdown)) {
            $this->Flash->success(__('The revenue breakdown has been deleted.'));
        } else {
            $this->Flash->error(__('The revenue breakdown could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
