<div class="pedidos form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Edit Pedido') ?></legend>
        <?php
            echo $this->Form->input('dataPedido', ['empty' => true]);
            echo $this->Form->input('descricao');
            echo $this->Form->input('desconto');
            echo $this->Form->input('valorTotal');
            echo $this->Form->input('status');
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('pessoa_id', ['options' => $pessoas]);
            echo $this->Form->input('tipo_id', ['options' => $tipos]);
            echo $this->Form->input('situacao_id', ['options' => $situacao]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
