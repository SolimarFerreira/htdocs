<div class="categorias index large-9 medium-8 columns content">
    <h3><?= __('Categorias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= $this->Number->format($categoria->id) ?></td>
                <td><?= h($categoria->nome) ?></td>
                <td><?= h($categoria->descricao) ?></td>
                <td><?= h($categoria->created) ?></td>
                <td><?= h($categoria->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categoria->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categoria->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?>
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
