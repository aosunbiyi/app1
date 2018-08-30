<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * ExtraChargeCategories Controller
 *
 * @property \App\Model\Table\ExtraChargeCategoriesTable $ExtraChargeCategories
 *
 * @method \App\Model\Entity\ExtraChargeCategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtraChargeCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $extraChargeCategories = $this->paginate($this->ExtraChargeCategories);

        $this->set([
            'extraChargeCategories'=>$extraChargeCategories,
            '_serialize'=>['extraChargeCategories']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraChargeCategory = $this->ExtraChargeCategories->get($id, [
            'contain' => ['ExtraCharges']
        ]);

        $this->set([
            'extraChargeCategory'=>$extraChargeCategory,
            '_serialize'=>['extraChargeCategory']
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
        $extraChargeCategory = $this->ExtraChargeCategories->newEntity();
        if ($this->request->is('post')) {
            $extraChargeCategory = $this->ExtraChargeCategories->patchEntity($extraChargeCategory, $this->request->getData());
            if ($this->ExtraChargeCategories->save($extraChargeCategory)) {
                $res['status'] = 1;
                $res['msg'] = 'The extra charge category  has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The extra charge category  could not be saved. Please, try again.';  
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
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $extraChargeCategory = $this->ExtraChargeCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraChargeCategory = $this->ExtraChargeCategories->patchEntity($extraChargeCategory, $this->request->getData());
            if ($this->ExtraChargeCategories->save($extraChargeCategory)) {
                $res['status'] = 1;
                $res['msg'] = 'The extra charge category  has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The extra charge category  could not be saved. Please, try again.';  
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
     * @param string|null $id Extra Charge Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $extraChargeCategory = $this->ExtraChargeCategories->get($id);
        if ($this->ExtraChargeCategories->delete($extraChargeCategory)) {
            $res['status'] = 1;
            $res['msg'] = 'The extra charge category  has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The extra charge category  could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
