<div class="box">
    <?= $this->element('header-list' , ['title' => __('Usuários')]); ?>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('login') ?></th>
                <th width="35%"><?= $this->Paginator->sort('pessoa.nome', 'Nome') ?></th>
                <th width="38%"><?= $this->Paginator->sort('pessoa.email', 'Email') ?></th>
                <th width="10%" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->username) ?></td>
                <td><?= $user->pessoa['nome'] ?></td>
                <td><?= $user->pessoa['email'] ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        <?= $this->element('paginator'); ?>
</div>
