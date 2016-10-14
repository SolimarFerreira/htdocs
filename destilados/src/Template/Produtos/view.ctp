<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Precos'), ['controller' => 'Precos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preco'), ['controller' => 'Precos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-9 medium-8 columns content">
    <h3><?= h($produto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($produto->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($produto->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $produto->has('user') ? $this->Html->link($produto->user->id, ['controller' => 'Users', 'action' => 'view', $produto->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= $produto->has('categoria') ? $this->Html->link($produto->categoria->id, ['controller' => 'Categorias', 'action' => 'view', $produto->categoria->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade') ?></th>
            <td><?= $this->Number->format($produto->quantidade) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($produto->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($produto->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($produto->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Precos') ?></h4>
        <?php if (!empty($produto->precos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Valor') ?></th>
                <th><?= __('DataInicial') ?></th>
                <th><?= __('DataFinal') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('Produto Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($produto->precos as $precos): ?>
            <tr>
                <td><?= h($precos->id) ?></td>
                <td><?= h($precos->valor) ?></td>
                <td><?= h($precos->dataInicial) ?></td>
                <td><?= h($precos->dataFinal) ?></td>
                <td><?= h($precos->created) ?></td>
                <td><?= h($precos->modified) ?></td>
                <td><?= h($precos->status) ?></td>
                <td><?= h($precos->produto_id) ?></td>
                <td><?= h($precos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Precos', 'action' => 'view', $precos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Precos', 'action' => 'edit', $precos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Precos', 'action' => 'delete', $precos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $precos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
