<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formas Pagamentos'), ['controller' => 'FormasPagamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formas Pagamento'), ['controller' => 'FormasPagamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Precos'), ['controller' => 'Precos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Preco'), ['controller' => 'Precos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Login') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pessoa Id') ?></th>
            <td><?= $this->Number->format($user->pessoa_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($user->status)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pessoas') ?></h4>
        <?php if (!empty($user->pessoas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Cpf') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('DataNascimento') ?></th>
                <th><?= __('Celular') ?></th>
                <th><?= __('Telefone') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Tipo Pessoas Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->pessoas as $pessoas): ?>
            <tr>
                <td><?= h($pessoas->id) ?></td>
                <td><?= h($pessoas->nome) ?></td>
                <td><?= h($pessoas->cpf) ?></td>
                <td><?= h($pessoas->email) ?></td>
                <td><?= h($pessoas->dataNascimento) ?></td>
                <td><?= h($pessoas->celular) ?></td>
                <td><?= h($pessoas->telefone) ?></td>
                <td><?= h($pessoas->created) ?></td>
                <td><?= h($pessoas->modified) ?></td>
                <td><?= h($pessoas->status) ?></td>
                <td><?= h($pessoas->user_id) ?></td>
                <td><?= h($pessoas->tipo_pessoas_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pessoas', 'action' => 'view', $pessoas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pessoas', 'action' => 'edit', $pessoas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pessoas', 'action' => 'delete', $pessoas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pessoas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Formas Pagamentos') ?></h4>
        <?php if (!empty($user->formas_pagamentos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->formas_pagamentos as $formasPagamentos): ?>
            <tr>
                <td><?= h($formasPagamentos->id) ?></td>
                <td><?= h($formasPagamentos->nome) ?></td>
                <td><?= h($formasPagamentos->created) ?></td>
                <td><?= h($formasPagamentos->modified) ?></td>
                <td><?= h($formasPagamentos->status) ?></td>
                <td><?= h($formasPagamentos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FormasPagamentos', 'action' => 'view', $formasPagamentos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FormasPagamentos', 'action' => 'edit', $formasPagamentos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FormasPagamentos', 'action' => 'delete', $formasPagamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasPagamentos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Pedidos') ?></h4>
        <?php if (!empty($user->pedidos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('DataPedido') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Desconto') ?></th>
                <th><?= __('ValorTotal') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Pessoa Id') ?></th>
                <th><?= __('Tipo Id') ?></th>
                <th><?= __('Situacao Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->pedidos as $pedidos): ?>
            <tr>
                <td><?= h($pedidos->id) ?></td>
                <td><?= h($pedidos->dataPedido) ?></td>
                <td><?= h($pedidos->descricao) ?></td>
                <td><?= h($pedidos->desconto) ?></td>
                <td><?= h($pedidos->valorTotal) ?></td>
                <td><?= h($pedidos->created) ?></td>
                <td><?= h($pedidos->modified) ?></td>
                <td><?= h($pedidos->status) ?></td>
                <td><?= h($pedidos->user_id) ?></td>
                <td><?= h($pedidos->pessoa_id) ?></td>
                <td><?= h($pedidos->tipo_id) ?></td>
                <td><?= h($pedidos->situacao_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pedidos', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Precos') ?></h4>
        <?php if (!empty($user->precos)): ?>
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
            <?php foreach ($user->precos as $precos): ?>
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
    <div class="related">
        <h4><?= __('Related Produtos') ?></h4>
        <?php if (!empty($user->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Quantidade') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Categorias Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome) ?></td>
                <td><?= h($produtos->descricao) ?></td>
                <td><?= h($produtos->quantidade) ?></td>
                <td><?= h($produtos->created) ?></td>
                <td><?= h($produtos->modified) ?></td>
                <td><?= h($produtos->status) ?></td>
                <td><?= h($produtos->user_id) ?></td>
                <td><?= h($produtos->categorias_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tipos') ?></h4>
        <?php if (!empty($user->tipos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->tipos as $tipos): ?>
            <tr>
                <td><?= h($tipos->id) ?></td>
                <td><?= h($tipos->nome) ?></td>
                <td><?= h($tipos->descricao) ?></td>
                <td><?= h($tipos->created) ?></td>
                <td><?= h($tipos->modified) ?></td>
                <td><?= h($tipos->status) ?></td>
                <td><?= h($tipos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tipos', 'action' => 'view', $tipos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tipos', 'action' => 'edit', $tipos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tipos', 'action' => 'delete', $tipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
