<div class="pedidosHasFormasPagamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($pedidosHasFormasPagamento) ?>
    <fieldset>
        <legend><?= __('Edit Pedidos Has Formas Pagamento') ?></legend>
        <?php
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
