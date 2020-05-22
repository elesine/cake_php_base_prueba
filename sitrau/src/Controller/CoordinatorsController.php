<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coordinators Controller
 *
 * @property \App\Model\Table\CoordinatorsTable $Coordinators
 *
 * @method \App\Model\Entity\Coordinator[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoordinatorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Schools'],
        ];
        $coordinators = $this->paginate($this->Coordinators);

        $this->set(compact('coordinators'));
    }

    /**
     * View method
     *
     * @param string|null $id Coordinator id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coordinator = $this->Coordinators->get($id, [
            'contain' => ['Schools'],
        ]);

        $this->set('coordinator', $coordinator);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coordinator = $this->Coordinators->newEntity();
        if ($this->request->is('post')) {
            $coordinator = $this->Coordinators->patchEntity($coordinator, $this->request->getData());
            if ($this->Coordinators->save($coordinator)) {
                $this->Flash->success(__('The coordinator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinator could not be saved. Please, try again.'));
        }
        $schools = $this->Coordinators->Schools->find('list', ['limit' => 200]);
        $this->set(compact('coordinator', 'schools'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Coordinator id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coordinator = $this->Coordinators->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coordinator = $this->Coordinators->patchEntity($coordinator, $this->request->getData());
            if ($this->Coordinators->save($coordinator)) {
                $this->Flash->success(__('The coordinator has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The coordinator could not be saved. Please, try again.'));
        }
        $schools = $this->Coordinators->Schools->find('list', ['limit' => 200]);
        $this->set(compact('coordinator', 'schools'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Coordinator id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coordinator = $this->Coordinators->get($id);
        if ($this->Coordinators->delete($coordinator)) {
            $this->Flash->success(__('The coordinator has been deleted.'));
        } else {
            $this->Flash->error(__('The coordinator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
