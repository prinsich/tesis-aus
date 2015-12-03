<?php
include_once("classes/class.Usuarios.php");
include_once("classes/class.Log_Estados.php");
include_once("classes/class.Log.php");

extract($_POST);
$datos = $_POST;

//ID's
if ($datos["accion"] == "modificar") {
    $datos_usuario["id_usuario"] = $datos["id_usuario"];
    $smarty->assign("accion", "modificado");
} else if ($datos["accion"] == "agregar") {
    $datos_usuario["id_usuario"] = null;
    $smarty->assign("accion", "registrado");
}

//------------------------------------------------------------------------------
//Datos Login
//------------------------------------------------------------------------------
$datos_usuario["nombreusr"] = $datos["user"];
$datos_usuario["id_perfil"] = $datos["perfil"];

if($datos["accion"] == "agregar"){
    $datos_usuario["passusr"] = $datos["password"];
    $datos_usuario["new_pass"] = 1;
}

/*if($datos["new_pass"] == "SI"){
    $newpass = substr(md5(microtime()), 1, 8);
    $datos_usuario["pass"] = md5($newpass);
}*/


//------------------------------------------------------------------------------
//Datos Usuario
//------------------------------------------------------------------------------

$datos_usuario["apellido"] = $datos["apellido"];
$datos_usuario["nombre"] = $datos["nombre"];
$datos_usuario["domicilio"] = $datos["domicilio"];
$datos_usuario["telefono"] = $datos["telefono"];
$datos_usuario["email"] = $datos["email"];

if ($datos_usuario["id_usuario"] == null) {
    $usuario = new Usuarios($db);
} else {
    $usuario = new Usuarios($db, $datos_usuario["id_usuario"]);
}

$id_usuario = $usuario->guardar($datos_usuario);

//------------------------------------------------------------------------------
// Dar de alta como usuario
//------------------------------------------------------------------------------
if ($datos["accion"] == "agregar"){
    $estado = new Log_Estados($db);
    $estado->darAlta($usuario->getClassName(), $id_usuario, $datos["usrlogin"]);
}

//------------------------------------------------------------------------------
// REGISTRO EN EL LOG
//------------------------------------------------------------------------------
$log = new Log($db);
$log->crear_registro($datos["usrlogin"], $datos["accion"], $usuario->getClassName(), $id_usuario);

//------------------------------------------------------------------------------
// SET VARIABLES PARA EL HTML
//------------------------------------------------------------------------------
$smarty->assign("apellido", strtoupper($datos["apellido"]));
$smarty->assign("nombre", strtoupper($datos["nombre"]));
$smarty->assign("email", $datos["email"]);
