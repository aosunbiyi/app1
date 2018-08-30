<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomsAmenities Controller
 *
 * @property \App\Model\Table\RoomsAmenitiesTable $RoomsAmenities
 *
 * @method \App\Model\Entity\RoomsAmenity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomsAmenitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms', 'Amenities']
        ];
        $roomsAmenities = $this->paginate($this->RoomsAmenities);

        $this->set([
            'roomsAmenities'=>$roomsAmenities,
            '_serialize'=>['roomsAmenities']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomsAmenities = $this->RoomsAmenities->get($id, [
            'contain' => ['Rooms', 'Amenities']
        ]);

        $this->set([
            'roomsAmenities'=>$roomsAmenities,
            '_serialize'=>['roomsAmenities']
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
        $roomsAmenity = $this->RoomsAmenities->newEntity();
        if ($this->request->is('post')) {
            $roomsAmenity = $this->RoomsAmenities->patchEntity($roomsAmenity, $this->request->getData());
            if ($this->RoomsAmenities->save($roomsAmenity)) {
                $res['status'] = 1;
                $res['msg'] = 'The rooms amenity has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rooms amenity could not be saved. Please, try again.';  
            }
            
        }
    
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

    }

    /**
     * Edit method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomsAmenity = $this->RoomsAmenities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomsAmenity = $this->RoomsAmenities->patchEntity($roomsAmenity, $this->request->getData());
            if ($this->RoomsAmenities->save($roomsAmenity)) {
                $res['status'] = 1;
                $res['msg'] = 'The rooms amenity has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The rooms amenity could not be saved. Please, try again.';  
            }
        }
    
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rooms Amenity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomsAmenity = $this->RoomsAmenities->get($id);
        if ($this->RoomsAmenities->delete($roomsAmenity)) {
            $res['status'] = 1;
            $res['msg'] = 'The Rooms Amenity has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Rooms Amenity could not be deleted. Please, try again.';
        }
        
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
