<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * ExtraCharges Controller
 *
 * @property \App\Model\Table\ExtraChargesTable $ExtraCharges
 *
 * @method \App\Model\Entity\ExtraCharge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExtraChargesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtraChargeCategories']
        ];
        $extraCharges = $this->paginate($this->ExtraCharges);

        $this->set([
            'extraCharges'=>$extraCharges,
            '_serialize'=>['extraCharges']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extraCharge = $this->ExtraCharges->get($id, [
            'contain' => ['ExtraChargeCategories']
        ]);

        $this->set([
            'extraCharge'=>$extraCharge,
            '_serialize'=>['extraCharge']
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
        $extraCharge = $this->ExtraCharges->newEntity();
        if ($this->request->is('post')) {
            $extraCharge = $this->ExtraCharges->patchEntity($extraCharge, $this->request->getData());
            if ($this->ExtraCharges->save($extraCharge)) {
                $res['status'] = 1;
                $res['msg'] = 'The extra charge has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The extra charge could not be saved. Please, try again.';  
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
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $extraCharge = $this->ExtraCharges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extraCharge = $this->ExtraCharges->patchEntity($extraCharge, $this->request->getData());
            if ($this->ExtraCharges->save($extraCharge)) {
                $res['status'] = 1;
                $res['msg'] = 'The extra charge has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The extra charge could not be saved. Please, try again.';  
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
     * @param string|null $id Extra Charge id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $extraCharge = $this->ExtraCharges->get($id);
        if ($this->ExtraCharges->delete($extraCharge)) {
            $res['status'] = 1;
            $res['msg'] = 'The extra charge has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The extra charge could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
