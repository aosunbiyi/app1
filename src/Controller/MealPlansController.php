<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MealPlans Controller
 *
 * @property \App\Model\Table\MealPlansTable $MealPlans
 *
 * @method \App\Model\Entity\MealPlan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MealPlansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mealPlans = $this->paginate($this->MealPlans);

        $this->set(compact('mealPlans'));
    }

    /**
     * View method
     *
     * @param string|null $id Meal Plan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mealPlan = $this->MealPlans->get($id, [
            'contain' => []
        ]);

        $this->set('mealPlan', $mealPlan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mealPlan = $this->MealPlans->newEntity();
        if ($this->request->is('post')) {
            $mealPlan = $this->MealPlans->patchEntity($mealPlan, $this->request->getData());
            if ($this->MealPlans->save($mealPlan)) {
                $this->Flash->success(__('The meal plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meal plan could not be saved. Please, try again.'));
        }
        $this->set(compact('mealPlan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Meal Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mealPlan = $this->MealPlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mealPlan = $this->MealPlans->patchEntity($mealPlan, $this->request->getData());
            if ($this->MealPlans->save($mealPlan)) {
                $this->Flash->success(__('The meal plan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The meal plan could not be saved. Please, try again.'));
        }
        $this->set(compact('mealPlan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Meal Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mealPlan = $this->MealPlans->get($id);
        if ($this->MealPlans->delete($mealPlan)) {
            $this->Flash->success(__('The meal plan has been deleted.'));
        } else {
            $this->Flash->error(__('The meal plan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
