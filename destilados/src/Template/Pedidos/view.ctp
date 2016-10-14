<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situacao'), ['controller' => 'Situacao', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situacao'), ['controller' => 'Situacao', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entregas'), ['controller' => 'Entregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrega'), ['controller' => 'Entregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itens Pedidos'), ['controller' => 'ItensPedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itens Pedido'), ['controller' => 'ItensPedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedidos view large-9 medium-8 columns content">
    <h3><?= h($pedido->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($pedido->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $pedido->has('user') ? $this->Html->link($pedido->user->id, ['controller' => 'Users', 'action' => 'view', $pedido->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pessoa') ?></th>
            <td><?= $pedido->has('pessoa') ? $this->Html->link($pedido->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $pedido->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= $pedido->has('tipo') ? $this->Html->link($pedido->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $pedido->tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Situacao') ?></th>
            <td><?= $pedido->has('situacao') ? $this->Html->link($pedido->situacao->id, ['controller' => 'Situacao', 'action' => 'view', $pedido->situacao->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pedido->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Desconto') ?></th>
            <td><?= $this->Number->format($pedido->desconto) ?></td>
        </tr>
        <tr>
            <th><?= __('ValorTotal') ?></th>
            <td><?= $this->Number->format($pedido->valorTotal) ?></td>
        </tr>
        <tr>
            <th><?= __('DataPedido') ?></th>
            <td><?= h($pedido->dataPedido) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($pedido->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($pedido->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($pedido->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entregas') ?></h4>
        <?php if (!empty($pedido->entregas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Troco') ?></th>
                <th><?= __('DataEntrega') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th><?= __('Situacao Id') ?></th>
                <th><?= __('Pessoas Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->entregas as $entregas): ?>
            <tr>
                <td><?= h($entregas->id) ?></td>
                <td><?= h($entregas->troco) ?></td>
                <td><?= h($entregas->dataEntrega) ?></td>
                <td><?= h($entregas->created) ?></td>
                <td><?= h($entregas->modified) ?></td>
                <td><?= h($entregas->status) ?></td>
                <td><?= h($entregas->pedido_id) ?></td>
                <td><?= h($entregas->situacao_id) ?></td>
                <td><?= h($entregas->pessoas_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entregas', 'action' => 'view', $entregas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entregas', 'action' => 'edit', $entregas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entregas', 'action' => 'delete', $entregas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entregas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Itens Pedidos') ?></h4>
        <?php if (!empty($pedido->itens_pedidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Quantidade') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Preco Idpreco') ?></th>
                <th><?= __('Pedido Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pedido->itens_pedidos as $itensPedidos): ?>
            <tr>
                <td><?= h($itensPedidos->id) ?></td>
                <td><?= h($itensPedidos->quantidade) ?></td>
                <td><?= h($itensPedidos->created) ?></td>
                <td><?= h($itensPedidos->modified) ?></td>
                <td><?= h($itensPedidos->status) ?></td>
                <td><?= h($itensPedidos->preco_idpreco) ?></td>
                <td><?= h($itensPedidos->pedido_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ItensPedidos', 'action' => 'view', $itensPedidos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ItensPedidos', 'action' => 'edit', $itensPedidos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ItensPedidos', 'action' => 'delete', $itensPedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itensPedidos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
