<?php
    if(isset($page)){
        if ($page == 'users'){
            echo $this->Form->create("Localizations",['url'=>'/users/home']);
        } elseif ($page == 'cards') {
            echo $this->Form->create("Localizations",['url'=>'/cards']);
        }
        echo __('Language').':';
        echo $this->Form->input("locale",['type' => 'select', 'options' => ['pt' => 'pt','en' => 'en'],'label' => false]);
        echo $this->Form->button(__('Change'));
        echo $this->Form->end();
    }
