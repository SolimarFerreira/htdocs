<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entrega'), ['action' => 'edit', $entrega->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entrega'), ['action' => 'delete', $entrega->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrega->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entregas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrega'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situacao'), ['controller' => 'Situacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situacao'), ['controller' => 'Situacao', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entregas view large-9 medium-8 columns content">
    <h3><?= h($entrega->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pedido') ?></th>
            <td><?= $entrega->has('pedido') ? $this->Html->link($entrega->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $entrega->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Situacao') ?></th>
            <td><?= $entrega->has('situacao') ? $this->Html->link($entrega->situacao->id, ['controller' => 'Situacao', 'action' => 'view', $entrega->situacao->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pessoa') ?></th>
            <td><?= $entrega->has('pessoa') ? $this->Html->link($entrega->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $entrega->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($entrega->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Troco') ?></th>
            <td><?= $this->Number->format($entrega->troco) ?></td>
        </tr>
        <tr>
            <th><?= __('DataEntrega') ?></th>
            <td><?= h($entrega->dataEntrega) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($entrega->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($entrega->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($entrega->status)); ?>
    </div>
</div>
