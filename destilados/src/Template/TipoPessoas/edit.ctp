<div class="tipoPessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoPessoa) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Pessoa') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
