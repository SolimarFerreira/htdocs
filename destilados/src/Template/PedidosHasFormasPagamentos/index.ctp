<div class="pedidosHasFormasPagamentos index large-9 medium-8 columns content">
    <h3><?= __('Pedidos Has Formas Pagamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pedidos_id') ?></th>
                <th><?= $this->Paginator->sort('formas_pagamentos_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidosHasFormasPagamentos as $pedidosHasFormasPagamento): ?>
            <tr>
                <td><?= $pedidosHasFormasPagamento->has('pedido') ? $this->Html->link($pedidosHasFormasPagamento->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $pedidosHasFormasPagamento->pedido->id]) : '' ?></td>
                <td><?= $pedidosHasFormasPagamento->has('formas_pagamento') ? $this->Html->link($pedidosHasFormasPagamento->formas_pagamento->id, ['controller' => 'FormasPagamentos', 'action' => 'view', $pedidosHasFormasPagamento->formas_pagamento->id]) : '' ?></td>
                <td><?= $this->Number->format($pedidosHasFormasPagamento->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedidosHasFormasPagamento->pedidos_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedidosHasFormasPagamento->pedidos_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedidosHasFormasPagamento->pedidos_id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidosHasFormasPagamento->pedidos_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
