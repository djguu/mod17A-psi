<?php
    echo '<div class="nav navbar-left">';
    if(isset($page)){
        if ($page == 'user') {
            echo '<li><h4>';
            echo $this->Html->link('Voltar', '/users/home');
            echo '</h4></li>';
        } elseif ($page == 'carta') {
            echo '<li><h4>';
            echo $this->Html->link('Voltar', '/cards');
            echo '</h4></li>';
        }
    }
    echo '</div>';
?>
