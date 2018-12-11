<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransportationTypes Controller
 *
 * @property \App\Model\Table\TransportationTypesTable $TransportationTypes
 *
 * @method \App\Model\Entity\TransportationType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransportationTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $transportationTypes = $this->paginate($this->TransportationTypes);

        $this->set(compact('transportationTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Transportation Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transportationType = $this->TransportationTypes->get($id, [
            'contain' => ['Transportations']
        ]);

        $this->set('transportationType', $transportationType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transportationType = $this->TransportationTypes->newEntity();
        if ($this->request->is('post')) {
            $transportationType = $this->TransportationTypes->patchEntity($transportationType, $this->request->getData());
            if ($this->TransportationTypes->save($transportationType)) {
                $this->Flash->success(__('The transportation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportation type could not be saved. Please, try again.'));
        }
        $this->set(compact('transportationType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transportation Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transportationType = $this->TransportationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transportationType = $this->TransportationTypes->patchEntity($transportationType, $this->request->getData());
            if ($this->TransportationTypes->save($transportationType)) {
                $this->Flash->success(__('The transportation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportation type could not be saved. Please, try again.'));
        }
        $this->set(compact('transportationType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transportation Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transportationType = $this->TransportationTypes->get($id);
        if ($this->TransportationTypes->delete($transportationType)) {
            $this->Flash->success(__('The transportation type has been deleted.'));
        } else {
            $this->Flash->error(__('The transportation type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
