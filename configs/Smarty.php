<?php

/*==============================================================================
        CONFIGURACION SMARTY
==============================================================================*/

require 'configs/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->caching = false;

if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    //LINEA PARA CORRER EN WINDOWS
    $my_plugin_dir = dirname(__FILE__).DIRECTORY_SEPARATOR."smarty\my_plugins";
} else {
    //LINEA PARA CORRER EN LINUX
    $my_plugin_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.'smarty/my_plugins';
}

$smarty->addPluginsDir($my_plugin_dir);
