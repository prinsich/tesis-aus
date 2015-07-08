<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-04 20:46:44
         compiled from ".\templates\talleres\buscar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:19668559347543389e7-81186551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a8d77434edd670aa91baea9dee4df899ecdc28' => 
    array (
      0 => '.\\templates\\talleres\\buscar_talleres.html',
      1 => 1436053044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19668559347543389e7-81186551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5593475449a596_86859738',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5593475449a596_86859738')) {function content_5593475449a596_86859738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\my_plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function buscar_talleres(){
        var nombre = document.getElementById("nombre").value;
        var id_capacitador = document.getElementById("id_capacitador").value;
        var estado = document.getElementById("estado").value;
        x_buscar_talleres(nombre, id_capacitador, estado, resultado_cb);
    }
    
    function resultado_cb(z){
        if(z === 0){
            alert("No existe coincidencia con los datos ingresados\nPruebe nuevamente");
        } else {
            document.forms[0].submit();
        }
    }
    
<?php echo '</script'; ?>
>


<h1>Buscar Taller</h1>
<form autocomplete="off" name="formBTaller" action="index.php?section=talleres&sub=listar_talleres" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" value="" name="nombre" id="nombre"/>
    </br>

    <label for="capacitador">Capacitador:</label> 
    <?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador"),$_smarty_tpl);?>

    </br>

    <label for="dni">Estado:</label>
    <select id="estado" name="estado">
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
    </select>
    <br />

    <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_talleres()">
</form><?php }} ?>
