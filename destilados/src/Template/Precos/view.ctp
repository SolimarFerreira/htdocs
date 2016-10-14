<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Preco'), ['action' => 'edit', $preco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Preco'), ['action' => 'delete', $preco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Precos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="precos view large-9 medium-8 columns content">
    <h3><?= h($preco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Produto') ?></th>
            <td><?= $preco->has('produto') ? $this->Html->link($preco->produto->id, ['controller' => 'Produtos', 'action' => 'view', $preco->produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $preco->has('user') ? $this->Html->link($preco->user->id, ['controller' => 'Users', 'action' => 'view', $preco->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($preco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor') ?></th>
            <td><?= $this->Number->format($preco->valor) ?></td>
        </tr>
        <tr>
            <th><?= __('DataInicial') ?></th>
            <td><?= h($preco->dataInicial) ?></td>
        </tr>
        <tr>
            <th><?= __('DataFinal') ?></th>
            <td><?= h($preco->dataFinal) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($preco->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($preco->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($preco->status)); ?>
    </div>
</div>
