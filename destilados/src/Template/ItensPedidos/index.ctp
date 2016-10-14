<div class="itensPedidos index large-9 medium-8 columns content">
    <h3><?= __('Itens Pedidos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('quantidade') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('preco_idpreco') ?></th>
                <th><?= $this->Paginator->sort('pedido_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itensPedidos as $itensPedido): ?>
            <tr>
                <td><?= $this->Number->format($itensPedido->id) ?></td>
                <td><?= $this->Number->format($itensPedido->quantidade) ?></td>
                <td><?= h($itensPedido->created) ?></td>
                <td><?= h($itensPedido->modified) ?></td>
                <td><?= $this->Number->format($itensPedido->preco_idpreco) ?></td>
                <td><?= $itensPedido->has('pedido') ? $this->Html->link($itensPedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $itensPedido->pedido->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itensPedido->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itensPedido->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itensPedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itensPedido->id)]) ?>
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
