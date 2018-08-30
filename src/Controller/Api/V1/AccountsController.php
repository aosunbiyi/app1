<?php
namespace App\Controller\Api\V1;

use App\Controller\Api\V1\AppController;

/**
 * Accounts Controller
 *
 * @property \App\Model\Table\AccountsTable $Accounts
 *
 * @method \App\Model\Entity\Account[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AccountTypes', 'HotelRepresentatives']
        ];
        $accounts = $this->paginate($this->Accounts);

    
        $this->set([
            'accounts'=>$accounts,
            '_serialize'=>['accounts']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $account = $this->Accounts->get($id, [
            'contain' => ['AccountTypes', 'HotelRepresentatives']
        ]);

        $this->set([
            'account'=>$account,
            '_serialize'=>['account']
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
        $account = $this->Accounts->newEntity();
        if ($this->request->is('post')) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $res['status'] = 1;
                $res['msg'] = 'The account has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The account could not be saved. Please, try again.';  
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
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $account = $this->Accounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $account = $this->Accounts->patchEntity($account, $this->request->getData());
            if ($this->Accounts->save($account)) {
                $res['status'] = 1;
                $res['msg'] = 'The account has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The account could not be saved. Please, try again.';  
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
     * @param string|null $id Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $account = $this->Accounts->get($id);
        if ($this->Accounts->delete($account)) {
            $res['status'] = 1;
            $res['msg'] = 'The account has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The account could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
