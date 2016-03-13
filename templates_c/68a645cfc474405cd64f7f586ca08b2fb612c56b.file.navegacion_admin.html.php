<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 22:35:46
         compiled from ".\templates\navegacion_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:1535656e2ff04851900-89075962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a645cfc474405cd64f7f586ca08b2fb612c56b' => 
    array (
      0 => '.\\templates\\navegacion_admin.html',
      1 => 1457832908,
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
        <hr>
        <a class="control_salida"  href="index.php?section=admin" id="index" ><li>Inicio</li></a>
        <a class="control_salida"  href="index.php?section=logout" id="logout"><li>Salir</li></a>

        <hr>
        <p align="center"><b>Usuario</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=admin&sub=agregar_usuario" id="agregar_alumno" ><li>Agregar Usuario</li></a>
        <a class="control_salida"  href="index.php?section=admin&sub=listar_usuarios" id="listar_alumnos" ><li>Listar Usuarios</li></a>
        <a class="control_salida"  href="index.php?section=admin&sub=buscar_usuario" id="buscar_alumno" ><li>Buscar Usuario</li></a>
        <hr>
        <p align="center"><b>Registros</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=admin&sub=ver_registro" id="agregar_capacitador" ><li>Ver Registros</li></a>
        <hr>
        <p align="center"><b>Administraci&oacute;n</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=home"><li>Salir a sistema</li></a>
        <hr>
    </ul>
</div>
<?php }} ?>
