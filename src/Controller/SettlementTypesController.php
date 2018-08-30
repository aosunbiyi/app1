<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SettlementTypes Controller
 *
 * @property \App\Model\Table\SettlementTypesTable $SettlementTypes
 *
 * @method \App\Model\Entity\SettlementType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SettlementTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $settlementTypes = $this->paginate($this->SettlementTypes);

        $this->set(compact('settlementTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $settlementType = $this->SettlementTypes->get($id, [
            'contain' => ['CardTypePrefixes']
        ]);

        $this->set('settlementType', $settlementType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $settlementType = $this->SettlementTypes->newEntity();
        if ($this->request->is('post')) {
            $settlementType = $this->SettlementTypes->patchEntity($settlementType, $this->request->getData());
            if ($this->SettlementTypes->save($settlementType)) {
                $this->Flash->success(__('The settlement type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement type could not be saved. Please, try again.'));
        }
        $this->set(compact('settlementType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $settlementType = $this->SettlementTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $settlementType = $this->SettlementTypes->patchEntity($settlementType, $this->request->getData());
            if ($this->SettlementTypes->save($settlementType)) {
                $this->Flash->success(__('The settlement type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The settlement type could not be saved. Please, try again.'));
        }
        $this->set(compact('settlementType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $settlementType = $this->SettlementTypes->get($id);
        if ($this->SettlementTypes->delete($settlementType)) {
            $this->Flash->success(__('The settlement type has been deleted.'));
        } else {
            $this->Flash->error(__('The settlement type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
