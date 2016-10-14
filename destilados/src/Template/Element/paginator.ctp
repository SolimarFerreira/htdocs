<div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
        <?= $this->Paginator->prev('<< ') ?>
        <?= $this->Paginator->numbers(['first' => 1, 'last' => 3]) ?>
        <?= $this->Paginator->next(' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>