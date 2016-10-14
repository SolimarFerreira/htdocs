<div class="entregas index large-9 medium-8 columns content">
    <h3><?= __('Entregas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('troco') ?></th>
                <th><?= $this->Paginator->sort('dataEntrega') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th><?= $this->Paginator->sort('situacao_id') ?></th>
                <th><?= $this->Paginator->sort('pessoas_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entregas as $entrega): ?>
            <tr>
                <td><?= $this->Number->format($entrega->id) ?></td>
                <td><?= $this->Number->format($entrega->troco) ?></td>
                <td><?= h($entrega->dataEntrega) ?></td>
                <td><?= h($entrega->created) ?></td>
                <td><?= h($entrega->modified) ?></td>
                <td><?= $entrega->has('pedido') ? $this->Html->link($entrega->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $entrega->pedido->id]) : '' ?></td>
                <td><?= $entrega->has('situacao') ? $this->Html->link($entrega->situacao->id, ['controller' => 'Situacao', 'action' => 'view', $entrega->situacao->id]) : '' ?></td>
                <td><?= $entrega->has('pessoa') ? $this->Html->link($entrega->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $entrega->pessoa->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entrega->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entrega->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entrega->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrega->id)]) ?>
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
