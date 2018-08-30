<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * Floors Controller
 *
 * @property \App\Model\Table\FloorsTable $Floors
 *
 * @method \App\Model\Entity\Floor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FloorsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Wings']
        ];
        $floors = $this->paginate($this->Floors);

        $this->set([
            'floors'=>$floors,
            '_serialize'=>['floors']
        ]);
    }

    public function get_floors_wing_id($id){
        $floors = $this->Floors->find()->where(['wing_id' => $id])->contain(['Wings','Rooms'])->toList();
   
        $this->set([
            'floors'=>$floors,
            '_serialize'=>['floors']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $floor = $this->Floors->get($id, [
            'contain' => ['Wings', 'Rooms.RoomTypes','Rooms.RoomOwners']
        ]);

        $this->set([
            'floor'=>$floor,
            '_serialize'=>['floor']
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
        $floor = $this->Floors->newEntity();
        if ($this->request->is('post')) {
            $floor = $this->Floors->patchEntity($floor, $this->request->getData());
            if ($this->Floors->save($floor)) {
                $res['status'] = 1;
                $res['msg'] = 'The floor has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The floor could not be saved. Please, try again.';  
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
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $floor = $this->Floors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $floor = $this->Floors->patchEntity($floor, $this->request->getData());
            if ($this->Floors->save($floor)) {
                $res['status'] = 1;
                $res['msg'] = 'The floor has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The floor could not be saved. Please, try again.';  
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
     * @param string|null $id Floor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $floor = $this->Floors->get($id);
        if ($this->Floors->delete($floor)) {
            $res['status'] = 1;
            $res['msg'] = 'The floor has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The floor could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
        
    }
}
