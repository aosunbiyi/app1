<?php
namespace App\Controller\Api\V1;

use App\Controller\Api\V1\AppController;

/**
 * AccountTypes Controller
 *
 * @property \App\Model\Table\AccountTypesTable $AccountTypes
 *
 * @method \App\Model\Entity\AccountType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $accountTypes = $this->paginate($this->AccountTypes);

        $this->set([
            'accountTypes'=>$accountTypes,
            '_serialize'=>['accountTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountType = $this->AccountTypes->get($id, [
            'contain' => ['Accounts']
        ]);

        $this->set([
            'accountType'=>$accountType,
            '_serialize'=>['accountType']
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
        $accountType = $this->AccountTypes->newEntity();
        if ($this->request->is('post')) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->getData());
            if ($this->AccountTypes->save($accountType)) {
                $res['status'] = 1;
                $res['msg'] = 'The accountType has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The accountType could not be saved. Please, try again.';  
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
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $accountType = $this->AccountTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountType = $this->AccountTypes->patchEntity($accountType, $this->request->getData());
            if ($this->AccountTypes->save($accountType)) {
                $res['status'] = 1;
                $res['msg'] = 'The account type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The account type could not be saved. Please, try again.';  
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
     * @param string|null $id Account Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $accountType = $this->AccountTypes->get($id);
        if ($this->AccountTypes->delete($accountType)) {             
            $res['status'] = 1;
            $res['msg'] = 'The accountType has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The accountType could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

    }
}
