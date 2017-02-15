<div class="container-fluid">
<div class="users form col-md-12">
    <br>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
        <fieldset align="center">
            <legend align="center"><?=__('Login')?></legend>
            <div class="col-md-4 col-md-offset-4">
                <?= $this->Form->input('username', ['class' => 'form-control', 'placeholder' => __('Username'), 'label' => false]) ?><br>
                <?= $this->Form->input('password', ['class' => 'form-control', 'placeholder' => __('Password'), 'label' => false]) ?><br>
                <?= $this->Form->button(__('Login'),['class' => 'btn btn-primary my-btn-dark btn-md']); ?>
            </div>
        </fieldset>

    <?= $this->Form->end() ?>
</div>
</div>
