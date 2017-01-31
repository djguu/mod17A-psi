<div class="container-fluid">
    <div class="users form col-md-7 col-md-offset-2">
        <br>
        <h2>User</h2><br><br>
        <table class="vertical-table">
            <tr>
                <th>User: <?= h($user->username) ?></th>
            </tr>
        </table>
        <br>
        <td><?= $this->Html->link('Editar user', '/users/edit/'.$id);?></td>
        <br><br>
        <?php if (!empty($user->cards)): ?>
            <h2 class="col-md-offset-5">Cartas</h2><br>
            <table class="table table-striped table-hover">
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Atk</th>
                    <th>Def</th>
                </td>
            <?php
            //die(debug($products));
            foreach ($user->cards as $cards): ?>
                <tr>
                    <td><?= h($cards->name) ?></td>
                    <td><?= h($cards->description) ?></td>
                    <td><?= h($cards->atk) ?></td>
                    <td><?= h($cards->def) ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
<?= $this->element('sidebar/users'); ?>
