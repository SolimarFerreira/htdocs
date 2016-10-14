<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Pessoa'), ['action' => 'edit', $tipoPessoa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Pessoa'), ['action' => 'delete', $tipoPessoa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoPessoa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Pessoas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Pessoa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoPessoas view large-9 medium-8 columns content">
    <h3><?= h($tipoPessoa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($tipoPessoa->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoPessoa->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tipoPessoa->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tipoPessoa->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($tipoPessoa->status)); ?>
    </div>
</div>
