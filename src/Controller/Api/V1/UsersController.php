<?php
namespace App\Controller\Api\V1;

use App\Controller\Api\V1\AppController;
use \Firebase\JWT\JWT;
use Cake\Utility\Security;
use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

        public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add','token']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res = array();
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->active=1;
            if ($this->Users->save($user)) {
                $res['status'] = 1;
                $res['msg'] = 'The user has been saved.';                 
               
            }else{ 
                $res['status'] = 0;
                $res['msg'] = 'The user could not be saved. Please, try again.';              
              
            }

            $this->set(compact('res'));
            $this->set('_serialize', ['res']);

      
        }

     


   
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles']
        ]);
        $res = array();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $res['status'] = 1;
                $res['msg'] = 'User updated successfully';            
            }
            else 
            {
                $res['status'] = 0;
                $res['msg'] = 'The user could not be saved. Please, try again.';
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $res['user']=$user;
        $res['roles']=$roles;

     
        $this->set(compact('res'));
        $this->set('_serialize', ['res']);
    }


       /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res = array();
                $this->request->allowMethod(['post', 'delete']);
                $user = $this->Users->get($id);
                if ($this->Users->delete($user)) {
        $res['status'] = 1;
                    $res['msg'] = 'The user has been deleted.';
                } else {
        $res['status'] = 0;
                    $res['msg'] = 'The user could not be deleted. Please, try again.';
                }
                
        $this->set(compact('res'));
                $this->set('_serialize', ['res']);
            }
}



    public function token()
    {
        $user = $this->Auth->identify();
        if (!$user) {
          
            throw new UnauthorizedException('Invalid username or password');
        }
       else{
        $this->set([
            'success' => true,
            'data' => [
                'token' =>  JWT::encode([
                    'sub' => $user['id'],
                    'exp' =>  time() + 604800
                ],
                Security::salt())
            ],
            '_serialize' => ['success', 'data']
        ]);
       }

    
    }


}
