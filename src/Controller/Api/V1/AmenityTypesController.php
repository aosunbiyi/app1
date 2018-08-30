<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;


/**
 * AmenityTypes Controller
 *
 * @property \App\Model\Table\AmenityTypesTable $AmenityTypes
 *
 * @method \App\Model\Entity\AmenityType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmenityTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $amenityTypes = $this->paginate($this->AmenityTypes);

        $this->set([
            'amenityTypes'=>$amenityTypes,
            '_serialize'=>['amenityTypes']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Amenity Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amenityType = $this->AmenityTypes->get($id, [
            'contain' => ['Amenities']
        ]);

        $this->set([
            'amenityType'=>$amenityType,
            '_serialize'=>['amenityType']
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
        $amenityType = $this->AmenityTypes->newEntity();
        if ($this->request->is('post')) {
            $amenityType = $this->AmenityTypes->patchEntity($amenityType, $this->request->getData());
            if ($this->AmenityTypes->save($amenityType)) {
                $res['status'] = 1;
                $res['msg'] = 'The amenity type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The amenity type could not be saved. Please, try again.';  
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
     * @param string|null $id Amenity Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $amenityType = $this->AmenityTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amenityType = $this->AmenityTypes->patchEntity($amenityType, $this->request->getData());
            if ($this->AmenityTypes->save($amenityType)) {
                $res['status'] = 1;
                $res['msg'] = 'The amenity type has been saved.';
            }else{
                $res['status'] = 0;
                $res['msg'] = 'The amenity type could not be saved. Please, try again.';  
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
     * @param string|null $id Amenity Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $amenityType = $this->AmenityTypes->get($id);
        if ($this->AmenityTypes->delete($amenityType)) {
            $res['status'] = 1;
            $res['msg'] = 'The amenityType has been deleted.';
        } else {
            
            $res['status'] = 0;
            $res['msg'] = 'The amenityType could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
