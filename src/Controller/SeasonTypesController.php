<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SeasonTypes Controller
 *
 * @property \App\Model\Table\SeasonTypesTable $SeasonTypes
 *
 * @method \App\Model\Entity\SeasonType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeasonTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $seasonTypes = $this->paginate($this->SeasonTypes);

        $this->set(compact('seasonTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seasonType = $this->SeasonTypes->get($id, [
            'contain' => ['Seasons']
        ]);

        $this->set('seasonType', $seasonType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seasonType = $this->SeasonTypes->newEntity();
        if ($this->request->is('post')) {
            $seasonType = $this->SeasonTypes->patchEntity($seasonType, $this->request->getData());
            if ($this->SeasonTypes->save($seasonType)) {
                $this->Flash->success(__('The season type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The season type could not be saved. Please, try again.'));
        }
        $this->set(compact('seasonType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seasonType = $this->SeasonTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seasonType = $this->SeasonTypes->patchEntity($seasonType, $this->request->getData());
            if ($this->SeasonTypes->save($seasonType)) {
                $this->Flash->success(__('The season type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The season type could not be saved. Please, try again.'));
        }
        $this->set(compact('seasonType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Season Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seasonType = $this->SeasonTypes->get($id);
        if ($this->SeasonTypes->delete($seasonType)) {
            $this->Flash->success(__('The season type has been deleted.'));
        } else {
            $this->Flash->error(__('The season type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
