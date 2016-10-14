<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Precos Controller
 *
 * @property \App\Model\Table\PrecosTable $Precos
 */
class PrecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos', 'Users']
        ];
        $precos = $this->paginate($this->Precos);

        $this->set(compact('precos'));
        $this->set('_serialize', ['precos']);
    }

    /**
     * View method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $preco = $this->Precos->get($id, [
            'contain' => ['Produtos', 'Users']
        ]);

        $this->set('preco', $preco);
        $this->set('_serialize', ['preco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $preco = $this->Precos->newEntity();
        if ($this->request->is('post')) {
            $preco = $this->Precos->patchEntity($preco, $this->request->data);
            if ($this->Precos->save($preco)) {
                $this->Flash->success(__('The preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The preco could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->Precos->Produtos->find('list', ['limit' => 200]);
        $users = $this->Precos->Users->find('list', ['limit' => 200]);
        $this->set(compact('preco', 'produtos', 'users'));
        $this->set('_serialize', ['preco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $preco = $this->Precos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $preco = $this->Precos->patchEntity($preco, $this->request->data);
            if ($this->Precos->save($preco)) {
                $this->Flash->success(__('The preco has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The preco could not be saved. Please, try again.'));
            }
        }
        $produtos = $this->Precos->Produtos->find('list', ['limit' => 200]);
        $users = $this->Precos->Users->find('list', ['limit' => 200]);
        $this->set(compact('preco', 'produtos', 'users'));
        $this->set('_serialize', ['preco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Preco id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $preco = $this->Precos->get($id);
        if ($this->Precos->delete($preco)) {
            $this->Flash->success(__('The preco has been deleted.'));
        } else {
            $this->Flash->error(__('The preco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
