
<?php $type = isset($type) ? $type : '';?>

<div class="box-header with-border">
    <h3 class="box-title"> <?= $title ?> </h3>

    <!--            <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>-->
<?php if($type == 'search'):?>
    <div class="box-tools">
    <div class="input-group input-group-sm" style="width: 150px;">
        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

        <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
    </div>
</div>
<?php endif;?>

<?php if($type == 'add'):?>
    <div class="box-tools">
        <div class="input-group-btn">
            <button type="button" class="btn btn-primary pull-right openModal" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
        </div>
    </div>
<?php endif;?>
</div>