<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transportations Controller
 *
 * @property \App\Model\Table\TransportationsTable $Transportations
 *
 * @method \App\Model\Entity\Transportation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransportationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TransportationTypes']
        ];
        $transportations = $this->paginate($this->Transportations);

        $this->set(compact('transportations'));
    }

    /**
     * View method
     *
     * @param string|null $id Transportation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transportation = $this->Transportations->get($id, [
            'contain' => ['TransportationTypes']
        ]);

        $this->set('transportation', $transportation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transportation = $this->Transportations->newEntity();
        if ($this->request->is('post')) {
            $transportation = $this->Transportations->patchEntity($transportation, $this->request->getData());
            if ($this->Transportations->save($transportation)) {
                $this->Flash->success(__('The transportation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportation could not be saved. Please, try again.'));
        }
        $transportationTypes = $this->Transportations->TransportationTypes->find('list', ['limit' => 200]);
        $this->set(compact('transportation', 'transportationTypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transportation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transportation = $this->Transportations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transportation = $this->Transportations->patchEntity($transportation, $this->request->getData());
            if ($this->Transportations->save($transportation)) {
                $this->Flash->success(__('The transportation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportation could not be saved. Please, try again.'));
        }
        $transportationTypes = $this->Transportations->TransportationTypes->find('list', ['limit' => 200]);
        $this->set(compact('transportation', 'transportationTypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transportation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transportation = $this->Transportations->get($id);
        if ($this->Transportations->delete($transportation)) {
            $this->Flash->success(__('The transportation has been deleted.'));
        } else {
            $this->Flash->error(__('The transportation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
