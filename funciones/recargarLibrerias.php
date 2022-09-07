<?php
/**
 * Recarga los archivos de la carpeta clases
 * @param type $clase
 */
function autoloadClases($clase) {
    $prefijo_dao = substr($clase,0,3);
    if(strcmp($prefijo_dao, 'DAO') == 0){
        require_once 'clases/'.$clase.'.php';
    }
    else {
        require_once 'clases/'.lcfirst($clase).'.class.php';
    }
}

spl_autoload_register('autoloadClases');
