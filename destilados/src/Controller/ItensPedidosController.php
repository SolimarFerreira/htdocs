<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItensPedidos Controller
 *
 * @property \App\Model\Table\ItensPedidosTable $ItensPedidos
 */
class ItensPedidosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedidos']
        ];
        $itensPedidos = $this->paginate($this->ItensPedidos);

        $this->set(compact('itensPedidos'));
        $this->set('_serialize', ['itensPedidos']);
    }

    /**
     * View method
     *
     * @param string|null $id Itens Pedido id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itensPedido = $this->ItensPedidos->get($id, [
            'contain' => ['Pedidos']
        ]);

        $this->set('itensPedido', $itensPedido);
        $this->set('_serialize', ['itensPedido']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itensPedido = $this->ItensPedidos->newEntity();
        if ($this->request->is('post')) {
            $itensPedido = $this->ItensPedidos->patchEntity($itensPedido, $this->request->data);
            if ($this->ItensPedidos->save($itensPedido)) {
                $this->Flash->success(__('The itens pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The itens pedido could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->ItensPedidos->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('itensPedido', 'pedidos'));
        $this->set('_serialize', ['itensPedido']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Itens Pedido id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itensPedido = $this->ItensPedidos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itensPedido = $this->ItensPedidos->patchEntity($itensPedido, $this->request->data);
            if ($this->ItensPedidos->save($itensPedido)) {
                $this->Flash->success(__('The itens pedido has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The itens pedido could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->ItensPedidos->Pedidos->find('list', ['limit' => 200]);
        $this->set(compact('itensPedido', 'pedidos'));
        $this->set('_serialize', ['itensPedido']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Itens Pedido id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itensPedido = $this->ItensPedidos->get($id);
        if ($this->ItensPedidos->delete($itensPedido)) {
            $this->Flash->success(__('The itens pedido has been deleted.'));
        } else {
            $this->Flash->error(__('The itens pedido could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
