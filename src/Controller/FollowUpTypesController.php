<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('followUpTypes'));
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
        $followUpType = $this->FollowUpTypes->get($id, [
            'contain' => []
        ]);

        $this->set('followUpType', $followUpType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $followUpType = $this->FollowUpTypes->newEntity();
        if ($this->request->is('post')) {
            $followUpType = $this->FollowUpTypes->patchEntity($followUpType, $this->request->getData());
            if ($this->FollowUpTypes->save($followUpType)) {
                $this->Flash->success(__('The follow up type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follow up type could not be saved. Please, try again.'));
        }
        $this->set(compact('followUpType'));
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
        $followUpType = $this->FollowUpTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $followUpType = $this->FollowUpTypes->patchEntity($followUpType, $this->request->getData());
            if ($this->FollowUpTypes->save($followUpType)) {
                $this->Flash->success(__('The follow up type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The follow up type could not be saved. Please, try again.'));
        }
        $this->set(compact('followUpType'));
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
        $this->request->allowMethod(['post', 'delete']);
        $followUpType = $this->FollowUpTypes->get($id);
        if ($this->FollowUpTypes->delete($followUpType)) {
            $this->Flash->success(__('The follow up type has been deleted.'));
        } else {
            $this->Flash->error(__('The follow up type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
