<div class="nav navbar-left">
<li><h4>
    <?php
        //muda o link consoante o parametro
        if($param == 'add'){
            echo $this->Html->link(__('Add Cards'), '/cards/add');
        }
        else{
            echo $this->Html->link(__('View Cards'), '/cards');
        }
    ?>
</h4></li>
</div>
