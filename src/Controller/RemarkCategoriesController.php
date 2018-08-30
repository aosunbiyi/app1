<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RemarkCategories Controller
 *
 * @property \App\Model\Table\RemarkCategoriesTable $RemarkCategories
 *
 * @method \App\Model\Entity\RemarkCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RemarkCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $remarkCategories = $this->paginate($this->RemarkCategories);

        $this->set(compact('remarkCategories'));
    }

    /**
     * View method
     *
     * @param string|null $id Remark Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $remarkCategory = $this->RemarkCategories->get($id, [
            'contain' => ['Remarks']
        ]);

        $this->set('remarkCategory', $remarkCategory);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $remarkCategory = $this->RemarkCategories->newEntity();
        if ($this->request->is('post')) {
            $remarkCategory = $this->RemarkCategories->patchEntity($remarkCategory, $this->request->getData());
            if ($this->RemarkCategories->save($remarkCategory)) {
                $this->Flash->success(__('The remark category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The remark category could not be saved. Please, try again.'));
        }
        $this->set(compact('remarkCategory'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Remark Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $remarkCategory = $this->RemarkCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $remarkCategory = $this->RemarkCategories->patchEntity($remarkCategory, $this->request->getData());
            if ($this->RemarkCategories->save($remarkCategory)) {
                $this->Flash->success(__('The remark category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The remark category could not be saved. Please, try again.'));
        }
        $this->set(compact('remarkCategory'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Remark Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $remarkCategory = $this->RemarkCategories->get($id);
        if ($this->RemarkCategories->delete($remarkCategory)) {
            $this->Flash->success(__('The remark category has been deleted.'));
        } else {
            $this->Flash->error(__('The remark category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
