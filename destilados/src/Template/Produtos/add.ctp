<div class="box-body">
    <div class="box box-default">

        <?= $this->element('header-add' , ['title' => __('Adicionar Produto')]); ?>

        <div class="box-body" style="display: block;">
            <?= $this->Form->create($produto) ?>
            <?php
            echo $this->Form->input('nome', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('descricao' , ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('categorias_id', ['class' => 'form-control', 'div' => ['class' => 'form-group']],['options' => $categorias]);
            ?>
        </div>
        <div class="box-footer">
            <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-primary pull-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
