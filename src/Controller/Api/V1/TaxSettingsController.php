<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * TaxSettings Controller
 *
 * @property \App\Model\Table\TaxSettingsTable $TaxSettings
 *
 * @method \App\Model\Entity\TaxSetting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TaxSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TaxSettingTypes']
        ];
        $taxSettings = $this->paginate($this->TaxSettings);

        $this->set([
            'taxSettings'=>$taxSettings,
            '_serialize'=>['taxSettings']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taxSettings = $this->TaxSettings->get($id, [
            'contain' => ['TaxSettingTypes']
        ]);

        $this->set([
            'taxSettings'=>$taxSettings,
            '_serialize'=>['taxSettings']
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
        $taxSetting = $this->TaxSettings->newEntity();
        if ($this->request->is('post')) {
            $taxSetting = $this->TaxSettings->patchEntity($taxSetting, $this->request->getData());
            if ($this->TaxSettings->save($taxSetting)) {
                $res['status'] = 1;
                $res['msg'] = 'The tax setting has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The tax setting could not be saved. Please, try again.';  
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
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $taxSetting = $this->TaxSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taxSetting = $this->TaxSettings->patchEntity($taxSetting, $this->request->getData());
            if ($this->TaxSettings->save($taxSetting)) {
                $res['status'] = 1;
                $res['msg'] = 'The tax setting has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The tax setting could not be saved. Please, try again.';  
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
     * @param string|null $id Tax Setting id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $taxSetting = $this->TaxSettings->get($id);
        if ($this->TaxSettings->delete($taxSetting)) {
            $res['status'] = 1;
            $res['msg'] = 'The tax setting has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The tax setting could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
