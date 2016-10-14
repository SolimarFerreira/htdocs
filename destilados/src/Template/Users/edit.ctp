<div class="box-body">
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Editar usuário</h3>

            <!--            <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>-->
        </div>

        <div class="box-body" style="display: block;">
            <?= $this->Form->create($user) ?>
            <?php
            echo $this->Form->input('username', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('password', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            echo $this->Form->input('pessoa.nome', ['class' => 'form-control', 'div' => ['class' => 'form-group']]);
            ?>

        </div>
        <div class="box-footer">
            <?= $this->Form->button(__('Confirmar'), ['class' => 'btn btn-primary pull-right']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>