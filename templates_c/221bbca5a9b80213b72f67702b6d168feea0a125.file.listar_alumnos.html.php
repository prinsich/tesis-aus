<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-26 18:42:23
         compiled from ".\templates\alumnos\listar_alumnos.html" */ ?>
<?php /*%%SmartyHeaderCode:30097567ef673491e77-03757491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '221bbca5a9b80213b72f67702b6d168feea0a125' => 
    array (
      0 => '.\\templates\\alumnos\\listar_alumnos.html',
      1 => 1451161218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30097567ef673491e77-03757491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_567ef6738b3a02_52160533',
  'variables' => 
  array (
    'Sajax' => 0,
    'cantidad_alumnos' => 0,
    'estado' => 0,
    'lista_alumnos' => 0,
    'index' => 0,
    'usrlogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567ef6738b3a02_52160533')) {function content_567ef6738b3a02_52160533($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Program Files\\wamp\\www\\tesis-aus\\configs\\smarty\\plugins\\modifier.date_format.php';
?><?php echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['Sajax']->value;?>

    
    function ver_alumno(id) {
        var urlp = "index.php?section=alumnos&sub=ver_alumno&id_alumno=" + id;
        window.open(urlp, "_self");
    }

    function modificar_alumno(id) {
        var urlp = "index.php?section=alumnos&sub=modificar_alumno&id_alumno=" + id;
        window.open(urlp, "_self");
    }

    function alta_alumno(id) {
        if (confirm("Esta seguro que desea dar de alta este alumno?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_alta_alumno(id, usrlogin, retorno_cb);
        }
    }

    function baja_alumno(id) {
        if (confirm("Esta seguro que desea dar de baja este alumno?")) {
            var usrlogin = document.getElementById("usrlogin").value;
            x_baja_alumno(id, usrlogin, retorno_cb);
        }
    }

    function retorno_cb(z) {
        alert(z);
        window.location.reload();
    }
    
<?php echo '</script'; ?>
>

<h1>Alumnos</h1>
<form autocomplete="off" id="formBAlumno" name="formBAlumno" action="index.php?section=alumnos&sub=listar_alumnos" method="POST">

    <p>Cantidad total de alumnos: <?php echo $_smarty_tpl->tpl_vars['cantidad_alumnos']->value;?>
<br />
    Estado:
    <input type="hidden" value="" name="apellido" id="nombre"/>
    <input type="hidden" value="" name="nombre" id="apellido"/>
    <input type="hidden" value="" name="dni" id="dni"/>
    <input type="hidden" value="" name="taller" id="taller"/>
    <input type="hidden" value="" name="alta_seguro" id="alta_seguro"/>

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
            <th>DNI</th>
            <th>Fecha Nac.</th>
            <th>Tel&oacute;fono</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php $_smarty_tpl->tpl_vars["index"] = new Smarty_variable(1, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['a'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lista_alumnos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['apellido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['nombre'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['dni'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['fecha_nacimiento'],"d-m-Y");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['telefono'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['estado'];?>
</td>
            <td>
                <img src="images/icons/file_search.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="ver_alumno('<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
')" />
                <?php if ($_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['estado']=="ACTIVO") {?>
                <img src="images/icons/file_edit.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="modificar_alumno('<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
')" />
                <img src="images/icons/file_delete.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="baja_alumno('<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
')"/>
                <?php } else { ?>
                <img src="images/icons/file_add.png" title="" alt="" border="0" height="17" align="absmiddle" onclick="alta_alumno('<?php echo $_smarty_tpl->tpl_vars['lista_alumnos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]['id_alumno'];?>
')"/>
                <?php }?>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['index'] = new Smarty_variable($_smarty_tpl->tpl_vars['index']->value+1, null, 0);?>
        <?php endfor; endif; ?>
    </tbody>
</table>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['usrlogin']->value;?>
" id="usrlogin" name="usrlogin"/>
<?php }} ?>
