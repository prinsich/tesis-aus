<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:30:43
         compiled from ".\templates\capacitadores\listar_capacitadores.html" */ ?>
<?php /*%%SmartyHeaderCode:30644567ef5be6b7512-89024025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72fdb8a57ac41d563ecaa203baf1a9dfc8e88f9d' => 
    array (
      0 => '.\\templates\\capacitadores\\listar_capacitadores.html',
      1 => 1451161333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30644567ef5be6b7512-89024025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef5be9efda8_40503376',
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_capacitadores' => 0,
    'estado' => 0,
    'lista_capacitadores' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef5be9efda8_40503376')) {function content_567ef5be9efda8_40503376($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
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

    function alta_capacitador(id) {
        if (confirm("Esta seguro que desea dar de alta este capacitador?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_alta_capacitador(id, usrlogin, retorno_cb);
        }
    }

    function baja_capacitador(id) {
        if (confirm("Esta seguro que desea dar de baja este capacitador?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_baja_capacitador(id, usrlogin, retorno_cb);
        }
    }

    function retorno_cb(z) {
        alert(z);
        window.location.reload();
    }

    
<?php echo '</script'; ?>
>

<h1>Capacitadores</h1>
<form autocomplete="off" id="formBAlumno" name="formBAlumno" action="index.php?section=capacitadores&sub=listar_capacitadores" method="POST">

    <p>Cantidad total de capacitadores <?php echo $_smarty_tpl->tpl_vars['cantidad_capacitadores']->value;?>
<br />
    Estado:
    <input type="hidden" value="" name="apellido" id="nombre"/>
    <input type="hidden" value="" name="nombre" id="apellido"/>
    <input type="hidden" value="" name="dni" id="dni"/>
    
    <select id="estado" name="estado">
        <?php if ($_smarty_tpl->tpl_vars['estado']->value=="ACTIVO") {?>
        <option value=""> TODOS </option>
        <option value="ACTIVO" selected=""> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
        <?php } elseif ($_smarty_tpl->tpl_vars['estado']->value=="INACTIVO") {?>
        <option value=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO" selected=""> INACTIVO </option>
        <?php } else { ?>
        <option value="" selected=""> TODOS </option>
        <option value="ACTIVO"> ACTIVO </option>
        <option value="INACTIVO"> INACTIVO </option>
        <?php }?>
    </select>
    <button type="submit" form="formBAlumno" value="filtrar">Filtrar</button>
    </p>
</form>
<table class="zebra-striped" id="sortTableExample">
    <thead>
        <tr>
            <th>#</th>
            <th>Apellido</th>
            <th>Nombres</th>
            <th>Tel&eacute;fono</th>
            <th>Celular</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

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
            <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['celular'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['estado'];?>
</td>
            <td>
                <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')" />
                <?php if ($_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['estado']=="ACTIVO") {?>
                <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')" />
                <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="baja_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')"/>
                <?php } else { ?>
                <img src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="alta_capacitador('<?php echo $_smarty_tpl->tpl_vars['lista_capacitadores']->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]['id_capacitador'];?>
')"/>
                <?php }?>
            </td>
        </tr>
        <?php endfor; endif; ?>
    </tbody>
</table> 
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/>

<?php }} ?>
