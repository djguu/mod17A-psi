<?= $this->element('sidebar/users2'); ?>
<div class="container-fluid">
    <div class="users form col-md-7 col-md-offset-2">
        <br>
        <h2 class="col-md-offset-5">Users</h2><br>
        <table class="table table-striped table-hover">
            <tr>
                <th>Nome</th>
                <th>Ação</th>
            </td>
        <?php
        //die(debug($products));
        foreach ($users as $user): ?>
            <tr>
                <td><?= $user['username']?></td>
                <td>
                    <?= $this->Html->link('Ver','/users/view/'.$user['id'])?>
                    <?= $this->Html->link('Editar','/users/edit/'.$user['id'])?>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
</div>
