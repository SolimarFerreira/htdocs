<div class="entregas form large-9 medium-8 columns content">
    <?= $this->Form->create($entrega) ?>
    <fieldset>
        <legend><?= __('Edit Entrega') ?></legend>
        <?php
            echo $this->Form->input('troco');
            echo $this->Form->input('dataEntrega');
            echo $this->Form->input('status');
            echo $this->Form->input('pedido_id', ['options' => $pedidos]);
            echo $this->Form->input('situacao_id', ['options' => $situacao]);
            echo $this->Form->input('pessoas_id', ['options' => $pessoas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
