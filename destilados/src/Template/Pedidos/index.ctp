<div class="pedidos index large-9 medium-8 columns content">
    <h3><?= __('Pedidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('dataPedido') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('desconto') ?></th>
                <th><?= $this->Paginator->sort('valorTotal') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_id') ?></th>
                <th><?= $this->Paginator->sort('situacao_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= h($pedido->dataPedido) ?></td>
                <td><?= h($pedido->descricao) ?></td>
                <td><?= $this->Number->format($pedido->desconto) ?></td>
                <td><?= $this->Number->format($pedido->valorTotal) ?></td>
                <td><?= h($pedido->created) ?></td>
                <td><?= h($pedido->modified) ?></td>
                <td><?= $pedido->has('user') ? $this->Html->link($pedido->user->id, ['controller' => 'Users', 'action' => 'view', $pedido->user->id]) : '' ?></td>
                <td><?= $pedido->has('pessoa') ? $this->Html->link($pedido->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $pedido->pessoa->id]) : '' ?></td>
                <td><?= $pedido->has('tipo') ? $this->Html->link($pedido->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $pedido->tipo->id]) : '' ?></td>
                <td><?= $pedido->has('situacao') ? $this->Html->link($pedido->situacao->id, ['controller' => 'Situacao', 'action' => 'view', $pedido->situacao->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
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
