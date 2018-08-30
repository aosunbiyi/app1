<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Taxes Controller
 *
 * @property \App\Model\Table\TaxesTable $Taxes
 *
 * @method \App\Model\Entity\Tax[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TaxesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $taxes = $this->paginate($this->Taxes);

        $this->set([
            'taxes'=>$taxes,
            '_serialize'=>['taxes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Tax id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxes = $this->Taxes->get($id, [
            'contain' => []
        ]);

        $this->set([
            'taxes'=>$taxes,
            '_serialize'=>['taxes']
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
        $tax = $this->Taxes->newEntity();
        if ($this->request->is('post')) {
            $tax = $this->Taxes->patchEntity($tax, $this->request->getData());
            if ($this->Taxes->save($tax)) {
                $res['status'] = 1;
                $res['msg'] = 'The tax has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The tax could not be saved. Please, try again.';  
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
     * @param string|null $id Tax id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $tax = $this->Taxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tax = $this->Taxes->patchEntity($tax, $this->request->getData());
            if ($this->Taxes->save($tax)) {
                $res['status'] = 1;
                $res['msg'] = 'The tax has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The tax could not be saved. Please, try again.';  
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
     * @param string|null $id Tax id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $tax = $this->Taxes->get($id);
        if ($this->Taxes->delete($tax)) {
            $res['status'] = 1;
            $res['msg'] = 'The tax has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The tax could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
