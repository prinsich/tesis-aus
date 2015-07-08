<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-29 20:15:53
         compiled from ".\templates\admin\buscar_usuario.html" */ ?>
<?php /*%%SmartyHeaderCode:72125591953aa18cc7-01278601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21222a0c8d7a4f6b0ec9a4378988f1a9f2a43e5f' => 
    array (
      0 => '.\\templates\\admin\\buscar_usuario.html',
      1 => 1435619751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72125591953aa18cc7-01278601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5591953aaa3cc4_81333360',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591953aaa3cc4_81333360')) {function content_5591953aaa3cc4_81333360($_smarty_tpl) {?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function buscar_capacitadores(){
        var nombre = document.getElementById("nombre").value;
        var apellido = document.getElementById("apellido").value;
        var dni = document.getElementById("dni").value;
        x_buscar_usuarios(apellido, nombre, dni, resultado_cb);
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
    <form name="formBAlumno" action="index.php?section=admin&sub=listar_usuarios" method="POST">
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
