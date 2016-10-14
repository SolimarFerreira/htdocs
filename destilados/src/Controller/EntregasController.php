<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entregas Controller
 *
 * @property \App\Model\Table\EntregasTable $Entregas
 */
class EntregasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedidos', 'Situacao', 'Pessoas']
        ];
        $entregas = $this->paginate($this->Entregas);

        $this->set(compact('entregas'));
        $this->set('_serialize', ['entregas']);
    }

    /**
     * View method
     *
     * @param string|null $id Entrega id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entrega = $this->Entregas->get($id, [
            'contain' => ['Pedidos', 'Situacao', 'Pessoas']
        ]);

        $this->set('entrega', $entrega);
        $this->set('_serialize', ['entrega']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entrega = $this->Entregas->newEntity();
        if ($this->request->is('post')) {
            $entrega = $this->Entregas->patchEntity($entrega, $this->request->data);
            if ($this->Entregas->save($entrega)) {
                $this->Flash->success(__('The entrega has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entrega could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->Entregas->Pedidos->find('list', ['limit' => 200]);
        $situacao = $this->Entregas->Situacao->find('list', ['limit' => 200]);
        $pessoas = $this->Entregas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('entrega', 'pedidos', 'situacao', 'pessoas'));
        $this->set('_serialize', ['entrega']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entrega id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entrega = $this->Entregas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entrega = $this->Entregas->patchEntity($entrega, $this->request->data);
            if ($this->Entregas->save($entrega)) {
                $this->Flash->success(__('The entrega has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The entrega could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->Entregas->Pedidos->find('list', ['limit' => 200]);
        $situacao = $this->Entregas->Situacao->find('list', ['limit' => 200]);
        $pessoas = $this->Entregas->Pessoas->find('list', ['limit' => 200]);
        $this->set(compact('entrega', 'pedidos', 'situacao', 'pessoas'));
        $this->set('_serialize', ['entrega']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entrega id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entrega = $this->Entregas->get($id);
        if ($this->Entregas->delete($entrega)) {
            $this->Flash->success(__('The entrega has been deleted.'));
        } else {
            $this->Flash->error(__('The entrega could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
