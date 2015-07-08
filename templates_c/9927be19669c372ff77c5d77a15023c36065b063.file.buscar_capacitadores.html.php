<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 19:41:47
         compiled from ".\templates\capacitadores\buscar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:2531854f795d80886e7-10926768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9927be19669c372ff77c5d77a15023c36065b063' => 
    array (
      0 => '.\\templates\\capacitadores\\buscar_capacitadores.html',
      1 => 1426531304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2531854f795d80886e7-10926768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f795d8101048_82393240',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f795d8101048_82393240')) {function content_54f795d8101048_82393240($_smarty_tpl) {?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function buscar_capacitadores(){
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var dni = document.getElementById("dni").value;
        x_buscar_capacitadores(apellido, nombre, dni, resultado_cb);
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

<h1>Buscar Capacitadores</h1>
<p>
    <form name="formBAlumno" action="index.php?section=capacitadores&sub=listar_capacitadores" method="POST">
        <label for="apellido">Apellido:</label>
        <input type="text" value="" name="apellido" class="letras" id="apellido"/>
        <br />
        
        <label for="nombre">Nombres:</label> 
        <input type="text" value="" name="nombre" class="letras" id="nombre"/>
        <br />
    
        <label for="dni">DNI:</label>
        <input type="text" value="" name="dni" class="numeros" maxlength="8" id="dni"/>
        <br />
    
        <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_capacitadores()">
    </form>
</p><?php }} ?>
