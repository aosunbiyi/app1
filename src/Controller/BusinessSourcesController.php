<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('businessSources'));
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

        $this->set('businessSource', $businessSource);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessSource = $this->BusinessSources->newEntity();
        if ($this->request->is('post')) {
            $businessSource = $this->BusinessSources->patchEntity($businessSource, $this->request->getData());
            if ($this->BusinessSources->save($businessSource)) {
                $this->Flash->success(__('The business source has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business source could not be saved. Please, try again.'));
        }
        $businessSourceTypes = $this->BusinessSources->BusinessSourceTypes->find('list', ['limit' => 200]);
        $this->set(compact('businessSource', 'businessSourceTypes'));
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
        $businessSource = $this->BusinessSources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessSource = $this->BusinessSources->patchEntity($businessSource, $this->request->getData());
            if ($this->BusinessSources->save($businessSource)) {
                $this->Flash->success(__('The business source has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business source could not be saved. Please, try again.'));
        }
        $businessSourceTypes = $this->BusinessSources->BusinessSourceTypes->find('list', ['limit' => 200]);
        $this->set(compact('businessSource', 'businessSourceTypes'));
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
        $this->request->allowMethod(['post', 'delete']);
        $businessSource = $this->BusinessSources->get($id);
        if ($this->BusinessSources->delete($businessSource)) {
            $this->Flash->success(__('The business source has been deleted.'));
        } else {
            $this->Flash->error(__('The business source could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
