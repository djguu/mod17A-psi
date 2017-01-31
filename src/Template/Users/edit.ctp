<div class="container-fluid">
<div class="users form col-md-12">
    <br>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($user) ?>
        <fieldset align="center">
            <legend align="center"><?='Editar Utilizador'?></legend>
            <div class="col-md-4 col-md-offset-4">
                <?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => 'Username', 'label' => false]) ?><br>
                <?= 'Cartas:'?><br>
                <?= $this->Form->input('cards._ids', ['label' => false, 'options' => $cards]); ?><br>
                <?= $this->Form->button('Update',['class' => 'btn btn-primary my-btn-dark btn-md']); ?>
            </div>
        </fieldset>

    <?= $this->Form->end() ?>
</div>
<?= $this->element('sidebar/users'); ?>
</div>
