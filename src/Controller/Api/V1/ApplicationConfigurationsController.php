<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * ApplicationConfigurations Controller
 *
 * @property \App\Model\Table\ApplicationConfigurationsTable $ApplicationConfigurations
 *
 * @method \App\Model\Entity\ApplicationConfiguration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationConfigurationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $applicationConfigurations = $this->paginate($this->ApplicationConfigurations);

        $this->set([
            'applicationConfigurations'=>$applicationConfigurations,
            '_serialize'=>['applicationConfigurations']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Application Configuration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicationConfiguration = $this->ApplicationConfigurations->get($id, [
            'contain' => []
        ]);

        $this->set([
            'applicationConfiguration'=>$applicationConfiguration,
            '_serialize'=>['applicationConfiguration']
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
        $applicationConfiguration = $this->ApplicationConfigurations->newEntity();
        if ($this->request->is('post')) {
            $applicationConfiguration = $this->ApplicationConfigurations->patchEntity($applicationConfiguration, $this->request->getData());
            if ($this->ApplicationConfigurations->save($applicationConfiguration)) {
                $res['status'] = 1;
                $res['msg'] = 'The application configuration has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The application configuration could not be saved. Please, try again.';  
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
     * @param string|null $id Application Configuration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $applicationConfiguration = $this->ApplicationConfigurations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationConfiguration = $this->ApplicationConfigurations->patchEntity($applicationConfiguration, $this->request->getData());
            if ($this->ApplicationConfigurations->save($applicationConfiguration)) {
                $res['status'] = 1;
                $res['msg'] = 'The application configuration has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The application configuration could not be saved. Please, try again.';  
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
     * @param string|null $id Application Configuration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $applicationConfiguration = $this->ApplicationConfigurations->get($id);
        if ($this->ApplicationConfigurations->delete($applicationConfiguration)) {
               
            $res['status'] = 1;
            $res['msg'] = 'The application configuration has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The application configuration could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
