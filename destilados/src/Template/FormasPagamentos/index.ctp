<div class="formasPagamentos index large-9 medium-8 columns content">
    <h3><?= __('Formas Pagamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formasPagamentos as $formasPagamento): ?>
            <tr>
                <td><?= $this->Number->format($formasPagamento->id) ?></td>
                <td><?= h($formasPagamento->nome) ?></td>
                <td><?= h($formasPagamento->created) ?></td>
                <td><?= h($formasPagamento->modified) ?></td>
                <td><?= $formasPagamento->has('user') ? $this->Html->link($formasPagamento->user->id, ['controller' => 'Users', 'action' => 'view', $formasPagamento->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $formasPagamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formasPagamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formasPagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamento->id)]) ?>
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
