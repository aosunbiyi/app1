<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * NonRentalUnits Controller
 *
 * @property \App\Model\Table\NonRentalUnitsTable $NonRentalUnits
 *
 * @method \App\Model\Entity\NonRentalUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NonRentalUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $nonRentalUnits = $this->paginate($this->NonRentalUnits);

        $this->set([
            'nonRentalUnits'=>$nonRentalUnits,
            '_serialize'=>['nonRentalUnits']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nonRentalUnits = $this->NonRentalUnits->get($id, [
            'contain' => []
        ]);

        $this->set([
            'nonRentalUnits'=>$nonRentalUnits,
            '_serialize'=>['nonRentalUnits']
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
        $nonRentalUnit = $this->NonRentalUnits->newEntity();
        if ($this->request->is('post')) {
            $nonRentalUnit = $this->NonRentalUnits->patchEntity($nonRentalUnit, $this->request->getData());
            if ($this->NonRentalUnits->save($nonRentalUnit)) {
                $res['status'] = 1;
                $res['msg'] = 'The nonRentalUnits has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The nonRentalUnits could not be saved. Please, try again.';  
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
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $nonRentalUnit = $this->NonRentalUnits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nonRentalUnit = $this->NonRentalUnits->patchEntity($nonRentalUnit, $this->request->getData());
            if ($this->NonRentalUnits->save($nonRentalUnit)) {
                $res['status'] = 1;
                $res['msg'] = 'The nonRentalUnits has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The nonRentalUnits could not be saved. Please, try again.';  
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
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $nonRentalUnit = $this->NonRentalUnits->get($id);
        if ($this->NonRentalUnits->delete($nonRentalUnit)) {
            $res['status'] = 1;
            $res['msg'] = 'The nonRentalUnits has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The nonRentalUnits could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
