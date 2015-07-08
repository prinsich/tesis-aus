<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-03 19:10:15
         compiled from ".\templates\navegacion.html" */ ?>
<?php /*%%SmartyHeaderCode:14453558f73f57b77d9-24429372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72f3aa4eab85edc7c93401dcdd4a8105639c97d' => 
    array (
      0 => '.\\templates\\navegacion.html',
      1 => 1435961347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14453558f73f57b77d9-24429372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_558f73f57ff906_37979969',
  'variables' => 
  array (
    'logueado' => 0,
    'usrperfil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558f73f57ff906_37979969')) {function content_558f73f57ff906_37979969($_smarty_tpl) {?><div id="navegacion">
    <ul>
        <hr>
        <a href="index.php" id="index" onclick="return control_salida();"><li>Inicio</li></a>
        <?php if ($_smarty_tpl->tpl_vars['logueado']->value) {?>
        <a href="index.php?section=logout" id="logout"><li>Logout</li></a>
        <?php }?>
        <hr>
        <p align="center"><b>Alumnos</b></p>
        <hr>
        <a href="index.php?section=alumnos&sub=agregar_alumno" id="agregar_alumno" onclick="return control_salida();"><li>Agregar Alumno</li></a>
        <a href="index.php?section=alumnos&sub=listar_alumnos" id="listar_alumnos" onclick="return control_salida();"><li>Listar Alumnos</li></a>
        <a href="index.php?section=alumnos&sub=buscar_alumno" id="buscar_alumno" onclick="return control_salida();"><li>Buscar Alumno</li></a>
        <hr>
        <p align="center"><b>Capacitadores</b></p>
        <hr>		
        <a href="index.php?section=capacitadores&sub=agregar_capacitador" id="agregar_capacitador" onclick="return control_salida();"><li>Agregar Capacitador</li></a>
        <a href="index.php?section=capacitadores&sub=listar_capacitadores" id="listar_capacitadores" onclick="return control_salida();"><li>Listar Capacitadores</li></a>
        <a href="index.php?section=capacitadores&sub=buscar_capacitadores" id="buscar_capacitadores" onclick="return control_salida();"><li>Buscar Capacitador</li></a>		
        <hr>
        <p align="center"><b>Talleres</b></p>
        <hr>	
        <a href="index.php?section=talleres&sub=agregar_taller" id="agregar_taller" onclick="return control_salida();"><li>Agregar Taller</li></a>
        <!--a href="index.php?section=talleres&sub=resetear_taller" onclick="return control_salida();"><li>Resetear Talleres</li></a-->
        <a href="index.php?section=talleres&sub=listar_talleres" id="listar_talleres" onclick="return control_salida();"><li>Listar Talleres</li></a> 
        <a href="index.php?section=talleres&sub=buscar_talleres" id="buscar_talleres" onclick="return control_salida();"><li>Buscar Taller</li></a>		
        <hr>
        <p align="center"><b>Certificados</b></p>
        <hr>	
        <a href="index.php?section=certificados&sub=crear_certificados" id="crear_certificados" onclick="return control_salida();"><li>Crear Certificados</li></a>
        <hr>
        <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="admin") {?>
        <p align="center"><b>Administraci&oacute;n</b></p>
        <hr>	
        <a href="index.php?section=admin&sub=admin"><li>Acceder a sistema</li></a>
        <hr>
        <?php }?>
    </ul>
</div><?php }} ?>
