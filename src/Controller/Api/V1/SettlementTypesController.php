<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * SettlementTypes Controller
 *
 * @property \App\Model\Table\SettlementTypesTable $SettlementTypes
 *
 * @method \App\Model\Entity\SettlementType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SettlementTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $settlementTypes = $this->paginate($this->SettlementTypes);

        $this->set([
            'settlementTypes'=>$settlementTypes,
            '_serialize'=>['settlementTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $settlementTypes = $this->SettlementTypes->get($id, [
            'contain' => ['CardTypePrefixes']
        ]);

        $this->set([
            'settlementTypes'=>$settlementTypes,
            '_serialize'=>['settlementTypes']
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
        $settlementType = $this->SettlementTypes->newEntity();
        if ($this->request->is('post')) {
            $settlementType = $this->SettlementTypes->patchEntity($settlementType, $this->request->getData());
            if ($this->SettlementTypes->save($settlementType)) {
                $res['status'] = 1;
                $res['msg'] = 'The settlement type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The settlement type could not be saved. Please, try again.';  
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
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $settlementType = $this->SettlementTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $settlementType = $this->SettlementTypes->patchEntity($settlementType, $this->request->getData());
            if ($this->SettlementTypes->save($settlementType)) {
                $res['status'] = 1;
                $res['msg'] = 'The settlement type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The settlement type could not be saved. Please, try again.';  
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
     * @param string|null $id Settlement Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $settlementType = $this->SettlementTypes->get($id);
        if ($this->SettlementTypes->delete($settlementType)) {
            $res['status'] = 1;
            $res['msg'] = 'The settlement type has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The settlement type could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
