<div class="precos index large-9 medium-8 columns content">
    <h3><?= __('Precos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('dataInicial') ?></th>
                <th><?= $this->Paginator->sort('dataFinal') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('produto_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($precos as $preco): ?>
            <tr>
                <td><?= $this->Number->format($preco->id) ?></td>
                <td><?= $this->Number->format($preco->valor) ?></td>
                <td><?= h($preco->dataInicial) ?></td>
                <td><?= h($preco->dataFinal) ?></td>
                <td><?= h($preco->created) ?></td>
                <td><?= h($preco->modified) ?></td>
                <td><?= $preco->has('produto') ? $this->Html->link($preco->produto->id, ['controller' => 'Produtos', 'action' => 'view', $preco->produto->id]) : '' ?></td>
                <td><?= $preco->has('user') ? $this->Html->link($preco->user->id, ['controller' => 'Users', 'action' => 'view', $preco->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $preco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $preco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $preco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $preco->id)]) ?>
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
