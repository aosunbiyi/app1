<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

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

        $this->set([
            'mealPlans'=>$mealPlans,
            '_serialize'=>['mealPlans']
        ]);
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
        $mealPlans = $this->MealPlans->get($id, [
            'contain' => []
        ]);

        $this->set([
            'mealPlans'=>$mealPlans,
            '_serialize'=>['mealPlans']
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
        $mealPlan = $this->MealPlans->newEntity();
        if ($this->request->is('post')) {
            $mealPlan = $this->MealPlans->patchEntity($mealPlan, $this->request->getData());
            if ($this->MealPlans->save($mealPlan)) {
                $res['status'] = 1;
                $res['msg'] = 'The mealPlans has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The mealPlans could not be saved. Please, try again.';  
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
     * @param string|null $id Meal Plan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $mealPlan = $this->MealPlans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mealPlan = $this->MealPlans->patchEntity($mealPlan, $this->request->getData());
            if ($this->MealPlans->save($mealPlan)) {
                $res['status'] = 1;
                $res['msg'] = 'The mealPlans has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The mealPlans could not be saved. Please, try again.';  
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
     * @param string|null $id Meal Plan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $mealPlan = $this->MealPlans->get($id);
        if ($this->MealPlans->delete($mealPlan)) {
            $res['status'] = 1;
            $res['msg'] = 'The mealPlans has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The mealPlans could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
