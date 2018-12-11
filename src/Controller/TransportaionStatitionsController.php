<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransportaionStatitions Controller
 *
 * @property \App\Model\Table\TransportaionStatitionsTable $TransportaionStatitions
 *
 * @method \App\Model\Entity\TransportaionStatition[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransportaionStatitionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $transportaionStatitions = $this->paginate($this->TransportaionStatitions);

        $this->set(compact('transportaionStatitions'));
    }

    /**
     * View method
     *
     * @param string|null $id Transportaion Statition id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transportaionStatition = $this->TransportaionStatitions->get($id, [
            'contain' => []
        ]);

        $this->set('transportaionStatition', $transportaionStatition);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transportaionStatition = $this->TransportaionStatitions->newEntity();
        if ($this->request->is('post')) {
            $transportaionStatition = $this->TransportaionStatitions->patchEntity($transportaionStatition, $this->request->getData());
            if ($this->TransportaionStatitions->save($transportaionStatition)) {
                $this->Flash->success(__('The transportaion statition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportaion statition could not be saved. Please, try again.'));
        }
        $this->set(compact('transportaionStatition'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transportaion Statition id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transportaionStatition = $this->TransportaionStatitions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transportaionStatition = $this->TransportaionStatitions->patchEntity($transportaionStatition, $this->request->getData());
            if ($this->TransportaionStatitions->save($transportaionStatition)) {
                $this->Flash->success(__('The transportaion statition has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transportaion statition could not be saved. Please, try again.'));
        }
        $this->set(compact('transportaionStatition'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transportaion Statition id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transportaionStatition = $this->TransportaionStatitions->get($id);
        if ($this->TransportaionStatitions->delete($transportaionStatition)) {
            $this->Flash->success(__('The transportaion statition has been deleted.'));
        } else {
            $this->Flash->error(__('The transportaion statition could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
