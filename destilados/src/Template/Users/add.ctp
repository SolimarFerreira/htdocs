<div class="box-body">
    <div class="box box-default">
        <?= $this->element('header-add' , ['title' => __('Adicionar usuário')]); ?>
        <div class="box-body" style="display: block;">
            <?= $this->Form->create($user) ?>
            <?php
            echo $this->Form->input('username', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('password', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.nome', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.cpf', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.email', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.dataNascimento', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.celular', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.telefone', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            ?>

        </div>
        <?= $this->element('footer-save' , ['text' => __('Salvar')]); ?>
    </div>
</div>