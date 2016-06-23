<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 10:07:48
         compiled from ".\templates\navegacion_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1535656e2ff04851900-89075962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '1535656e2ff04851900-89075962',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56e2ff04861711_59714207',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e2ff04861711_59714207')) {function content_56e2ff04861711_59714207($_smarty_tpl) {?><div id="navegacion">
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
