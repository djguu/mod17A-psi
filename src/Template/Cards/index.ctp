<?= $this->element('sidebar/cards',['param' => 'add']); ?>
<div class="container-fluid">
    <div class="users form col-md-12">
        <br>
        <h2><?=__('Cartas')?></h2><br>
        <table class="table table-striped table-hover">
            <tr>
                <th><?=$this->Paginator->sort('name',__('Name'))?></th>
                <th><?=$this->Paginator->sort('description',__('Description'))?></th>
                <th><?=$this->Paginator->sort('atk','Atk')?></th>
                <th><?=$this->Paginator->sort('def','Def')?></th>
                <th><?= __('Image')?></th>
                <th><?=__('Action')?></th>
            </td>
        <?php
        //die(debug($products));
        foreach ($cards as $card): ?>
            <tr>
                <td><?= $card['name']?></td>
                <td><?= $card['description']?></td>
                <td><?= $card['atk']?></td>
                <td><?= $card['def']?></td>
                <td><?= $this->Html->image($card['image'],['alt' => 'imagem','height' => 50]); ?></td>
                <td><?= $this->Html->link(__('Edit'),'/cards/edit/'.$card['id'])?>
                <?= $this->Html->link(__('Delete'),'/cards/delete/'.$card['id'])?></td>
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

<?= $this->element('language',['page' => 'cards']); ?>
