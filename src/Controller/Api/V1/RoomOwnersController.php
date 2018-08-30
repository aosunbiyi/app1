<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomOwners Controller
 *
 * @property \App\Model\Table\RoomOwnersTable $RoomOwners
 *
 * @method \App\Model\Entity\RoomOwner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomOwnersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roomOwners = $this->paginate($this->RoomOwners);

        $this->set([
            'roomOwners'=>$roomOwners,
            '_serialize'=>['roomOwners']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomOwner = $this->RoomOwners->get($id, [
            'contain' => ['Rooms.RoomTypes','Rooms.RoomOwners']
        ]);

        $this->set([
            'roomOwners'=>$roomOwners,
            '_serialize'=>['roomOwners']
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
        $roomOwner = $this->RoomOwners->newEntity();
        if ($this->request->is('post')) {
            $roomOwner = $this->RoomOwners->patchEntity($roomOwner, $this->request->getData());
            if ($this->RoomOwners->save($roomOwner)) {
                $res['status'] = 1;
                $res['msg'] = 'The room owner has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room owner could not be saved. Please, try again.';  
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
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomOwner = $this->RoomOwners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomOwner = $this->RoomOwners->patchEntity($roomOwner, $this->request->getData());
            if ($this->RoomOwners->save($roomOwner)) {
                $res['status'] = 1;
                $res['msg'] = 'The room owner has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room owner could not be saved. Please, try again.';  
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
     * @param string|null $id Room Owner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomOwner = $this->RoomOwners->get($id);
        if ($this->RoomOwners->delete($roomOwner)) {
            $res['status'] = 1;
            $res['msg'] = 'The  Room Owner has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The  Room Owner could not be deleted. Please, try again.';
        }

        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
