<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Situacao'), ['action' => 'edit', $situacao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Situacao'), ['action' => 'delete', $situacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $situacao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Situacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situacao'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entregas'), ['controller' => 'Entregas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrega'), ['controller' => 'Entregas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="situacao view large-9 medium-8 columns content">
    <h3><?= h($situacao->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($situacao->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($situacao->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($situacao->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($situacao->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($situacao->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entregas') ?></h4>
        <?php if (!empty($situacao->entregas)): ?>
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
            <?php foreach ($situacao->entregas as $entregas): ?>
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
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($situacao->pedidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('DataPedido') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Desconto') ?></th>
                <th><?= __('ValorTotal') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Pessoa Id') ?></th>
                <th><?= __('Tipo Id') ?></th>
                <th><?= __('Situacao Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($situacao->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->dataPedido) ?></td>
                <td><?= h($pedidos->descricao) ?></td>
                <td><?= h($pedidos->desconto) ?></td>
                <td><?= h($pedidos->valorTotal) ?></td>
                <td><?= h($pedidos->created) ?></td>
                <td><?= h($pedidos->modified) ?></td>
                <td><?= h($pedidos->status) ?></td>
                <td><?= h($pedidos->user_id) ?></td>
                <td><?= h($pedidos->pessoa_id) ?></td>
                <td><?= h($pedidos->tipo_id) ?></td>
                <td><?= h($pedidos->situacao_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
