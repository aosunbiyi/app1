<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('businessSourceTypes'));
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

        $this->set('businessSourceType', $businessSourceType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessSourceType = $this->BusinessSourceTypes->newEntity();
        if ($this->request->is('post')) {
            $businessSourceType = $this->BusinessSourceTypes->patchEntity($businessSourceType, $this->request->getData());
            if ($this->BusinessSourceTypes->save($businessSourceType)) {
                $this->Flash->success(__('The business source type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business source type could not be saved. Please, try again.'));
        }
        $this->set(compact('businessSourceType'));
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
        $businessSourceType = $this->BusinessSourceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessSourceType = $this->BusinessSourceTypes->patchEntity($businessSourceType, $this->request->getData());
            if ($this->BusinessSourceTypes->save($businessSourceType)) {
                $this->Flash->success(__('The business source type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The business source type could not be saved. Please, try again.'));
        }
        $this->set(compact('businessSourceType'));
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
        $this->request->allowMethod(['post', 'delete']);
        $businessSourceType = $this->BusinessSourceTypes->get($id);
        if ($this->BusinessSourceTypes->delete($businessSourceType)) {
            $this->Flash->success(__('The business source type has been deleted.'));
        } else {
            $this->Flash->error(__('The business source type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
