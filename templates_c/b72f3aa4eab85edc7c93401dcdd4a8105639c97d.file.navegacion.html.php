<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-03-13 15:42:57
         compiled from ".\templates\navegacion.html" */ ?>
<?php /*%%SmartyHeaderCode:305356684f9b0de459-08687495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72f3aa4eab85edc7c93401dcdd4a8105639c97d' => 
    array (
      0 => '.\\templates\\navegacion.html',
      1 => 1457894575,
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
        <li class="title"><hr></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=home" id="index" >Inicio</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=perfil&sub=ver" id="ver_perfil" >Ver mi perfil</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=logout" id="logout">Salir</a></li>
        <li class="title">
            <hr>
            <b>Alumnos</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=alumnos&sub=agregar_alumno" id="agregar_alumno" >Agregar Alumno</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=alumnos&sub=listar_alumnos" id="listar_alumnos" >Listar Alumnos</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=alumnos&sub=buscar_alumno" id="buscar_alumno" >Buscar Alumno</a></li>
        <li class="title">
            <hr>
            <b>Capacitadores</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=capacitadores&sub=agregar_capacitador" id="agregar_capacitador" >Agregar Capacitador</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=capacitadores&sub=listar_capacitadores" id="listar_capacitadores" >Listar Capacitadores</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=capacitadores&sub=buscar_capacitadores" id="buscar_capacitadores" >Buscar Capacitador</a></li>
        <li class="title">
            <hr>
            <b>Talleres</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=talleres&sub=agregar_taller" id="agregar_taller" >Agregar Taller</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=talleres&sub=listar_talleres" id="listar_talleres" >Listar Talleres</a></li>
        <li class="menu"><a class="control_salida"  href="index.php?section=talleres&sub=buscar_talleres" id="buscar_talleres" >Buscar Taller</a></li>
        <li class="title">
            <hr>
            <b>Certificados</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=certificados&sub=crear_certificados" id="crear_certificados" >Crear Certificados</a></li>
        <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="ADMIN") {?>
        <li class="title">
            <hr>
            <b>Administraci&oacute;n</b>
        </li>
        <li class="menu"><a class="control_salida"  href="index.php?section=admin&sub=admin">Acceder al modo administrador</a></li>
        <?php }?>
        <li class="title"><hr></li>
    </ul>
</div>
<?php }} ?>
