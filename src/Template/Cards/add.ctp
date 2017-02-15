<div class="container-fluid">
<div class="users form col-md-12">
    <br>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create($card,['enctype'=>'multipart/form-data']) ?>
        <fieldset align="center">
            <legend align="center"><?=__('Add Card')?></legend>
            <div class="col-md-4 col-md-offset-4">
                <?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => __('Name'), 'label' => false]) ?><br>
                <?= $this->Form->input('description', ['class' => 'form-control', 'placeholder' => __('Description'),'label' => false,'style' => 'resize : none']) ?><br>
                <?= $this->Form->input('atk', ['class' => 'form-control', 'placeholder' => 'Atk', 'label' => false]) ?><br>
                <?= $this->Form->input('def', ['class' => 'form-control', 'placeholder' => 'Def', 'label' => false]) ?><br>
                <?= __('image') ?>:<br><br>
                <?= $this->Form->input('image', ['type'=>'file', 'accept' => 'image/*','label' => false]) ?> <br>
                <?= $this->Form->button(__('Add'),['class' => 'btn btn-primary my-btn-dark btn-md']); ?>
            </div>
        </fieldset>

    <?= $this->Form->end() ?>
</div>
</div>
