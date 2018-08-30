<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Roles Controller
 *
 * @property \App\Model\Table\RolesTable $Roles
 *
 * @method \App\Model\Entity\Role[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roles = $this->paginate($this->Roles);

        $this->set([
            'roles'=>$roles,
            '_serialize'=>['roles']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roles = $this->Roles->get($id, [
            'contain' => ['Users']
        ]);

        $this->set([
            'roles'=>$roles,
            '_serialize'=>['roles']
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
        $role = $this->Roles->newEntity();
        if ($this->request->is('post')) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $res['status'] = 1;
                $res['msg'] = 'The role has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The role could not be saved. Please, try again.';  
            }
 
        }
      
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

    }

    /**
     * Edit method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $role = $this->Roles->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->getData());
            if ($this->Roles->save($role)) {
                $res['status'] = 1;
                $res['msg'] = 'The role has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The role could not be saved. Please, try again.';  
            }
        }
     
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Role id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $res['status'] = 1;
            $res['msg'] = 'The role has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The role could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
