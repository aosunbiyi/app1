<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

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

        $this->set([
            'invoiceSettings'=>$invoiceSettings,
            '_serialize'=>['invoiceSettings']
        ]);
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
        $invoiceSettings = $this->InvoiceSettings->get($id, [
            'contain' => []
        ]);

        $this->set([
            'invoiceSettings'=>$invoiceSettings,
            '_serialize'=>['invoiceSettings']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res=array();
        $invoiceSetting = $this->InvoiceSettings->newEntity();
        if ($this->request->is('post')) {
            $invoiceSetting = $this->InvoiceSettings->patchEntity($invoiceSetting, $this->request->getData());
            if ($this->InvoiceSettings->save($invoiceSetting)) {
                $res['status'] = 1;
                $res['msg'] = 'The invoice setting has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The invoice setting could not be saved. Please, try again.';  
            }
         
        }
     
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
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
        $res=array();
        $invoiceSetting = $this->InvoiceSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoiceSetting = $this->InvoiceSettings->patchEntity($invoiceSetting, $this->request->getData());
            if ($this->InvoiceSettings->save($invoiceSetting)) {
                $res['status'] = 1;
                $res['msg'] = 'The invoice setting has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The invoice setting could not be saved. Please, try again.';  
            }
        }
     
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
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
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $invoiceSetting = $this->InvoiceSettings->get($id);
        if ($this->InvoiceSettings->delete($invoiceSetting)) {
            $res['status'] = 1;
            $res['msg'] = 'The invoice setting has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The invoice setting could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
