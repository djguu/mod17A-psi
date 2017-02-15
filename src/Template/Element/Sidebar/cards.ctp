<div class="nav navbar-left">
<li><h4>
    <?php
        //muda o link consoante o parametro
        if($param == 'add'){
            echo $this->Html->link('Adicionar Cartas', '/cards/add');
        }
        else{
            echo $this->Html->link('Ver cartas', '/cards');
        }
    ?>
</h4></li>
</div>
