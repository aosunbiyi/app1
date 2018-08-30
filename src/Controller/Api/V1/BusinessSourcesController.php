<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * BusinessSources Controller
 *
 * @property \App\Model\Table\BusinessSourcesTable $BusinessSources
 *
 * @method \App\Model\Entity\BusinessSource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BusinessSourcesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['BusinessSourceTypes']
        ];
        $businessSources = $this->paginate($this->BusinessSources);

        $this->set([
            'businessSources'=>$businessSources,
            '_serialize'=>['businessSources']
        ]);
    }

    public function get_business_source_by_type_id($id){
        $businessSources = $this->BusinessSources->find()->where(['business_source_types_id' => $id])->contain(['BusinessSourceTypes'])->toList();
        $this->set([
            'businessSources'=>$businessSources,
            '_serialize'=>['businessSources']
        ]);
    }


    /**
     * View method
     *
     * @param string|null $id Business Source id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessSource = $this->BusinessSources->get($id, [
            'contain' => ['BusinessSourceTypes']
        ]);

        $this->set([
            'businessSource'=>$businessSource,
            '_serialize'=>['businessSource']
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
        $businessSource = $this->BusinessSources->newEntity();
        if ($this->request->is('post')) {
            $businessSource = $this->BusinessSources->patchEntity($businessSource, $this->request->getData());
            if ($this->BusinessSources->save($businessSource)) {
                $res['status'] = 1;
                $res['msg'] = 'The business source has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The business source could not be saved. Please, try again.';  
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
     * @param string|null $id Business Source id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $businessSource = $this->BusinessSources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessSource = $this->BusinessSources->patchEntity($businessSource, $this->request->getData());
            if ($this->BusinessSources->save($businessSource)) {
                $res['status'] = 1;
                $res['msg'] = 'The business source has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The business source could not be saved. Please, try again.';  
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
     * @param string|null $id Business Source id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $businessSource = $this->BusinessSources->get($id);
        if ($this->BusinessSources->delete($businessSource)) {
        
            $res['status'] = 1;
            $res['msg'] = 'The business source  has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The business source  could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
