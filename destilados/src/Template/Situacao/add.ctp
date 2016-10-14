<div class="situacao form large-9 medium-8 columns content">
    <?= $this->Form->create($situacao) ?>
    <fieldset>
        <legend><?= __('Add Situacao') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
