<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('applicationConfigurations'));
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

        $this->set('applicationConfiguration', $applicationConfiguration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicationConfiguration = $this->ApplicationConfigurations->newEntity();
        if ($this->request->is('post')) {
            $applicationConfiguration = $this->ApplicationConfigurations->patchEntity($applicationConfiguration, $this->request->getData());
            if ($this->ApplicationConfigurations->save($applicationConfiguration)) {
                $this->Flash->success(__('The application configuration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application configuration could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationConfiguration'));
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
        $applicationConfiguration = $this->ApplicationConfigurations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationConfiguration = $this->ApplicationConfigurations->patchEntity($applicationConfiguration, $this->request->getData());
            if ($this->ApplicationConfigurations->save($applicationConfiguration)) {
                $this->Flash->success(__('The application configuration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application configuration could not be saved. Please, try again.'));
        }
        $this->set(compact('applicationConfiguration'));
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
        $this->request->allowMethod(['post', 'delete']);
        $applicationConfiguration = $this->ApplicationConfigurations->get($id);
        if ($this->ApplicationConfigurations->delete($applicationConfiguration)) {
            $this->Flash->success(__('The application configuration has been deleted.'));
        } else {
            $this->Flash->error(__('The application configuration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
