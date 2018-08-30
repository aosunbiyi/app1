<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * RoomStatusColors Controller
 *
 * @property \App\Model\Table\RoomStatusColorsTable $RoomStatusColors
 *
 * @method \App\Model\Entity\RoomStatusColor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoomStatusColorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $roomStatusColors = $this->paginate($this->RoomStatusColors);

        $this->set([
            'roomStatusColors'=>$roomStatusColors,
            '_serialize'=>['roomStatusColors']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomStatusColors = $this->RoomStatusColors->get($id, [
            'contain' => []
        ]);

        $this->set([
            'roomStatusColors'=>$roomStatusColors,
            '_serialize'=>['roomStatusColors']
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
        $roomStatusColor = $this->RoomStatusColors->newEntity();
        if ($this->request->is('post')) {
            $roomStatusColor = $this->RoomStatusColors->patchEntity($roomStatusColor, $this->request->getData());
            if ($this->RoomStatusColors->save($roomStatusColor)) {
                $res['status'] = 1;
                $res['msg'] = 'The room status color has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room status color could not be saved. Please, try again.';  
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
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $roomStatusColor = $this->RoomStatusColors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomStatusColor = $this->RoomStatusColors->patchEntity($roomStatusColor, $this->request->getData());
            if ($this->RoomStatusColors->save($roomStatusColor)) {
                $res['status'] = 1;
                $res['msg'] = 'The room status color has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The room status color could not be saved. Please, try again.';  
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
     * @param string|null $id Room Status Color id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $roomStatusColor = $this->RoomStatusColors->get($id);
        if ($this->RoomStatusColors->delete($roomStatusColor)) {
            $res['status'] = 1;
            $res['msg'] = 'The Room Status Color has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The Room Status Color could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
