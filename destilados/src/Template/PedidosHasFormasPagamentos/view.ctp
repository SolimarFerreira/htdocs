<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedidos Has Formas Pagamento'), ['action' => 'edit', $pedidosHasFormasPagamento->pedidos_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedidos Has Formas Pagamento'), ['action' => 'delete', $pedidosHasFormasPagamento->pedidos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosHasFormasPagamento->pedidos_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos Has Formas Pagamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedidos Has Formas Pagamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formas Pagamentos'), ['controller' => 'FormasPagamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formas Pagamento'), ['controller' => 'FormasPagamentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidosHasFormasPagamentos view large-9 medium-8 columns content">
    <h3><?= h($pedidosHasFormasPagamento->pedidos_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pedido') ?></th>
            <td><?= $pedidosHasFormasPagamento->has('pedido') ? $this->Html->link($pedidosHasFormasPagamento->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosHasFormasPagamento->pedido->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Formas Pagamento') ?></th>
            <td><?= $pedidosHasFormasPagamento->has('formas_pagamento') ? $this->Html->link($pedidosHasFormasPagamento->formas_pagamento->id, ['controller' => 'FormasPagamentos', 'action' => 'view', $pedidosHasFormasPagamento->formas_pagamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($pedidosHasFormasPagamento->valor) ?></td>
        </tr>
    </table>
</div>
