<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-06 17:51:51
         compiled from ".\templates\navegacion_admin.html" */ ?>
<?php /*%%SmartyHeaderCode:295935590c2e2c85133-30859022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68a645cfc474405cd64f7f586ca08b2fb612c56b' => 
    array (
      0 => '.\\templates\\navegacion_admin.html',
      1 => 1436215908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295935590c2e2c85133-30859022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5590c2e2d15070_23139278',
  'variables' => 
  array (
    'logueado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5590c2e2d15070_23139278')) {function content_5590c2e2d15070_23139278($_smarty_tpl) {?><div id="navegacion">
    <ul>
        <hr>
        <a href="index.php" id="index" onclick="return control_salida();"><li>Inicio</li></a>
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <a href="index.php?section=logout" id="logout"><li>Logout</li></a>
        <?php }?>
        <hr>
        <p align="center"><b>Usuario</b></p>
        <hr>
        <a href="index.php?section=admin&sub=agregar_usuario" id="agregar_alumno" onclick="return control_salida();"><li>Agregar Usuario</li></a>
        <a href="index.php?section=admin&sub=listar_usuarios" id="listar_alumnos" onclick="return control_salida();"><li>Listar Usuarios</li></a>
        <a href="index.php?section=admin&sub=buscar_usuario" id="buscar_alumno" onclick="return control_salida();"><li>Buscar Usuario</li></a>
        <hr>
        <p align="center"><b>Registros</b></p>
        <hr>		
        <a href="index.php?section=admin&sub=ver_registro" id="agregar_capacitador" onclick="return control_salida();"><li>Ver Registros</li></a>	
        <hr>
        <p align="center"><b>Administraci&oacute;n</b></p>
        <hr>	
        <a href="index.php"><li>Salir a sistema</li></a>
        <hr>
    </ul>
</div><?php }} ?>
