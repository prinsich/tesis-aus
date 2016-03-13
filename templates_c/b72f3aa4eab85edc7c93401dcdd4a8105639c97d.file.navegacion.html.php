<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-12 22:35:42
         compiled from ".\templates\navegacion.html" */ ?>
<?php /*%%SmartyHeaderCode:305356684f9b0de459-08687495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72f3aa4eab85edc7c93401dcdd4a8105639c97d' => 
    array (
      0 => '.\\templates\\navegacion.html',
      1 => 1457832936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '305356684f9b0de459-08687495',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56684f9b1abb71_42026561',
  'variables' => 
  array (
    'usrperfil' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56684f9b1abb71_42026561')) {function content_56684f9b1abb71_42026561($_smarty_tpl) {?><div id="log"></div>
<div id="navegacion">
    <ul>
        <hr>
        <a class="control_salida"  href="index.php?section=home" id="index" ><li>Inicio</li></a>
        <a class="control_salida"  href="index.php?section=perfil&sub=ver" id="ver_perfil" ><li>Ver mi perfil</li></a>
        <a class="control_salida"  href="index.php?section=logout" id="logout"><li>Salir</li></a>

        <hr>
        <p align="center"><b>Alumnos</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=alumnos&sub=agregar_alumno" id="agregar_alumno" ><li>Agregar Alumno</li></a>
        <a class="control_salida"  href="index.php?section=alumnos&sub=listar_alumnos" id="listar_alumnos" ><li>Listar Alumnos</li></a>
        <a class="control_salida"  href="index.php?section=alumnos&sub=buscar_alumno" id="buscar_alumno" ><li>Buscar Alumno</li></a>
        <hr>
        <p align="center"><b>Capacitadores</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=agregar_capacitador" id="agregar_capacitador" ><li>Agregar Capacitador</li></a>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=listar_capacitadores" id="listar_capacitadores" ><li>Listar Capacitadores</li></a>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=buscar_capacitadores" id="buscar_capacitadores" ><li>Buscar Capacitador</li></a>
        <hr>
        <p align="center"><b>Talleres</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=talleres&sub=agregar_taller" id="agregar_taller" ><li>Agregar Taller</li></a>
        <!--a href="index.php?section=talleres&sub=resetear_taller" ><li>Resetear Talleres</li></a-->
        <a class="control_salida"  href="index.php?section=talleres&sub=listar_talleres" id="listar_talleres" ><li>Listar Talleres</li></a>
        <a class="control_salida"  href="index.php?section=talleres&sub=buscar_talleres" id="buscar_talleres" ><li>Buscar Taller</li></a>
        <hr>
        <p align="center"><b>Certificados</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=certificados&sub=crear_certificados" id="crear_certificados" ><li>Crear Certificados</li></a>
        <hr>
        <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="ADMIN") {?>
        <p align="center"><b>Administraci&oacute;n</b></p>
        <hr>
        <a class="control_salida"  href="index.php?section=admin&sub=admin"><li>Acceder al modo administrador</li></a>
        <hr>
        <?php }?>
    </ul>
</div>
<?php }} ?>
