<?php
/* ===========================================================================*
 *   CONFIGURACION SMARTY                                                     *
 * ===========================================================================*/
include_once("smarty/Smarty.class.php");
$smarty = new Smarty();
$smarty->compile_check = true;
$smarty->debugging = false;
$smarty->caching = false;

/* ===========================================================================*
 *   CARGA CONEXION BD                                                        *
 * ===========================================================================*/
include_once ("ConexionBD.php");
$config = new ConexionBD();
$db = $config->conectar();
