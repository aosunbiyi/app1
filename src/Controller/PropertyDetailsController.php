<?php
namespace App\Controller;

use App\Controller\AppController;

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

        $this->set(compact('propertyDetails'));
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
        $propertyDetail = $this->PropertyDetails->get($id, [
            'contain' => []
        ]);

        $this->set('propertyDetail', $propertyDetail);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propertyDetail = $this->PropertyDetails->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/config/' . $file['name'])) {
                $this->request->data['logo'] = $file['name'];
                               
                $propertyDetail = $this->PropertyDetails->patchEntity($propertyDetail, $this->request->getData());
                if ($this->PropertyDetails->save($propertyDetail)) {
                    $this->Flash->success(__('The property detail has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error(__('The property detail could not be saved. Please, try again.'));
                }

            } else {
                $this->Flash->error(__('Could not upload the file'));
            }

        
      
        }
        $this->set(compact('propertyDetail'));
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
                    $this->Flash->success(__('The property detail has been saved.'));
    
                    return $this->redirect(['action' => 'index']);
                }
                else{
                    $this->Flash->error(__('The property detail could not be saved. Please, try again.'));
                }

            } else {
                $this->Flash->error(__('Could not upload the file'));
            }
        }
        $this->set(compact('propertyDetail'));
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
        $this->request->allowMethod(['post', 'delete']);
        $propertyDetail = $this->PropertyDetails->get($id);
        if ($this->PropertyDetails->delete($propertyDetail)) {
            $this->Flash->success(__('The property detail has been deleted.'));
        } else {
            $this->Flash->error(__('The property detail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
