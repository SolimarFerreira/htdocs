<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PedidosHasFormasPagamentos Controller
 *
 * @property \App\Model\Table\PedidosHasFormasPagamentosTable $PedidosHasFormasPagamentos
 */
class PedidosHasFormasPagamentosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Pedidos', 'FormasPagamentos']
        ];
        $pedidosHasFormasPagamentos = $this->paginate($this->PedidosHasFormasPagamentos);

        $this->set(compact('pedidosHasFormasPagamentos'));
        $this->set('_serialize', ['pedidosHasFormasPagamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Pedidos Has Formas Pagamento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->get($id, [
            'contain' => ['Pedidos', 'FormasPagamentos']
        ]);

        $this->set('pedidosHasFormasPagamento', $pedidosHasFormasPagamento);
        $this->set('_serialize', ['pedidosHasFormasPagamento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->newEntity();
        if ($this->request->is('post')) {
            $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->patchEntity($pedidosHasFormasPagamento, $this->request->data);
            if ($this->PedidosHasFormasPagamentos->save($pedidosHasFormasPagamento)) {
                $this->Flash->success(__('The pedidos has formas pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedidos has formas pagamento could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->PedidosHasFormasPagamentos->Pedidos->find('list', ['limit' => 200]);
        $formasPagamentos = $this->PedidosHasFormasPagamentos->FormasPagamentos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosHasFormasPagamento', 'pedidos', 'formasPagamentos'));
        $this->set('_serialize', ['pedidosHasFormasPagamento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pedidos Has Formas Pagamento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->patchEntity($pedidosHasFormasPagamento, $this->request->data);
            if ($this->PedidosHasFormasPagamentos->save($pedidosHasFormasPagamento)) {
                $this->Flash->success(__('The pedidos has formas pagamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pedidos has formas pagamento could not be saved. Please, try again.'));
            }
        }
        $pedidos = $this->PedidosHasFormasPagamentos->Pedidos->find('list', ['limit' => 200]);
        $formasPagamentos = $this->PedidosHasFormasPagamentos->FormasPagamentos->find('list', ['limit' => 200]);
        $this->set(compact('pedidosHasFormasPagamento', 'pedidos', 'formasPagamentos'));
        $this->set('_serialize', ['pedidosHasFormasPagamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pedidos Has Formas Pagamento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pedidosHasFormasPagamento = $this->PedidosHasFormasPagamentos->get($id);
        if ($this->PedidosHasFormasPagamentos->delete($pedidosHasFormasPagamento)) {
            $this->Flash->success(__('The pedidos has formas pagamento has been deleted.'));
        } else {
            $this->Flash->error(__('The pedidos has formas pagamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
