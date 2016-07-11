<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-05 21:41:47
         compiled from ".\templates\navegacion.html" */ ?>
<?php /*%%SmartyHeaderCode:25546577c53cb6cdf10-43161347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b72f3aa4eab85edc7c93401dcdd4a8105639c97d' => 
    array (
      0 => '.\\templates\\navegacion.html',
      1 => 1466555144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25546577c53cb6cdf10-43161347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usrperfil' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577c53cb721c52_52572670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577c53cb721c52_52572670')) {function content_577c53cb721c52_52572670($_smarty_tpl) {?><div id="log"></div>
<div id="navegacion">
    <ul>
        <li class="title"><hr></li>
        <a class="control_salida"  href="index.php?section=home" id="index" ><li class="menu">Inicio</li></a>
        <a class="control_salida"  href="index.php?section=perfil&sub=ver" id="ver_perfil"><li class="menu">Ver mi perfil</li></a>
        <a class="control_salida"  href="index.php?section=logout" id="logout"><li class="menu">Salir</li></a>
        <li class="title">
            <hr>
            <b>Alumnos</b>
        </li>
        <a class="control_salida"  href="index.php?section=alumnos&sub=agregar_alumno" id="agregar_alumno" ><li class="menu">Agregar Alumno</li></a>
        <a class="control_salida"  href="index.php?section=alumnos&sub=listar_alumnos" id="listar_alumnos" ><li class="menu">Listar Alumnos</li></a>
        <a class="control_salida"  href="index.php?section=alumnos&sub=buscar_alumno" id="buscar_alumno" ><li class="menu">Buscar Alumno</li></a>
        <li class="title">
            <hr>
            <b>Capacitadores</b>
        </li>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=agregar_capacitador" id="agregar_capacitador" ><li class="menu">Agregar Capacitador</li></a>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=listar_capacitadores" id="listar_capacitadores" ><li class="menu">Listar Capacitadores</li></a>
        <a class="control_salida"  href="index.php?section=capacitadores&sub=buscar_capacitadores" id="buscar_capacitadores" ><li class="menu">Buscar Capacitador</li></a>
        <li class="title">
            <hr>
            <b>Talleres</b>
        </li>
        <a class="control_salida"  href="index.php?section=talleres&sub=agregar_taller" id="agregar_taller" ><li class="menu">Agregar Taller</li></a>
        <a class="control_salida"  href="index.php?section=talleres&sub=listar_talleres" id="listar_talleres" ><li class="menu">Listar Talleres</li></a>
        <a class="control_salida"  href="index.php?section=talleres&sub=buscar_talleres" id="buscar_talleres" ><li class="menu">Buscar Taller</li></a>
        <li class="title">
            <hr>
            <b>Certificados</b>
        </li>
        <a class="control_salida"  href="index.php?section=certificados&sub=crear_certificados" id="crear_certificados" ><li class="menu">Crear Certificados</li></a>
        <?php if ($_smarty_tpl->tpl_vars['usrperfil']->value=="ADMIN") {?>
        <li class="title">
            <hr>
            <b>Administraci&oacute;n</b>
        </li>
        <a class="control_salida"  href="index.php?section=admin&sub=admin"><li class="menu">Acceder al modo administrador</li></a>
        <?php }?>
        <li class="title"><hr></li>
    </ul>
</div>
<?php }} ?>
