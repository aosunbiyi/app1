<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('amenities'));
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

        $this->set('amenity', $amenity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amenity = $this->Amenities->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
           
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/amenities/  ' . $file['name'])) {
                $this->request->data['amenity_logo'] = $file['name'];
                $amenity = $this->Amenities->patchEntity($amenity, $this->request->getData());
                
                if ($this->Amenities->save($amenity)) {
                    $this->Flash->success(__('The amenity has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                } else {
                    $this->Flash->error(__('The amenity could not be saved. Please, try again.'));
                }

            } else {
                $this->Flash->error(__('Could not upload the file'));
            }


        
        $amenityTypes = $this->Amenities->AmenityTypes->find('list', ['limit' => 200]);
        $rooms = $this->Amenities->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('amenity', 'amenityTypes', 'rooms'));
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
                    $this->Flash->success(__('The amenity has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                } else {
                    $this->Flash->error(__('The amenity could not be saved. Please, try again.'));
                }


            
        }
        else {
            $this->Flash->error(__('Could not upload the file'));
        }

        $amenityTypes = $this->Amenities->AmenityTypes->find('list', ['limit' => 200]);
        $rooms = $this->Amenities->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('amenity', 'amenityTypes', 'rooms'));
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
        $this->request->allowMethod(['post', 'delete']);
        $amenity = $this->Amenities->get($id);
        if ($this->Amenities->delete($amenity)) {
            $this->Flash->success(__('The amenity has been deleted.'));
        } else {
            $this->Flash->error(__('The amenity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
