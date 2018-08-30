<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * DnrLists Controller
 *
 * @property \App\Model\Table\DnrListsTable $DnrLists
 *
 * @method \App\Model\Entity\DnrList[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DnrListsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dnrLists = $this->paginate($this->DnrLists);

        $this->set(compact('dnrLists'));
        $this->set([
            'dnrLists'=>$dnrLists,
            '_serialize'=>['dnrLists']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Dnr List id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dnrList = $this->DnrLists->get($id, [
            'contain' => []
        ]);

        $this->set([
            'dnrLists'=>$dnrLists,
            '_serialize'=>['dnrLists']
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
        $dnrList = $this->DnrLists->newEntity();
        if ($this->request->is('post')) {
            $dnrList = $this->DnrLists->patchEntity($dnrList, $this->request->getData());
            if ($this->DnrLists->save($dnrList)) {
                $res['status'] = 1;
                $res['msg'] = 'The dnr list has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The dnr list could not be saved. Please, try again.';  
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
     * @param string|null $id Dnr List id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $dnrList = $this->DnrLists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dnrList = $this->DnrLists->patchEntity($dnrList, $this->request->getData());
            if ($this->DnrLists->save($dnrList)) {
                $res['status'] = 1;
                $res['msg'] = 'The dnr list has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The dnr list could not be saved. Please, try again.';  
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
     * @param string|null $id Dnr List id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $dnrList = $this->DnrLists->get($id);
        if ($this->DnrLists->delete($dnrList)) {
            $res['status'] = 1;
            $res['msg'] = 'The dnr list has been saved.';
        }else{
            $res['status'] = 0;
            $res['msg'] = 'The dnr list could not be saved. Please, try again.';  
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
