<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Wings Controller
 *
 * @property \App\Model\Table\WingsTable $Wings
 *
 * @method \App\Model\Entity\Wing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $wings = $this->paginate($this->Wings);

        $this->set([
            'wings'=>$wings,
            '_serialize'=>['wings']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wings = $this->Wings->get($id, [
            'contain' => ['Floors']
        ]);

        $this->set([
            'wings'=>$wings,
            '_serialize'=>['wings']
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
        $wing = $this->Wings->newEntity();
        if ($this->request->is('post')) {
            $wing = $this->Wings->patchEntity($wing, $this->request->getData());
            if ($this->Wings->save($wing)) {
                $res['status'] = 1;
                $res['msg'] = 'The Wing has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The Wing could not be saved. Please, try again.';  
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
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $wing = $this->Wings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wing = $this->Wings->patchEntity($wing, $this->request->getData());
            if ($this->Wings->save($wing)) {
                $res['status'] = 1;
                $res['msg'] = 'The Wing has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The Wing could not be saved. Please, try again.';  
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
     * @param string|null $id Wing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $wing = $this->Wings->get($id);
        if ($this->Wings->delete($wing)) {
            $res['status'] = 1;
            $res['msg'] = 'The Wing has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Wing could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
