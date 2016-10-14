
<div class="box-body">
    <div class="box box-default">

        <?= $this->element('header-add' , ['title' => __('Realizar Compra')]); ?>

        <div class="box-body" style="display: block;">
            <?= $this->Form->create($pedido) ?>
            <?php
            $listagem = $this->element('list-produtos', ['type' => $HEADERS['NONE'] , 'produtos' => $produtos]);
            echo $this->element('modal' , ['listagem' => $listagem]);
            echo $this->Form->label('Data da Compra:');
            echo $this->Form->input('dataPedido', ['class' => 'form-control pull-right datas', 'type'=> 'text', 'label' => false, 'templates' => 'template-datepicker']);
            echo $this->Form->input('pessoa_id',['class' => 'form-control','label' => ['text'=> 'Fornecedor'], 'div' => ['class' => 'form-group']],['options' => $pessoas]);
            echo $this->Form->input('descricao',['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->element('list-produtos', ['type' => $HEADERS['ADD'] , 'produtos' => $produtosSelecionados]);
            echo $this->Form->input('desconto', ['class' => 'form-control currency', 'type'=> 'text' ,'div' => ['class' => 'form-group']]);
            echo $this->Form->input('valorTotal', ['class' => 'form-control currency', 'type'=> 'text' , 'div' => ['class' => 'form-group']]);
            //            echo $this->Form->input('dataPedido', ['class' => 'form-control pull-right datas', 'type'=> 'text' , 'div' => ['class' => 'form-group']]);
            ?>



        </div>
        <div class="box-footer">
            <?= $this->Form->button(__('Cadastrar'), ['type' => 'button', 'id' => 'salvarteste', 'class' => 'btn btn-primary pull-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>



