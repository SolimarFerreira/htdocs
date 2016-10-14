<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Edit Endereco') ?></legend>
        <?php
            echo $this->Form->input('logradouro');
            echo $this->Form->input('cep');
            echo $this->Form->input('bairro');
            echo $this->Form->input('estado');
            echo $this->Form->input('complemento');
            echo $this->Form->input('status');
            echo $this->Form->input('pessoa_id', ['options' => $pessoas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
