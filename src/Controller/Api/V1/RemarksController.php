<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Remarks Controller
 *
 * @property \App\Model\Table\RemarksTable $Remarks
 *
 * @method \App\Model\Entity\Remark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RemarksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['RemarkCategories']
        ];
        $remarks = $this->paginate($this->Remarks);

        $this->set([
            'remarks'=>$remarks,
            '_serialize'=>['remarks']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $remarks = $this->Remarks->get($id, [
            'contain' => ['RemarkCategories']
        ]);

        $this->set([
            'remarks'=>$remarks,
            '_serialize'=>['remarks']
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
        $remark = $this->Remarks->newEntity();
        if ($this->request->is('post')) {
            $remark = $this->Remarks->patchEntity($remark, $this->request->getData());
            if ($this->Remarks->save($remark)) {
                $res['status'] = 1;
                $res['msg'] = 'The remark has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The remark could not be saved. Please, try again.';  
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
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $remark = $this->Remarks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $remark = $this->Remarks->patchEntity($remark, $this->request->getData());
            if ($this->Remarks->save($remark)) {
                $res['status'] = 1;
                $res['msg'] = 'The remark has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The remark could not be saved. Please, try again.';  
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
     * @param string|null $id Remark id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $remark = $this->Remarks->get($id);
        if ($this->Remarks->delete($remark)) {
            $res['status'] = 1;
            $res['msg'] = 'The remark has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The remark could not be deleted. Please, try again.';
        }
 
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
