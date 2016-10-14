<div class="box-body">
    <div class="box box-default">
        <?= $this->element('header-add' , ['title' => __('Adicionar Pessoa')]); ?>
        <div class="box-body" style="display: block;">
            <?= $this->Form->create($pessoa) ?>
            <?php
            echo $this->Form->input('tipo_pessoas_id', ['class' => 'form-control', 'div' => ['class' => 'form-group']], ['options' => $tipoPessoas]);
            echo $this->Form->input('nome', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('cpf', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('email', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('dataNascimento', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('celular', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('telefone', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('endereco.logradouro', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('endereco.cep', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('endereco.bairro', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('endereco.estado', ['class' => 'form-control', 'value' => 'RJ', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('endereco.complemento', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            ?>
        </div>
        <?= $this->element('footer-save' , ['text' => __('Salvar')]); ?>
    </div>
</div>
