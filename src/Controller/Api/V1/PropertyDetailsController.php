<?php
namespace App\Controller\Api\V1;
use App\Controller\Api\V1\AppController;

/**
 * PropertyDetails Controller
 *
 * @property \App\Model\Table\PropertyDetailsTable $PropertyDetails
 *
 * @method \App\Model\Entity\PropertyDetail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropertyDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $propertyDetails = $this->paginate($this->PropertyDetails);

        $this->set([
            'propertyDetails'=>$propertyDetails,
            '_serialize'=>['propertyDetails']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Property Detail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propertyDetails = $this->PropertyDetails->get($id, [
            'contain' => []
        ]);

        $this->set([
            'propertyDetails'=>$propertyDetails,
            '_serialize'=>['propertyDetails']
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
        $propertyDetail = $this->PropertyDetails->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/config/' . $file['name'])) {
                $this->request->data['logo'] = $file['name'];
                               
                $propertyDetail = $this->PropertyDetails->patchEntity($propertyDetail, $this->request->getData());
                if ($this->PropertyDetails->save($propertyDetail)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The propertyDetails has been saved.';
                }else{
                    $res['status'] = 0;
                    $res['msg'] = 'The propertyDetails could not be saved. Please, try again.';  
                }

            } else {
    
                $res['status'] = -1;
                $res['msg'] = 'Could not upload the file';  
            }

        
            $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);

        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Property Detail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $res=array();
        $propertyDetail = $this->PropertyDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/config/' . $file['name'])) {
                $this->request->data['logo'] = $file['name'];
                               
                $propertyDetail = $this->PropertyDetails->patchEntity($propertyDetail, $this->request->getData());
                if ($this->PropertyDetails->save($propertyDetail)) {
                    $res['status'] = 1;
                    $res['msg'] = 'The propertyDetails has been saved.';
                }else{
                    $res['status'] = 0;
                    $res['msg'] = 'The propertyDetails could not be saved. Please, try again.';  
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
     * Delete method
     *
     * @param string|null $id Property Detail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $res=array();
        $this->request->allowMethod(['post', 'delete']);
        $propertyDetail = $this->PropertyDetails->get($id);
        if ($this->PropertyDetails->delete($propertyDetail)) {
            $res['status'] = 1;
            $res['msg'] = 'The propertyDetails has been deleted.';
        } else {            
            $res['status'] = 0;
            $res['msg'] = 'The propertyDetails could not be deleted. Please, try again.';
        }

        $this->set(compact('res'));
        $this->set([
            'res'=>$res,
            '_serialize'=>['res']
        ]);
    }
}
