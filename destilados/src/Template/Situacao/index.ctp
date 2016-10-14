<div class="situacao index large-9 medium-8 columns content">
    <h3><?= __('Situacao') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($situacao as $situacao): ?>
            <tr>
                <td><?= $this->Number->format($situacao->id) ?></td>
                <td><?= h($situacao->nome) ?></td>
                <td><?= h($situacao->created) ?></td>
                <td><?= h($situacao->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $situacao->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $situacao->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $situacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $situacao->id)]) ?>
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
