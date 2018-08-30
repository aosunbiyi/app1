<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * EmailAccounts Controller
 *
 * @property \App\Model\Table\EmailAccountsTable $EmailAccounts
 *
 * @method \App\Model\Entity\EmailAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmailAccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emailAccounts = $this->paginate($this->EmailAccounts);

        $this->set([
            'emailAccounts'=>$emailAccounts,
            '_serialize'=>['emailAccounts']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailAccount = $this->EmailAccounts->get($id, [
            'contain' => []
        ]);

        $this->set([
            'emailAccount'=>$emailAccount,
            '_serialize'=>['emailAccount']
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
        $emailAccount = $this->EmailAccounts->newEntity();
        if ($this->request->is('post')) {
            $emailAccount = $this->EmailAccounts->patchEntity($emailAccount, $this->request->getData());
            if ($this->EmailAccounts->save($emailAccount)) {
                $res['status'] = 1;
                $res['msg'] = 'The emailAccounts has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The emailAccounts could not be saved. Please, try again.';  
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
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $emailAccount = $this->EmailAccounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailAccount = $this->EmailAccounts->patchEntity($emailAccount, $this->request->getData());
            if ($this->EmailAccounts->save($emailAccount)) {
                $res['status'] = 1;
                $res['msg'] = 'The emailAccounts has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The emailAccounts could not be saved. Please, try again.';  
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
     * @param string|null $id Email Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $emailAccount = $this->EmailAccounts->get($id);
        if ($this->EmailAccounts->delete($emailAccount)) {
            $res['status'] = 1;
            $res['msg'] = 'The emailAccounts has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The emailAccounts could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
