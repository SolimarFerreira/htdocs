<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pessoas Controller
 *
 * @property \App\Model\Table\PessoasTable $Pessoas
 */
class PessoasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TipoPessoas']
        ];
        $pessoas = $this->paginate($this->Pessoas);

        $this->set(compact('pessoas'));
        $this->set('_serialize', ['pessoas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => ['TipoPessoas', 'Users', 'Enderecos', 'Pedidos']
        ]);

        $this->set('pessoa', $pessoa);
        $this->set('_serialize', ['pessoa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pessoa = $this->Pessoas->newEntity();
        if ($this->request->is('post')) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->data);
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
            }
        }
        $tipoPessoas = $this->Pessoas->TipoPessoas->find('list', ['conditions'=> 'TipoPessoas.id > 1','limit' => 200, 'order' => ['TipoPessoas.id' => 'DESC']]);
        $this->set(compact('pessoa', 'tipoPessoas'));
        $this->set('_serialize', ['pessoa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pessoa = $this->Pessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pessoa = $this->Pessoas->patchEntity($pessoa, $this->request->data);
            if ($this->Pessoas->save($pessoa)) {
                $this->Flash->success(__('The pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pessoa could not be saved. Please, try again.'));
            }
        }
        $tipoPessoas = $this->Pessoas->TipoPessoas->find('list', ['limit' => 200]);
        $this->set(compact('pessoa', 'tipoPessoas'));
        $this->set('_serialize', ['pessoa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pessoa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pessoa = $this->Pessoas->get($id);
        if ($this->Pessoas->delete($pessoa)) {
            $this->Flash->success(__('The pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
