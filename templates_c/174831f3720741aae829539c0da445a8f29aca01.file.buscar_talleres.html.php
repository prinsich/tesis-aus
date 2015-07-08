<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-15 02:03:15
         compiled from ".\templates\talleres\buscar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:683054f914a655f2b3-59340065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174831f3720741aae829539c0da445a8f29aca01' => 
    array (
      0 => '.\\templates\\talleres\\buscar_talleres.html',
      1 => 1426381388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '683054f914a655f2b3-59340065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f914a6582c25_80759665',
  'variables' => 
  array (
    'Sajax' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f914a6582c25_80759665')) {function content_54f914a6582c25_80759665($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    
    function buscar_talleres(){
        var nombre = document.getElementById("nombre").value;
        var id_capacitador = document.getElementById("id_capacitador").value;
        x_buscar_talleres(nombre, id_capacitador, resultado_cb);
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
    <form name="formBTaller" action="index.php?section=talleres&sub=listar_talleres" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" value="" name="nombre" id="nombre"/>
        </br>
	
        <label for="capacitador">Capacitador:</label> 
	<?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador"),$_smarty_tpl);?>

        </br>
	
        <input class="btnSubmit" type="button" name="buscar" value="Buscar" onclick="buscar_talleres()">
    </form><?php }} ?>
