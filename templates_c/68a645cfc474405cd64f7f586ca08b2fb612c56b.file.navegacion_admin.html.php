<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 15:50:16
         compiled from ".\templates\navegacion_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1535656e2ff04851900-89075962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a645cfc474405cd64f7f586ca08b2fb612c56b' => 
    array (
      0 => '.\\templates\\navegacion_admin.html',
      1 => 1457895015,
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
        <li class="menu"><a class="control_salida"  href="index.php?section=admin" id="index" >Inicio</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=logout" id="logout">Salir</a></li>
        <li class="title">
            <hr>
            <b>Usuario</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=admin&sub=agregar_usuario" id="agregar_alumno" >Agregar Usuario</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=admin&sub=listar_usuarios" id="listar_alumnos" >Listar Usuarios</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=admin&sub=buscar_usuario" id="buscar_alumno" >Buscar Usuario</a></li>
        <li class="title">
            <hr>
            <b>Registros</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=admin&sub=ver_registro" id="agregar_capacitador" >Ver Registros</a></li>
        <li class="title">
            <hr>
            <b>Administraci&oacute;n</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=home">Salir a sistema</a></li>
        <li class="title"><hr></li>
    </ul>
</div>
<?php }} ?>
