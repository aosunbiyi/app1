<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * FollowUpTypes Controller
 *
 * @property \App\Model\Table\FollowUpTypesTable $FollowUpTypes
 *
 * @method \App\Model\Entity\FollowUpType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FollowUpTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $followUpTypes = $this->paginate($this->FollowUpTypes);

        $this->set([
            'followUpTypes'=>$followUpTypes,
            '_serialize'=>['followUpTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Follow Up Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $followUpTypes = $this->FollowUpTypes->get($id, [
            'contain' => []
        ]);

        $this->set([
            'followUpTypes'=>$followUpTypes,
            '_serialize'=>['followUpTypes']
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
        $followUpType = $this->FollowUpTypes->newEntity();
        if ($this->request->is('post')) {
            $followUpType = $this->FollowUpTypes->patchEntity($followUpType, $this->request->getData());
            if ($this->FollowUpTypes->save($followUpType)) {
                $res['status'] = 1;
                $res['msg'] = 'The follow up type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The follow up type could not be saved. Please, try again.';  
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
     * @param string|null $id Follow Up Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $followUpType = $this->FollowUpTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $followUpType = $this->FollowUpTypes->patchEntity($followUpType, $this->request->getData());
            if ($this->FollowUpTypes->save($followUpType)) {
                $res['status'] = 1;
                $res['msg'] = 'The follow up type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The follow up type could not be saved. Please, try again.';  
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
     * @param string|null $id Follow Up Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $followUpType = $this->FollowUpTypes->get($id);
        if ($this->FollowUpTypes->delete($followUpType)) {
            $res['status'] = 1;
            $res['msg'] = 'The follow up type has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The follow up type could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
