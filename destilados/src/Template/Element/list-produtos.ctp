<div class="box">

    <?php if($type != 'none'):
        echo $this->element('header-add' , ['type' =>  $type , 'title' => 'Produtos']);
    endif;?>


    <div class="box-body table-responsive no-padding">

        <table class="table table-hover table_produtos" style="display:none">

            <thead>
            <tr>
                <?php if($type == 'none'):?>
                <th> Selecione </th>
                <?php endif;?>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $type != 'none'?$this->Paginator->sort('quantidade'):$this->Paginator->sort('categoria_id'); ?></th>
                <?php if($type != 'none'):?>
                    <th> Valor </th>
                <?php endif;?>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto): ?>
                <tr>
                    <td> <input type="checkbox" value="<?=$produto->id?>" name="products[]"> </td>
                    <td><?= h($produto->nome) ?></td>
                    <td><?= h($produto->descricao) ?></td>
                    <td><?= $type != 'none'?$this->Number->format($produto->quantidade):h($produto->categoria['nome']) ?></td>

                </tr>
            <?php endforeach; ?>
            </tbody>

        </table>
    </div>

</div>