<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-29 20:47:50
         compiled from ".\templates\capacitadores\modificar_capacitador.html" */ ?>
<?php /*%%SmartyHeaderCode:31705591d926517126-99844856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e7bdeda1674d3baf439d312f57cf9fdb64f63f' => 
    array (
      0 => '.\\templates\\capacitadores\\modificar_capacitador.html',
      1 => 1426447648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31705591d926517126-99844856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos_capacitador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5591d92669a566_72620366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5591d92669a566_72620366')) {function content_5591d92669a566_72620366($_smarty_tpl) {?><?php echo '<script'; ?>
>
    
    function validar() {
        
        var valido = true;
        var error = "Por favor complete los siguiente campos: \n";

        var apellido = document.getElementById("apellido").value;
        if (apellido.trim() === "") {
            valido = false;
            error += " - Apellido\n";
        }

        var nombre = document.getElementById("nombre").value;
        if (nombre.trim() === "") {
            valido = false;
            error += " - Nombre\n";
        }

        var telefono = document.getElementById("telefono").value;
        var celular = document.getElementById("celular").value;
        if (telefono.trim() === "" && celular.trim() === "") {
            valido = false;
            error += " - Telefono y/o celular\n";
        }

        var dni = document.getElementById("dni").value;
        if (dni.trim() === "") {
            valido = false;
            error += " - D.N.I.\n";
        }

        if(!valido){
            alert(error);
        }
        
        return valido;
    }
         
    function guardar(){
        if(validar()){
            document.forms[0].submit();
        }
    }
    
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="javascript/date/datetimepicker_css.js"><?php echo '</script'; ?>
>

<h1>Agregar Capacitador</h1>
<h2>Datos Personales</h2>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form name="formCapacitador" action="index.php?section=capacitadores&sub=guardar_capacitador" method="POST">
    <input type="hidden" id="accion" name="accion" value="modificar" />
    <input type="hidden" id="id_capacitador" name="id_capacitador" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['id_capacitador'];?>
" />
    <label for="apellido">Apellido(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['apellido'];?>
" id="apellido" name="apellido" class="letras"/>
    <br />

    <label for="nombre">Nombres(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['nombre'];?>
" id="nombre" name="nombre" class="letras"/>
    <br />

    <label for="dni">DNI(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['dni'];?>
" id="dni" name="dni" class="numeros" maxlength="8"/>
    <br />
    
    <label for="sexo">Sexo:</label> 
    <select name="sexo" id="sexo" style="width: 300px;"> 
        <?php if ($_smarty_tpl->tpl_vars['datos_capacitador']->value['sexo']=="MASCULINO") {?>
            <option value="MASCULINO" selected="selected" >MASCULINO</option>
            <option value="FEMENINO">FEMENINO</option>
        <?php } else { ?>
            <option value="MASCULINO">MASCULINO</option>
            <option value="FEMENINO" selected="selected">FEMENINO</option>
        <?php }?>
    </select>
    <br />

    <label for="domicilio">Domicilio:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['domicilio'];?>
" id="domicilio" name="domicilio" />
    <br />

    <label for="telefono">Tel&eacute;fono(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['telefono'];?>
" id="telefono" name="telefono" class="numeros"/>
    <br />
    
    <label for="celular">Celular(*):</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['celular'];?>
" id="celular" name="celular" class="numeros"/>
    <br />

    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['datos_capacitador']->value['fecha_nacimiento'];?>
" id="fecha_nacimiento" name="fecha_nacimiento" onclick="javascript:NewCssCal(id)" readonly/>
    <br />

    <input class="btnSubmit" type="button" name="save" value="Guardar" onclick="guardar();">
</form>
<?php }} ?>
