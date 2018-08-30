<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtraCharges Controller
 *
 * @property \App\Model\Table\ExtraChargesTable $ExtraCharges
 *
 * @method \App\Model\Entity\ExtraCharge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtraChargesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtraChargeCategories']
        ];
        $extraCharges = $this->paginate($this->ExtraCharges);

        $this->set(compact('extraCharges'));
    }

    /**
     * View method
     *
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraCharge = $this->ExtraCharges->get($id, [
            'contain' => ['ExtraChargeCategories']
        ]);

        $this->set('extraCharge', $extraCharge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extraCharge = $this->ExtraCharges->newEntity();
        if ($this->request->is('post')) {
            $extraCharge = $this->ExtraCharges->patchEntity($extraCharge, $this->request->getData());
            if ($this->ExtraCharges->save($extraCharge)) {
                $this->Flash->success(__('The extra charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra charge could not be saved. Please, try again.'));
        }
        $extraChargeCategories = $this->ExtraCharges->ExtraChargeCategories->find('list', ['limit' => 200]);
        $this->set(compact('extraCharge', 'extraChargeCategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extraCharge = $this->ExtraCharges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraCharge = $this->ExtraCharges->patchEntity($extraCharge, $this->request->getData());
            if ($this->ExtraCharges->save($extraCharge)) {
                $this->Flash->success(__('The extra charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra charge could not be saved. Please, try again.'));
        }
        $extraChargeCategories = $this->ExtraCharges->ExtraChargeCategories->find('list', ['limit' => 200]);
        $this->set(compact('extraCharge', 'extraChargeCategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extraCharge = $this->ExtraCharges->get($id);
        if ($this->ExtraCharges->delete($extraCharge)) {
            $this->Flash->success(__('The extra charge has been deleted.'));
        } else {
            $this->Flash->error(__('The extra charge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
