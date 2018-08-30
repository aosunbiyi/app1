<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CardTypePrefixes Controller
 *
 * @property \App\Model\Table\CardTypePrefixesTable $CardTypePrefixes
 *
 * @method \App\Model\Entity\CardTypePrefix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardTypePrefixesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SettlementTypes']
        ];
        $cardTypePrefixes = $this->paginate($this->CardTypePrefixes);

        $this->set(compact('cardTypePrefixes'));
    }

    /**
     * View method
     *
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardTypePrefix = $this->CardTypePrefixes->get($id, [
            'contain' => ['SettlementTypes']
        ]);

        $this->set('cardTypePrefix', $cardTypePrefix);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cardTypePrefix = $this->CardTypePrefixes->newEntity();
        if ($this->request->is('post')) {
            $cardTypePrefix = $this->CardTypePrefixes->patchEntity($cardTypePrefix, $this->request->getData());
            if ($this->CardTypePrefixes->save($cardTypePrefix)) {
                $this->Flash->success(__('The card type prefix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card type prefix could not be saved. Please, try again.'));
        }
        $settlementTypes = $this->CardTypePrefixes->SettlementTypes->find('list', ['limit' => 200]);
        $this->set(compact('cardTypePrefix', 'settlementTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cardTypePrefix = $this->CardTypePrefixes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardTypePrefix = $this->CardTypePrefixes->patchEntity($cardTypePrefix, $this->request->getData());
            if ($this->CardTypePrefixes->save($cardTypePrefix)) {
                $this->Flash->success(__('The card type prefix has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The card type prefix could not be saved. Please, try again.'));
        }
        $settlementTypes = $this->CardTypePrefixes->SettlementTypes->find('list', ['limit' => 200]);
        $this->set(compact('cardTypePrefix', 'settlementTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cardTypePrefix = $this->CardTypePrefixes->get($id);
        if ($this->CardTypePrefixes->delete($cardTypePrefix)) {
            $this->Flash->success(__('The card type prefix has been deleted.'));
        } else {
            $this->Flash->error(__('The card type prefix could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
