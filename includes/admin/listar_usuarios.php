<?php
include_once("includes/admin/ajax.php");
include_once("classes/class.Usuarios.php");
$usuario = new Usuarios($db);

$lista_usuarios = null;

if(empty($_POST)){
    $lista_usuarios = $usuario->listar_usuarios();
} else {
    extract($_POST);
    $datos = $_POST;
    $lista_usuarios = $usuario->buscar_usuarios($datos["apellido"], $datos["nombre"], $datos["dni"], $datos["estado"]);    
}

$smarty->assign("cantidad_usuarios", count($lista_usuarios));
$smarty->assign("lista_usuarios", $lista_usuarios);
$smarty->assign("usrlogin", $usrlogin);
