<div class="box-body">
    <div class="box box-default">

        <?= $this->element('header-add' , ['title' => __('Adicionar Categoria')]); ?>

        <div class="box-body" style="display: block;">
    <?= $this->Form->create($categoria) ?>
        <?php
            echo $this->Form->input('nome', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('descricao', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
        ?>
        </div>
        <?= $this->element('footer-save' , ['text' => __('Salvar')]); ?>
    </div>
</div>