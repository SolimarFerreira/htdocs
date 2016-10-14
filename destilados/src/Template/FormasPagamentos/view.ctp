<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Formas Pagamento'), ['action' => 'edit', $formasPagamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Formas Pagamento'), ['action' => 'delete', $formasPagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Formas Pagamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formas Pagamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formasPagamentos view large-9 medium-8 columns content">
    <h3><?= h($formasPagamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($formasPagamento->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $formasPagamento->has('user') ? $this->Html->link($formasPagamento->user->id, ['controller' => 'Users', 'action' => 'view', $formasPagamento->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($formasPagamento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($formasPagamento->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($formasPagamento->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($formasPagamento->status)); ?>
    </div>
</div>
