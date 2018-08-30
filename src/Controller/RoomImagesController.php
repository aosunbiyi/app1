<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomImages Controller
 *
 * @property \App\Model\Table\RoomImagesTable $RoomImages
 *
 * @method \App\Model\Entity\RoomImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rooms']
        ];
        $roomImages = $this->paginate($this->RoomImages);

        $this->set(compact('roomImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Room Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomImage = $this->RoomImages->get($id, [
            'contain' => ['Rooms']
        ]);

        $this->set('roomImage', $roomImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id=null)
    {
        $this->loadModel('Rooms');
        if(is_null($id))
       {
        return $this->redirect([
            'controller' => 'Rooms',
            'action' => 'index'
        ]);
       }
        else{
            $room= $this->Rooms->get($id,[
                'contain'=> ['RoomImages']
            ]);
        }
      
       
        $roomImage = $this->RoomImages->newEntity();
        if ($this->request->is('post')) {
          

            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['image_url'] = $file['name'];
                $roomImage = $this->RoomImages->patchEntity($roomImage, $this->request->getData());
                
                if ($this->RoomImages->save($roomImage)) {
                    $this->Flash->success(__('The room image has been saved.'));
    
                    return $this->redirect($this->referer());
                }
                } else {
                    $this->Flash->error(__('The room image could not be saved. Please, try again.'));
                }

            } else {
                $this->Flash->error(__('Could not upload the file'));
            }

        
        $rooms = $this->RoomImages->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('roomImage', 'rooms','room'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Room Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomImage = $this->RoomImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomImage = $this->RoomImages->patchEntity($roomImage, $this->request->getData());
            if ($this->RoomImages->save($roomImage)) {
                $this->Flash->success(__('The room image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The room image could not be saved. Please, try again.'));
        }
        $rooms = $this->RoomImages->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('roomImage', 'rooms'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Room Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomImage = $this->RoomImages->get($id);
        if ($this->RoomImages->delete($roomImage)) {
            $this->Flash->success(__('The room image has been deleted.'));
        } else {
            $this->Flash->error(__('The room image could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
