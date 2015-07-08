<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 00:12:22
         compiled from ".\templates\capacitadores\listar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:1320954f794f0ee7698-74289178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be5cc94a1850ac6d13f2b8e9f4c449d8ab3a22e' => 
    array (
      0 => '.\\templates\\capacitadores\\listar_capacitadores.html',
      1 => 1430863920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1320954f794f0ee7698-74289178',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f794f11affc1_98377553',
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_capacitadores' => 0,
    'lista_capacitadores' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f794f11affc1_98377553')) {function content_54f794f11affc1_98377553($_smarty_tpl) {?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    function ver_capacitador(id) {
        var urlp = "index.php?section=capacitadores&sub=ver_capacitador&id_capacitador=" + id;
        window.open(urlp, "_self");
    }
    
    function modificar_capacitador(id) {
        var urlp = "index.php?section=capacitadores&sub=modificar_capacitador&id_capacitador=" + id;
        window.open(urlp, "_self");
    }
    
    function eliminar_capacitador(id){
        if(confirm("Esta seguro que desea borrar este capacitador?")){
            x_eliminar_capacitador(id, retorno_cb);
        }
    }
    
    function retorno_cb(z){
        alert(z);
        window.location.reload();
    }
    
<?php echo '</script'; ?>
>

<h1>Capacitadores</h1>
<p>Cantidad total de capacitadores <?php echo $_smarty_tpl->tpl_vars['cantidad_capacitadores']->value;?>
</p>
<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>Tel&oacute;fono</th>
            <th>Celular</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['c'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_capacitadores']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['celular'];?>
</td>
            <td>
                <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')" />
                <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')" />
                <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="eliminar_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')"/>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
        <?php endfor; endif; ?>
    </tbody>
</table> 
<?php }} ?>
