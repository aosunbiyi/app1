<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Log\Log;

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

        $this->set(compact('exchangeRates'));
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

        $this->set('exchangeRate', $exchangeRate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $exchangeRate = $this->ExchangeRates->newEntity();
        if ($this->request->is('post')) {

            $postedData =  $this->request->getData();

            if($postedData['is_base_currency']==1){  
                $connection= ConnectionManager::get('default');
                $connection->execute('UPDATE exchange_rates  SET is_base_currency=0;');
            }
         

            $exchangeRate = $this->ExchangeRates->patchEntity($exchangeRate, $this->request->getData());
            if ($this->ExchangeRates->save($exchangeRate)) {
                $this->Flash->success(__('The exchange rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exchange rate could not be saved. Please, try again.'));
        }
        $this->set(compact('exchangeRate'));
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
        $exchangeRate = $this->ExchangeRates->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postedData =  $this->request->getData();

            if($postedData['is_base_currency']==1){  
                $connection= ConnectionManager::get('default');
                $connection->execute('UPDATE exchange_rates  SET is_base_currency=0;');
            }
         


            $exchangeRate = $this->ExchangeRates->patchEntity($exchangeRate, $this->request->getData());
            if ($this->ExchangeRates->save($exchangeRate)) {
                $this->Flash->success(__('The exchange rate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The exchange rate could not be saved. Please, try again.'));
        }
        $this->set(compact('exchangeRate'));
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
        $this->request->allowMethod(['post', 'delete']);
        $exchangeRate = $this->ExchangeRates->get($id);
        if ($this->ExchangeRates->delete($exchangeRate)) {
            $this->Flash->success(__('The exchange rate has been deleted.'));
        } else {
            $this->Flash->error(__('The exchange rate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
