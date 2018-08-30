<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

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

        $this->set([
            'remarkCategories'=>$remarkCategories,
            '_serialize'=>['remarkCategories']
        ]);
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

        $this->set([
            'remarkCategory'=>$remarkCategory,
            '_serialize'=>['remarkCategory']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $res=array();
        $remarkCategory = $this->RemarkCategories->newEntity();
        if ($this->request->is('post')) {
            $remarkCategory = $this->RemarkCategories->patchEntity($remarkCategory, $this->request->getData());
            if ($this->RemarkCategories->save($remarkCategory)) {
                $res['status'] = 1;
                $res['msg'] = 'The remark category has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The remark category could not be saved. Please, try again.';  
            }
           
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

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
        $res=array();
        $remarkCategory = $this->RemarkCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $remarkCategory = $this->RemarkCategories->patchEntity($remarkCategory, $this->request->getData());
            if ($this->RemarkCategories->save($remarkCategory)) {
                $res['status'] = 1;
                $res['msg'] = 'The remark category has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The remark category could not be saved. Please, try again.';  
            }
        }
      
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
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
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $remarkCategory = $this->RemarkCategories->get($id);
        if ($this->RemarkCategories->delete($remarkCategory)) {
            $res['status'] = 1;
            $res['msg'] = 'The remark category has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The remark category could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
