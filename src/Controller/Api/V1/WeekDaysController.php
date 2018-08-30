<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * WeekDays Controller
 *
 * @property \App\Model\Table\WeekDaysTable $WeekDays
 *
 * @method \App\Model\Entity\WeekDay[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WeekDaysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $weekDays = $this->paginate($this->WeekDays);

        $this->set([
            'weekDays'=>$weekDays,
            '_serialize'=>['weekDays']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $weekDays = $this->WeekDays->get($id, [
            'contain' => ['Rooms.RoomTypes','Rooms.Wings','Rooms.RoomOwners']
        ]);

        $this->set([
            'weekDays'=>$weekDays,
            '_serialize'=>['weekDays']
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
        $weekDay = $this->WeekDays->newEntity();
        if ($this->request->is('post')) {
            $weekDay = $this->WeekDays->patchEntity($weekDay, $this->request->getData());
            if ($this->WeekDays->save($weekDay)) {
                $res['status'] = 1;
                $res['msg'] = 'The week day has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The week day could not be saved. Please, try again.';  
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
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $weekDay = $this->WeekDays->get($id, [
            'contain' => ['Rooms']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $weekDay = $this->WeekDays->patchEntity($weekDay, $this->request->getData());
            if ($this->WeekDays->save($weekDay)) {
                $res['status'] = 1;
                $res['msg'] = 'The week day has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The week day could not be saved. Please, try again.';  
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
     * @param string|null $id Week Day id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $weekDay = $this->WeekDays->get($id);
        if ($this->WeekDays->delete($weekDay)) {
            $res['status'] = 1;
            $res['msg'] = 'The week day has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The week day could not be deleted. Please, try again.';
        }

       
        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
