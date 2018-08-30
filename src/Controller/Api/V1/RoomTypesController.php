<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomTypes Controller
 *
 * @property \App\Model\Table\RoomTypesTable $RoomTypes
 *
 * @method \App\Model\Entity\RoomType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roomTypes = $this->paginate($this->RoomTypes);

        $this->set([
            'roomTypes'=>$roomTypes,
            '_serialize'=>['roomTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Room Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomTypes = $this->RoomTypes->get($id, [
            'contain' => ['Rates.RateTypes', 'Rooms.RoomTypes','Rooms.RoomOwners']
        ]);

        $this->set([
            'roomTypes'=>$roomTypes,
            '_serialize'=>['roomTypes']
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
        $roomType = $this->RoomTypes->newEntity();
        if ($this->request->is('post')) {
            $roomType = $this->RoomTypes->patchEntity($roomType, $this->request->getData());
            if ($this->RoomTypes->save($roomType)) {
                $res['status'] = 1;
                $res['msg'] = 'The room type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room type could not be saved. Please, try again.';  
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
     * @param string|null $id Room Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomType = $this->RoomTypes->get($id, [
            'contain' => ['Rates']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomType = $this->RoomTypes->patchEntity($roomType, $this->request->getData());
            if ($this->RoomTypes->save($roomType)) {
                $res['status'] = 1;
                $res['msg'] = 'The room type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room type could not be saved. Please, try again.';  
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
     * @param string|null $id Room Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomType = $this->RoomTypes->get($id);
        if ($this->RoomTypes->delete($roomType)) {
            $res['status'] = 1;
            $res['msg'] = 'The Room Type has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Room Type could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
