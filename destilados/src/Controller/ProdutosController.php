<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 */
class ProdutosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'=>['Pessoas'], 'Categorias'], 'limit'=> 10
        ];
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
        $this->set('_serialize', ['produtos']);
    }

    /**
     * View method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => ['Users', 'Categorias', 'Precos']
        ]);

        $this->set('produto', $produto);
        $this->set('_serialize', ['produto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produto = $this->Produtos->newEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            $produto['user_id'] = $this->Auth->user('id');
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $users = $this->Produtos->Users->find('list', ['limit' => 200]);
        $categorias = $this->Produtos->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'users', 'categorias'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->data);
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The produto could not be saved. Please, try again.'));
            }
        }
        $users = $this->Produtos->Users->find('list', ['limit' => 200]);
        $categorias = $this->Produtos->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('produto', 'users', 'categorias'));
        $this->set('_serialize', ['produto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Produto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /** Método que retorna os produtos passando array de ids
     * @return json
     */
    public function getAll(){
        $this->request->allowMethod(['ajax' , 'post']);
        //$this->render('/Element/ajax');

        $data = ['error' => true , 'content' => null ];

        if($this->request->is('post') and !empty($this->request->data['ids'])){

            $ids = $this->request->data['ids'];

            $produtos = $this->Produtos->find('all')->where(['id IN' => $ids]);

            $message = empty($produtos) ? __('Nenhum produto encontrado com o(s) id(s) fornecido(s)') : __('Lista de produtos obtidos');
            $data = ['error' => false , 'content' => $produtos ];
        }

        $this->set(compact('data'));
        $this->set('_serialize', 'data');

    }
}
