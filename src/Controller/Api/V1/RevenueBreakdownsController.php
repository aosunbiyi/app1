<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RevenueBreakdowns Controller
 *
 * @property \App\Model\Table\RevenueBreakdownsTable $RevenueBreakdowns
 *
 * @method \App\Model\Entity\RevenueBreakdown[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RevenueBreakdownsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $revenueBreakdowns = $this->paginate($this->RevenueBreakdowns);

        $this->set([
            'revenueBreakdowns'=>$revenueBreakdowns,
            '_serialize'=>['revenueBreakdowns']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $revenueBreakdowns = $this->RevenueBreakdowns->get($id, [
            'contain' => []
        ]);

        $this->set([
            'revenueBreakdowns'=>$revenueBreakdowns,
            '_serialize'=>['revenueBreakdowns']
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
        $revenueBreakdown = $this->RevenueBreakdowns->newEntity();
        if ($this->request->is('post')) {
            $revenueBreakdown = $this->RevenueBreakdowns->patchEntity($revenueBreakdown, $this->request->getData());
            if ($this->RevenueBreakdowns->save($revenueBreakdown)) {
                $res['status'] = 1;
                $res['msg'] = 'The revenue breakdown has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The revenue breakdown could not be saved. Please, try again.';  
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
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $revenueBreakdown = $this->RevenueBreakdowns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $revenueBreakdown = $this->RevenueBreakdowns->patchEntity($revenueBreakdown, $this->request->getData());
            if ($this->RevenueBreakdowns->save($revenueBreakdown)) {
                $res['status'] = 1;
                $res['msg'] = 'The revenue breakdown has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The revenue breakdown could not be saved. Please, try again.';  
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
     * @param string|null $id Revenue Breakdown id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $revenueBreakdown = $this->RevenueBreakdowns->get($id);
        if ($this->RevenueBreakdowns->delete($revenueBreakdown)) {
            $res['status'] = 1;
            $res['msg'] = 'The revenue breakdown has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The revenue breakdown could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
