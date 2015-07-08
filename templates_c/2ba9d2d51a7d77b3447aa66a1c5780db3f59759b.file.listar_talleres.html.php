<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 00:12:24
         compiled from ".\templates\talleres\listar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:1778254f8b27527f2b1-43434524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ba9d2d51a7d77b3447aa66a1c5780db3f59759b' => 
    array (
      0 => '.\\templates\\talleres\\listar_talleres.html',
      1 => 1430863920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1778254f8b27527f2b1-43434524',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f8b27541e6f8_55741830',
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_talleres' => 0,
    'lista_talleres' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f8b27541e6f8_55741830')) {function content_54f8b27541e6f8_55741830($_smarty_tpl) {?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    function ver_taller(id) {
        var urlp = "index.php?section=talleres&sub=ver_taller&id_taller=" + id;
        window.open(urlp, "_self");
    }
    
    function modificar_taller(id) {
        var urlp = "index.php?section=talleres&sub=modificar_taller&id_taller=" + id;
        window.open(urlp, "_self");
    }
    
    function eliminar_taller(id){
        if(confirm("Esta seguro que desea borrar este taller?")){
            x_eliminar_taller(id, retorno_cb);
        }
    }
    
    function resetear_taller(id){
        if(confirm("Esta seguro que desea resetear este taller?")){
            x_reset_taller(id, retorno_cb);
        }
    }
    
    function retorno_cb(z){
        alert(z);
        window.location.reload();
    }
    
<?php echo '</script'; ?>
>

<h1>Talleres</h1>
<p>Cantidad de talleres <?php echo $_smarty_tpl->tpl_vars['cantidad_talleres']->value;?>
</p>
<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Capacitador</th>
            <th>Cantidad de Alumnos</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['t'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['t']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['name'] = 't';
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_talleres']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['t']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['t']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['t']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['capacitador'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['cant_alumnos'];?>
</td>
            <td>
                <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')" />
                <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')" />
                <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="eliminar_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')"/>
                <img src="images/icons/file_warning.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="resetear_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')"/>
                <img src="images/icons/load_download.png" title="" alt="" border="0" height="17" align="absmiddle" onclick=""/>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
        <?php endfor; endif; ?>
    </tbody>
</table> <?php }} ?>
