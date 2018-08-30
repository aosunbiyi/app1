<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * HotelRepresentatives Controller
 *
 * @property \App\Model\Table\HotelRepresentativesTable $HotelRepresentatives
 *
 * @method \App\Model\Entity\HotelRepresentative[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HotelRepresentativesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $hotelRepresentatives = $this->paginate($this->HotelRepresentatives);

        $this->set([
            'hotelRepresentatives'=>$hotelRepresentatives,
            '_serialize'=>['hotelRepresentatives']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hotelRepresentative = $this->HotelRepresentatives->get($id, [
            'contain' => ['Accounts']
        ]);

        $this->set([
            'hotelRepresentative'=>$hotelRepresentative,
            '_serialize'=>['hotelRepresentative']
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
        $hotelRepresentative = $this->HotelRepresentatives->newEntity();
        if ($this->request->is('post')) {
            $hotelRepresentative = $this->HotelRepresentatives->patchEntity($hotelRepresentative, $this->request->getData());
            if ($this->HotelRepresentatives->save($hotelRepresentative)) {
                $res['status'] = 1;
                $res['msg'] = 'The hotel representative has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The hotel representative could not be saved. Please, try again.';  
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
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $hotelRepresentative = $this->HotelRepresentatives->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hotelRepresentative = $this->HotelRepresentatives->patchEntity($hotelRepresentative, $this->request->getData());
            if ($this->HotelRepresentatives->save($hotelRepresentative)) {
                $res['status'] = 1;
                $res['msg'] = 'The hotel representative has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The hotel representative could not be saved. Please, try again.';  
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
     * @param string|null $id Hotel Representative id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $hotelRepresentative = $this->HotelRepresentatives->get($id);
        if ($this->HotelRepresentatives->delete($hotelRepresentative)) {
            $res['status'] = 1;
            $res['msg'] = 'The hotel representative has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The hotel representative could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
