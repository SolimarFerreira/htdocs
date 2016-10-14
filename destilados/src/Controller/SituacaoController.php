<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Situacao Controller
 *
 * @property \App\Model\Table\SituacaoTable $Situacao
 */
class SituacaoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $situacao = $this->paginate($this->Situacao);

        $this->set(compact('situacao'));
        $this->set('_serialize', ['situacao']);
    }

    /**
     * View method
     *
     * @param string|null $id Situacao id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $situacao = $this->Situacao->get($id, [
            'contain' => ['Entregas', 'Pedidos']
        ]);

        $this->set('situacao', $situacao);
        $this->set('_serialize', ['situacao']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $situacao = $this->Situacao->newEntity();
        if ($this->request->is('post')) {
            $situacao = $this->Situacao->patchEntity($situacao, $this->request->data);
            if ($this->Situacao->save($situacao)) {
                $this->Flash->success(__('The situacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The situacao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('situacao'));
        $this->set('_serialize', ['situacao']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Situacao id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $situacao = $this->Situacao->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $situacao = $this->Situacao->patchEntity($situacao, $this->request->data);
            if ($this->Situacao->save($situacao)) {
                $this->Flash->success(__('The situacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The situacao could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('situacao'));
        $this->set('_serialize', ['situacao']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Situacao id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $situacao = $this->Situacao->get($id);
        if ($this->Situacao->delete($situacao)) {
            $this->Flash->success(__('The situacao has been deleted.'));
        } else {
            $this->Flash->error(__('The situacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
