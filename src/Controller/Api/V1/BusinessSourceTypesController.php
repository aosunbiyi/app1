<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * BusinessSourceTypes Controller
 *
 * @property \App\Model\Table\BusinessSourceTypesTable $BusinessSourceTypes
 *
 * @method \App\Model\Entity\BusinessSourceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessSourceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $businessSourceTypes = $this->paginate($this->BusinessSourceTypes);

        $this->set([
            'businessSourceTypes'=>$businessSourceTypes,
            '_serialize'=>['businessSourceTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Business Source Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessSourceType = $this->BusinessSourceTypes->get($id, [
            'contain' => []
        ]);

        $this->set([
            'businessSourceType'=>$businessSourceType,
            '_serialize'=>['businessSourceType']
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
        $businessSourceType = $this->BusinessSourceTypes->newEntity();
        if ($this->request->is('post')) {
            $businessSourceType = $this->BusinessSourceTypes->patchEntity($businessSourceType, $this->request->getData());
            if ($this->BusinessSourceTypes->save($businessSourceType)) {
                $res['status'] = 1;
                $res['msg'] = 'The business source type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The business source type could not be saved. Please, try again.';  
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
     * @param string|null $id Business Source Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $businessSourceType = $this->BusinessSourceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessSourceType = $this->BusinessSourceTypes->patchEntity($businessSourceType, $this->request->getData());
            if ($this->BusinessSourceTypes->save($businessSourceType)) {
                $res['status'] = 1;
                $res['msg'] = 'The business source type  has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The business source type  could not be saved. Please, try again.';  
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
     * @param string|null $id Business Source Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $businessSourceType = $this->BusinessSourceTypes->get($id);
        if ($this->BusinessSourceTypes->delete($businessSourceType)) {
            $res['status'] = 1;
            $res['msg'] = 'The business source type has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The business source type could not be deleted. Please, try again.';
        }

 
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
