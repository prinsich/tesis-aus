<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 23:31:55
         compiled from ".\templates\talleres\agregar_taller.html" */ ?>
<?php /*%%SmartyHeaderCode:1695154f7d38f623d75-32493156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e13fad9264718375f5bfaec5a04454999fc344d4' => 
    array (
      0 => '.\\templates\\talleres\\agregar_taller.html',
      1 => 1426447674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695154f7d38f623d75-32493156',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f7d38f671310_36108392',
  'variables' => 
  array (
    'lista_dias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f7d38f671310_36108392')) {function content_54f7d38f671310_36108392($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_capacitadores.php';
?><?php echo '<script'; ?>
>
    
    
    function validar(){
        var valido = true;
        var error = "Complete lis siguientes campos\n";
        
        var nombre = document.getElementById("nombre").value;
        if(nombre.trim() === ""){
            valido = false;
            error += " - Nombre\n";
        }
        
        var nombre = document.getElementById("id_capacitador").value;
        if(nombre === "0"){
            valido = false;
            error += " - Capacitador\n";
        }
        
        var i;
        var error_check = false;
        for(i = 1; i < 6; i++){
            var id_dia = "dia_" + i;
            var dia_check = document.getElementById(id_dia).checked;
            //alert(id_dia + " " +dia_check);
            if(dia_check){
                error_check = true;
            } 
        }
        
        if(!valido){
            if(!error_check)
                error += " - Selecione al menos un dia\n";
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

<h1>Agregar Taller</h1>
<p>Los campos marcado con <b>*</b> son obligatorios</p>
<form name="formTaller" action="index.php?section=talleres&sub=guardar_taller" method="POST">
    <input type="hidden" id="accion" name="accion" value="agregar" />
    <label for="nombre">Nombre(*):</label> 
    <input type="text" value="" id="nombre" name="nombre" class="letras"/>
    <br />

    <label for="capacitador">Capacitador(*):</label> 
    <?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador"),$_smarty_tpl);?>

    <br />

    <label for="dias">D&iacute;as de Dictado:</label>
    <br /><br />
    <table class="diascheck" style="width: 35%; float: right; margin-left: 90px; margin-right: 125px; margin-top: 0px; margin-bottom: 20px;">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['d'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['d']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['name'] = 'd';
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_dias']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['d']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['d']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['d']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['dia'];?>
</td>
            <td><input type="checkbox" id="dia_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" name="days_list[]" value="<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
"></td>
            <!--td>Hora:</td>
            <td><input type="text" value="" id="hora_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" name="hora_<?php echo $_smarty_tpl->tpl_vars['lista_dias']->value[$_smarty_tpl->getVariable('smarty')->value['section']['d']['index']]['id_dia'];?>
" style="width: 50px" class="numeros" maxlength="4"/></td-->
        </tr>
        <?php endfor; endif; ?>
    </table>
    <br />
    <input class="btnSubmit" type="button" name="enviar" value="Guardar" onclick="guardar();" />
</form>
<?php }} ?>
