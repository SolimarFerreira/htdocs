<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoPessoas Controller
 *
 * @property \App\Model\Table\TipoPessoasTable $TipoPessoas
 */
class TipoPessoasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipoPessoas = $this->paginate($this->TipoPessoas);

        $this->set(compact('tipoPessoas'));
        $this->set('_serialize', ['tipoPessoas']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Pessoa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoPessoa = $this->TipoPessoas->get($id, [
            'contain' => []
        ]);

        $this->set('tipoPessoa', $tipoPessoa);
        $this->set('_serialize', ['tipoPessoa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoPessoa = $this->TipoPessoas->newEntity();
        if ($this->request->is('post')) {
            $tipoPessoa = $this->TipoPessoas->patchEntity($tipoPessoa, $this->request->data);
            if ($this->TipoPessoas->save($tipoPessoa)) {
                $this->Flash->success(__('The tipo pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo pessoa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoPessoa'));
        $this->set('_serialize', ['tipoPessoa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Pessoa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoPessoa = $this->TipoPessoas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoPessoa = $this->TipoPessoas->patchEntity($tipoPessoa, $this->request->data);
            if ($this->TipoPessoas->save($tipoPessoa)) {
                $this->Flash->success(__('The tipo pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipo pessoa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tipoPessoa'));
        $this->set('_serialize', ['tipoPessoa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Pessoa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoPessoa = $this->TipoPessoas->get($id);
        if ($this->TipoPessoas->delete($tipoPessoa)) {
            $this->Flash->success(__('The tipo pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
