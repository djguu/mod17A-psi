<?= $this->element('sidebar/cards'); ?>
<div class="container-fluid">
    <div class="users form col-md-12">
        <br>
        <h2>Cartas</h2><br>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nome</th>
                <th>Descricao</th>
                <th>Atk</th>
                <th>Def</th>
                <th></th>
                <th></th>
            </td>
        <?php
        //die(debug($products));
        foreach ($cards as $card): ?>
            <tr>
                <td><?= $card['name']?></td>
                <td><?= $card['description']?></td>
                <td><?= $card['atk']?></td>
                <td><?= $card['def']?></td>
                <td><?= $this->Html->link('Editar','/cards/edit/'.$card['id'])?></td>
                <td><?= $this->Html->link('Eliminar','/cards/delete/'.$card['id'])?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>
