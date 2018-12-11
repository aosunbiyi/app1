<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DiscountPlans Controller
 *
 * @property \App\Model\Table\DiscountPlansTable $DiscountPlans
 *
 * @method \App\Model\Entity\DiscountPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiscountPlansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $discountPlans = $this->paginate($this->DiscountPlans);

        $this->set(compact('discountPlans'));
    }

    /**
     * View method
     *
     * @param string|null $id Discount Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discountPlan = $this->DiscountPlans->get($id, [
            'contain' => ['ReservedRooms']
        ]);

        $this->set('discountPlan', $discountPlan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discountPlan = $this->DiscountPlans->newEntity();
        if ($this->request->is('post')) {
            $discountPlan = $this->DiscountPlans->patchEntity($discountPlan, $this->request->getData());
            if ($this->DiscountPlans->save($discountPlan)) {
                $this->Flash->success(__('The discount plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discount plan could not be saved. Please, try again.'));
        }
        $this->set(compact('discountPlan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Discount Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discountPlan = $this->DiscountPlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discountPlan = $this->DiscountPlans->patchEntity($discountPlan, $this->request->getData());
            if ($this->DiscountPlans->save($discountPlan)) {
                $this->Flash->success(__('The discount plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discount plan could not be saved. Please, try again.'));
        }
        $this->set(compact('discountPlan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Discount Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discountPlan = $this->DiscountPlans->get($id);
        if ($this->DiscountPlans->delete($discountPlan)) {
            $this->Flash->success(__('The discount plan has been deleted.'));
        } else {
            $this->Flash->error(__('The discount plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
