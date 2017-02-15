

<?= $this->element('sidebar/cards',['param' => 'view']); ?>
<div class="container-fluid">
    <div class="users form col-md-7 col-md-offset-2">
        <br>
        <h2 class="col-md-offset-5"><?=__('Users')?></h2><br>
        <table class="table table-striped table-hover">
            <tr>
                <th><?=$this->Paginator->sort('username',__('Name'))?></th>
                <th><?= __('Action')?></th>
            </td>
        <?php
        //die(debug($products));
        foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username']?></td>
                <td>
                    <?= $this->Html->link(__('View'),'/users/view/'.$user['id'])?>
                    <?= $this->Html->link(__('Edit'),'/users/edit/'.$user['id'])?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>

</div>

<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<<') ?>
        <?= $this->Paginator->prev('<') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('>') ?>
        <?= $this->Paginator->last('>>') ?>
    </ul>
</div>

<?= $this->element('language',['page' => 'users']); ?>
