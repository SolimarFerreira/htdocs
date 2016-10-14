<div class="box">
    <?= $this->element('header-list' , ['title' => __('Produtos')]); ?>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('quantidade') ?></th>
                <th><?= $this->Paginator->sort('user.nome', 'Nome') ?></th>
                <th><?= $this->Paginator->sort('categorias_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td><?= h($produto->nome) ?></td>
                    <td><?= h($produto->descricao) ?></td>
                    <td><?= $this->Number->format($produto->quantidade) ?></td>
                    <td><?= $produto->has('user') ? $this->Html->link($produto->user->pessoa->nome, ['controller' => 'Users', 'action' => 'view', $produto->user->pessoa->nome]) : '' ?></td>
                    <td><?= $produto->has('categoria') ? $this->Html->link($produto->categoria->nome, ['controller' => 'Categorias', 'action' => 'view', $produto->categoria->nome]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?>
                    </td>

                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->element('paginator'); ?>
</div>
