<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Edit Pessoa') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('cpf');
            echo $this->Form->input('email');
            echo $this->Form->input('dataNascimento');
            echo $this->Form->input('celular');
            echo $this->Form->input('telefone');
            echo $this->Form->input('status');
            echo $this->Form->input('user_id');
            echo $this->Form->input('tipo_pessoas_id', ['options' => $tipoPessoas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
