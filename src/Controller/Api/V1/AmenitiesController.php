<?php
namespace App\Controller\Api\V1;

use App\Controller\Api\V1\AppController;

/**
 * Amenities Controller
 *
 * @property \App\Model\Table\AmenitiesTable $Amenities
 *
 * @method \App\Model\Entity\Amenity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmenitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AmenityTypes']
        ];
        $amenities = $this->paginate($this->Amenities);

        $this->set([
            'amenities'=>$amenities,
            '_serialize'=>['amenities']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Amenity id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amenity = $this->Amenities->get($id, [
            'contain' => ['AmenityTypes', 'Rooms.RoomTypes','Rooms.RoomOwners','Rooms.Floors']
        ]);

        $this->set([
            'amenity'=>$amenity,
            '_serialize'=>['amenity']
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
        $amenity = $this->Amenities->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
           
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/amenities/  ' . $file['name'])) {
                $this->request->data['amenity_logo'] = $file['name'];
                $amenity = $this->Amenities->patchEntity($amenity, $this->request->getData());
                
                if ($this->Amenities->save($amenity)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The amenity has been saved.';
                }else{
                    $res['status'] = 0;
                    $res['msg'] = 'The amenity could not be saved. Please, try again.';  
                }
          

            } else {
         
                $res['status'] = -1;
                $res['msg'] = 'Could not upload the file'; 
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
     * @param string|null $id Amenity id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $amenity = $this->Amenities->get($id, [
            'contain' => ['Rooms']
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
           
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/amenities/' . $file['name'])) {
                $this->request->data['amenity_logo'] = $file['name'];
                $amenity = $this->Amenities->patchEntity($amenity, $this->request->getData());
                
                if ($this->Amenities->save($amenity)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The amenity has been saved.';
                }else{
                    $res['status'] = 0;
                    $res['msg'] = 'The amenity could not be saved. Please, try again.';  
                }            
        }
        else {
          
            $res['status'] = -1;
            $res['msg'] = 'Could not upload the file'; 
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
     * @param string|null $id Amenity id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $amenity = $this->Amenities->get($id);
        if ($this->Amenities->delete($amenity)) {              
            $res['status'] = 1;
            $res['msg'] = 'The amenity has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The amenity could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
