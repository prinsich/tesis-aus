<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 22:03:36
         compiled from ".\templates\navegacion_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:11835577c58e8487cd0-41549477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a645cfc474405cd64f7f586ca08b2fb612c56b' => 
    array (
      0 => '.\\templates\\navegacion_admin.html',
      1 => 1466687186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11835577c58e8487cd0-41549477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c58e84b87b2_59652972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c58e84b87b2_59652972')) {function content_577c58e84b87b2_59652972($_smarty_tpl) {?><div id="navegacion">
    <ul>
        <li class="title"><hr></li>
        <a class="control_salida"  href="index.php?section=admin" id="index" ><li class="menu">Inicio</li></a>
        <a class="control_salida"  href="index.php?section=logout" id="logout"><li class="menu">Salir</li></a>
        <li class="title">
            <hr>
            <b>Usuario</b>
        </li>
        <a class="control_salida"  href="index.php?section=admin&sub=agregar_usuario" id="agregar_alumno" ><li class="menu">Agregar Usuario</li></a>
        <a class="control_salida"  href="index.php?section=admin&sub=listar_usuarios" id="listar_alumnos" ><li class="menu">Listar Usuarios</li></a>
        <a class="control_salida"  href="index.php?section=admin&sub=buscar_usuario" id="buscar_alumno" ><li class="menu">Buscar Usuario</li></a>
        <li class="title">
            <hr>
            <b>Registros</b>
        </li>
        <a class="control_salida"  href="index.php?section=admin&sub=ver_registro" id="agregar_capacitador" ><li class="menu">Ver Registros</li></a>
        <li class="title">
            <hr>
            <b>Administraci&oacute;n</b>
        </li>
        <a class="control_salida"  href="index.php?section=home"><li class="menu">Volver al Sistema</li></a>
        <li class="title"><hr></li>
    </ul>
</div>
<?php }} ?>
