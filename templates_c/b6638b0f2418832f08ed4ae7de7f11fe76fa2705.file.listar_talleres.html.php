<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 17:47:16
         compiled from ".\templates\talleres\listar_talleres.html" */ ?>
<?php /*%%SmartyHeaderCode:12752567efcd47b8838-01156082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6638b0f2418832f08ed4ae7de7f11fe76fa2705' => 
    array (
      0 => '.\\templates\\talleres\\listar_talleres.html',
      1 => 1451162615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12752567efcd47b8838-01156082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_talleres' => 0,
    'estado' => 0,
    'lista_talleres' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567efcd49f2d23_50900674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567efcd49f2d23_50900674')) {function content_567efcd49f2d23_50900674($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\function.counter.php';
?><?php echo '<script'; ?>
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

    function alta_taller(id) {
        if (confirm("Esta seguro que desea dar de alta este taller?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_alta_taller(id, usrlogin, retorno_cb);
        }
    }

    function baja_taller(id) {
        if (confirm("Esta seguro que desea dar de baja este taller?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_baja_taller(id, usrlogin, retorno_cb);
        }
    }

    function resetear_taller(id) {
        if (confirm("Esta seguro que desea resetear este taller?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_reset_taller(id, usrlogin, retorno_cb);
        }
    }

    function retorno_cb(z) {
        if(typeof(z) === "string"){
            alert(z);
            window.location.reload();
        } else {
            alert(z[1]);
            modificar_taller(z[0]);
        }
        
    }
    
    
<?php echo '</script'; ?>
>

<h1>Talleres</h1>
<form autocomplete="off" id="formBAlumno" name="formBAlumno" action="index.php?section=talleres&sub=listar_talleres" method="POST">

    <p>Cantidad de Talleres: <?php echo $_smarty_tpl->tpl_vars['cantidad_talleres']->value;?>
<br />
    Estado:
    <input type="hidden" value="" name="nombre" id="nombre"/>
    <input type="hidden" value="" name="id_capacitador" id="id_capacitador"/>

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
<div id="listado">
    <table class="zebra-striped" id="sortTableExample">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Capacitador</th>
                <th>Cantidad de Alumnos</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php echo smarty_function_counter(array('start'=>0,'print'=>false),$_smarty_tpl);?>

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
                <td><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['capacitador'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['cant_alumnos'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['estado'];?>
</td>
                <td>
                    <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')" />
                    <?php if ($_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['estado']=="ACTIVO") {?>
                    <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')" />
                    <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="baja_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')"/>
                    <img src="images/icons/file_warning.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="resetear_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')"/>
                    <?php } else { ?>
                    <img src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="alta_taller('<?php echo $_smarty_tpl->tpl_vars['lista_talleres']->value[$_smarty_tpl->getVariable('smarty')->value['section']['t']['index']]['id_taller'];?>
')"/>
                    <?php }?>
                </td>
            </tr>
            <?php endfor; endif; ?>
        </tbody>
    </table>
</div>
<input type="hidden" id="usrlogin" name="usrlogin" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" /><?php }} ?>
