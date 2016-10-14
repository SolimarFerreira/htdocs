<div class="precos form large-9 medium-8 columns content">
    <?= $this->Form->create($preco) ?>
    <fieldset>
        <legend><?= __('Add Preco') ?></legend>
        <?php
            echo $this->Form->input('valor');
            echo $this->Form->input('dataInicial', ['empty' => true]);
            echo $this->Form->input('dataFinal', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('produto_id', ['options' => $produtos]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
