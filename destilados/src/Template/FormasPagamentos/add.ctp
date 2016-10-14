<div class="formasPagamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($formasPagamento) ?>
    <fieldset>
        <legend><?= __('Add Formas Pagamento') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
