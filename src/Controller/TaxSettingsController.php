<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TaxSettings Controller
 *
 * @property \App\Model\Table\TaxSettingsTable $TaxSettings
 *
 * @method \App\Model\Entity\TaxSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TaxSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TaxSettingTypes']
        ];
        $taxSettings = $this->paginate($this->TaxSettings);

        $this->set(compact('taxSettings'));
    }

    /**
     * View method
     *
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxSetting = $this->TaxSettings->get($id, [
            'contain' => ['TaxSettingTypes']
        ]);

        $this->set('taxSetting', $taxSetting);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taxSetting = $this->TaxSettings->newEntity();
        if ($this->request->is('post')) {
            $taxSetting = $this->TaxSettings->patchEntity($taxSetting, $this->request->getData());
            if ($this->TaxSettings->save($taxSetting)) {
                $this->Flash->success(__('The tax setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax setting could not be saved. Please, try again.'));
        }
        $taxSettingTypes = $this->TaxSettings->TaxSettingTypes->find('list', ['limit' => 200]);
        $this->set(compact('taxSetting', 'taxSettingTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taxSetting = $this->TaxSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxSetting = $this->TaxSettings->patchEntity($taxSetting, $this->request->getData());
            if ($this->TaxSettings->save($taxSetting)) {
                $this->Flash->success(__('The tax setting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax setting could not be saved. Please, try again.'));
        }
        $taxSettingTypes = $this->TaxSettings->TaxSettingTypes->find('list', ['limit' => 200]);
        $this->set(compact('taxSetting', 'taxSettingTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taxSetting = $this->TaxSettings->get($id);
        if ($this->TaxSettings->delete($taxSetting)) {
            $this->Flash->success(__('The tax setting has been deleted.'));
        } else {
            $this->Flash->error(__('The tax setting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
