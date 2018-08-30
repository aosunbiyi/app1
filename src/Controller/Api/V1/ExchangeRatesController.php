<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * ExchangeRates Controller
 *
 * @property \App\Model\Table\ExchangeRatesTable $ExchangeRates
 *
 * @method \App\Model\Entity\ExchangeRate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExchangeRatesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $exchangeRates = $this->paginate($this->ExchangeRates);

        $this->set([
            'exchangeRates'=>$exchangeRates,
            '_serialize'=>['exchangeRates']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Exchange Rate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $exchangeRate = $this->ExchangeRates->get($id, [
            'contain' => []
        ]);

        $this->set([
            'exchangeRate'=>$exchangeRate,
            '_serialize'=>['exchangeRate']
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
        $exchangeRate = $this->ExchangeRates->newEntity();
        if ($this->request->is('post')) {
            $exchangeRate = $this->ExchangeRates->patchEntity($exchangeRate, $this->request->getData());
            if ($this->ExchangeRates->save($exchangeRate)) {
                $res['status'] = 1;
                $res['msg'] = 'The exchange rate has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The exchange rate could not be saved. Please, try again.';  
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
     * @param string|null $id Exchange Rate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $exchangeRate = $this->ExchangeRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $exchangeRate = $this->ExchangeRates->patchEntity($exchangeRate, $this->request->getData());
            if ($this->ExchangeRates->save($exchangeRate)) {
                $res['status'] = 1;
                $res['msg'] = 'The exchange rate has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The exchange rate could not be saved. Please, try again.';  
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
     * @param string|null $id Exchange Rate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $exchangeRate = $this->ExchangeRates->get($id);
        if ($this->ExchangeRates->delete($exchangeRate)) {
            $res['status'] = 1;
            $res['msg'] = 'The exchange rate has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The exchange rate could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
