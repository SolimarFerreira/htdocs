<div class="itensPedidos form large-9 medium-8 columns content">
    <?= $this->Form->create($itensPedido) ?>
    <fieldset>
        <legend><?= __('Add Itens Pedido') ?></legend>
        <?php
            echo $this->Form->input('quantidade');
            echo $this->Form->input('status');
            echo $this->Form->input('preco_idpreco');
            echo $this->Form->input('pedido_id', ['options' => $pedidos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
