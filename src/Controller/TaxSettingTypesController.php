<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TaxSettingTypes Controller
 *
 * @property \App\Model\Table\TaxSettingTypesTable $TaxSettingTypes
 *
 * @method \App\Model\Entity\TaxSettingType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TaxSettingTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $taxSettingTypes = $this->paginate($this->TaxSettingTypes);

        $this->set(compact('taxSettingTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Tax Setting Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxSettingType = $this->TaxSettingTypes->get($id, [
            'contain' => ['TaxSettings']
        ]);

        $this->set('taxSettingType', $taxSettingType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taxSettingType = $this->TaxSettingTypes->newEntity();
        if ($this->request->is('post')) {
            $taxSettingType = $this->TaxSettingTypes->patchEntity($taxSettingType, $this->request->getData());
            if ($this->TaxSettingTypes->save($taxSettingType)) {
                $this->Flash->success(__('The tax setting type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax setting type could not be saved. Please, try again.'));
        }
        $this->set(compact('taxSettingType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tax Setting Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taxSettingType = $this->TaxSettingTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxSettingType = $this->TaxSettingTypes->patchEntity($taxSettingType, $this->request->getData());
            if ($this->TaxSettingTypes->save($taxSettingType)) {
                $this->Flash->success(__('The tax setting type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tax setting type could not be saved. Please, try again.'));
        }
        $this->set(compact('taxSettingType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tax Setting Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taxSettingType = $this->TaxSettingTypes->get($id);
        if ($this->TaxSettingTypes->delete($taxSettingType)) {
            $this->Flash->success(__('The tax setting type has been deleted.'));
        } else {
            $this->Flash->error(__('The tax setting type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
