<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Notices Controller
 *
 * @property \App\Model\Table\NoticesTable $Notices
 *
 * @method \App\Model\Entity\Notice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoticesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $notices = $this->paginate($this->Notices);

        $this->set([
            'notices'=>$notices,
            '_serialize'=>['notices']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notices = $this->Notices->get($id, [
            'contain' => []
        ]);

        $this->set([
            'notices'=>$notices,
            '_serialize'=>['notices']
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
        $notice = $this->Notices->newEntity();
        if ($this->request->is('post')) {
            $notice = $this->Notices->patchEntity($notice, $this->request->getData());
            if ($this->Notices->save($notice)) {
                $res['status'] = 1;
                $res['msg'] = 'The notice has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The notice could not be saved. Please, try again.';  
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
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $notice = $this->Notices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notice = $this->Notices->patchEntity($notice, $this->request->getData());
            if ($this->Notices->save($notice)) {
                $res['status'] = 1;
                $res['msg'] = 'The notice has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The notice could not be saved. Please, try again.';  
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
     * @param string|null $id Notice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $notice = $this->Notices->get($id);
        if ($this->Notices->delete($notice)) {
            $res['status'] = 1;
            $res['msg'] = 'The notice has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The notice could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
