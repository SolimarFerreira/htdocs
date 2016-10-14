<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Itens Pedido'), ['action' => 'edit', $itensPedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itens Pedido'), ['action' => 'delete', $itensPedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itensPedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itens Pedidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itens Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itensPedidos view large-9 medium-8 columns content">
    <h3><?= h($itensPedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pedido') ?></th>
            <td><?= $itensPedido->has('pedido') ? $this->Html->link($itensPedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $itensPedido->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($itensPedido->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($itensPedido->quantidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Preco Idpreco') ?></th>
            <td><?= $this->Number->format($itensPedido->preco_idpreco) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($itensPedido->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($itensPedido->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($itensPedido->status)); ?>
    </div>
</div>
