<div class="container-fluid">
<div class="users form col-md-12">
    <br>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($user) ?>
        <fieldset align="center">
            <legend align="center"><?= __('Edit User') ?></legend>
            <div class="col-md-4 col-md-offset-4">
                <?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => __('Username'), 'label' => false]) ?><br>
                <?= __('Cards')?>:<br>
                <?= $this->Form->input('cards._ids', ['label' => false, 'options' => $cards]); ?><br>
                <?= $this->Form->button(__('Update'),['class' => 'btn btn-primary my-btn-dark btn-md']); ?>
            </div>
        </fieldset>

    <?= $this->Form->end() ?>
</div>
<?= $this->element('sidebar/voltar',['page' => 'user']); ?>
</div>
