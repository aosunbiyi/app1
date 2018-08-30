<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Seasons Controller
 *
 * @property \App\Model\Table\SeasonsTable $Seasons
 *
 * @method \App\Model\Entity\Season[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeasonsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SeasonTypes']
        ];
        $seasons = $this->paginate($this->Seasons);

        $this->set([
            'seasons'=>$seasons,
            '_serialize'=>['seasons']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Season id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seasons = $this->Seasons->get($id, [
            'contain' => ['SeasonTypes']
        ]);

        $this->set([
            'seasons'=>$seasons,
            '_serialize'=>['seasons']
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
        //$this->log($this->request->getData());
        $season = $this->Seasons->newEntity();
        if ($this->request->is('post')) {
            $season = $this->Seasons->patchEntity($season, $this->request->getData());
            if ($this->Seasons->save($season)) {
                $res['status'] = 1;
                $res['msg'] = 'The season has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The season could not be saved. Please, try again.';  
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
     * @param string|null $id Season id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $season = $this->Seasons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $season = $this->Seasons->patchEntity($season, $this->request->getData());
            if ($this->Seasons->save($season)) {
                $res['status'] = 1;
                $res['msg'] = 'The season has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The season could not be saved. Please, try again.';  
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
     * @param string|null $id Season id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $season = $this->Seasons->get($id);
        if ($this->Seasons->delete($season)) {
            $res['status'] = 1;
            $res['msg'] = 'The season has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The season could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

    }
}
