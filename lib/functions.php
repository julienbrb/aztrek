<?php

/**
 * 
 * Debugger une variable
 * @param mixed $var La variable à afficher
 * @param bool $die Arrêter l'execution
 */
function debug($var, bool $die = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function getHeader(string $title){
    require_once 'layout/header.php';
}
function getFooter(){
    require_once 'layout/footer.php';
}
function getMenu(){ 
    require_once 'layout/menu.php';
}