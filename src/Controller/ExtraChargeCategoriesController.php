<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtraChargeCategories Controller
 *
 * @property \App\Model\Table\ExtraChargeCategoriesTable $ExtraChargeCategories
 *
 * @method \App\Model\Entity\ExtraChargeCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtraChargeCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $extraChargeCategories = $this->paginate($this->ExtraChargeCategories);

        $this->set(compact('extraChargeCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraChargeCategory = $this->ExtraChargeCategories->get($id, [
            'contain' => ['ExtraCharges']
        ]);

        $this->set('extraChargeCategory', $extraChargeCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extraChargeCategory = $this->ExtraChargeCategories->newEntity();
        if ($this->request->is('post')) {
            $extraChargeCategory = $this->ExtraChargeCategories->patchEntity($extraChargeCategory, $this->request->getData());
            if ($this->ExtraChargeCategories->save($extraChargeCategory)) {
                $this->Flash->success(__('The extra charge category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra charge category could not be saved. Please, try again.'));
        }
        $this->set(compact('extraChargeCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extraChargeCategory = $this->ExtraChargeCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraChargeCategory = $this->ExtraChargeCategories->patchEntity($extraChargeCategory, $this->request->getData());
            if ($this->ExtraChargeCategories->save($extraChargeCategory)) {
                $this->Flash->success(__('The extra charge category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The extra charge category could not be saved. Please, try again.'));
        }
        $this->set(compact('extraChargeCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extraChargeCategory = $this->ExtraChargeCategories->get($id);
        if ($this->ExtraChargeCategories->delete($extraChargeCategory)) {
            $this->Flash->success(__('The extra charge category has been deleted.'));
        } else {
            $this->Flash->error(__('The extra charge category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
