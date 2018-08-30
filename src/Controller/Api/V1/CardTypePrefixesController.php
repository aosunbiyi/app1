<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * CardTypePrefixes Controller
 *
 * @property \App\Model\Table\CardTypePrefixesTable $CardTypePrefixes
 *
 * @method \App\Model\Entity\CardTypePrefix[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CardTypePrefixesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SettlementTypes']
        ];
        $cardTypePrefixes = $this->paginate($this->CardTypePrefixes);

        $this->set([
            'cardTypePrefixes'=>$cardTypePrefixes,
            '_serialize'=>['cardTypePrefixes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cardTypePrefix = $this->CardTypePrefixes->get($id, [
            'contain' => ['SettlementTypes']
        ]);

       
        $this->set([
            'cardTypePrefix'=>$cardTypePrefix,
            '_serialize'=>['cardTypePrefix']
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
        $cardTypePrefix = $this->CardTypePrefixes->newEntity();
        if ($this->request->is('post')) {
            $cardTypePrefix = $this->CardTypePrefixes->patchEntity($cardTypePrefix, $this->request->getData());
            if ($this->CardTypePrefixes->save($cardTypePrefix)) {
                $res['status'] = 1;
                $res['msg'] = 'The card type prefix has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The card type prefix could not be saved. Please, try again.';  
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
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $cardTypePrefix = $this->CardTypePrefixes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cardTypePrefix = $this->CardTypePrefixes->patchEntity($cardTypePrefix, $this->request->getData());
            if ($this->CardTypePrefixes->save($cardTypePrefix)) {
                $res['status'] = 1;
                $res['msg'] = 'The card type prefix has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The card type prefix could not be saved. Please, try again.';  
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
     * @param string|null $id Card Type Prefix id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $cardTypePrefix = $this->CardTypePrefixes->get($id);
        if ($this->CardTypePrefixes->delete($cardTypePrefix)) {
            $res['status'] = 1;
            $res['msg'] = 'The Card Type Prefix has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Card Type Prefix could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
