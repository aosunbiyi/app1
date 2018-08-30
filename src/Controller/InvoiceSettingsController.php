<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InvoiceSettings Controller
 *
 * @property \App\Model\Table\InvoiceSettingsTable $InvoiceSettings
 *
 * @method \App\Model\Entity\InvoiceSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvoiceSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $invoiceSettings = $this->paginate($this->InvoiceSettings);

        $this->set(compact('invoiceSettings'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice Setting id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoiceSetting = $this->InvoiceSettings->get($id, [
            'contain' => []
        ]);

        $this->set('invoiceSetting', $invoiceSetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoiceSetting = $this->InvoiceSettings->newEntity();
        if ($this->request->is('post')) {
            $invoiceSetting = $this->InvoiceSettings->patchEntity($invoiceSetting, $this->request->getData());
            if ($this->InvoiceSettings->save($invoiceSetting)) {
                $this->Flash->success(__('The invoice setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice setting could not be saved. Please, try again.'));
        }
        $this->set(compact('invoiceSetting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoiceSetting = $this->InvoiceSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoiceSetting = $this->InvoiceSettings->patchEntity($invoiceSetting, $this->request->getData());
            if ($this->InvoiceSettings->save($invoiceSetting)) {
                $this->Flash->success(__('The invoice setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice setting could not be saved. Please, try again.'));
        }
        $this->set(compact('invoiceSetting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoiceSetting = $this->InvoiceSettings->get($id);
        if ($this->InvoiceSettings->delete($invoiceSetting)) {
            $this->Flash->success(__('The invoice setting has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
