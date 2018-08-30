<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NonRentalUnits Controller
 *
 * @property \App\Model\Table\NonRentalUnitsTable $NonRentalUnits
 *
 * @method \App\Model\Entity\NonRentalUnit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NonRentalUnitsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $nonRentalUnits = $this->paginate($this->NonRentalUnits);

        $this->set(compact('nonRentalUnits'));
    }

    /**
     * View method
     *
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nonRentalUnit = $this->NonRentalUnits->get($id, [
            'contain' => []
        ]);

        $this->set('nonRentalUnit', $nonRentalUnit);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nonRentalUnit = $this->NonRentalUnits->newEntity();
        if ($this->request->is('post')) {
            $nonRentalUnit = $this->NonRentalUnits->patchEntity($nonRentalUnit, $this->request->getData());
            if ($this->NonRentalUnits->save($nonRentalUnit)) {
                $this->Flash->success(__('The non rental unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The non rental unit could not be saved. Please, try again.'));
        }
        $this->set(compact('nonRentalUnit'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nonRentalUnit = $this->NonRentalUnits->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nonRentalUnit = $this->NonRentalUnits->patchEntity($nonRentalUnit, $this->request->getData());
            if ($this->NonRentalUnits->save($nonRentalUnit)) {
                $this->Flash->success(__('The non rental unit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The non rental unit could not be saved. Please, try again.'));
        }
        $this->set(compact('nonRentalUnit'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Non Rental Unit id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nonRentalUnit = $this->NonRentalUnits->get($id);
        if ($this->NonRentalUnits->delete($nonRentalUnit)) {
            $this->Flash->success(__('The non rental unit has been deleted.'));
        } else {
            $this->Flash->error(__('The non rental unit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
