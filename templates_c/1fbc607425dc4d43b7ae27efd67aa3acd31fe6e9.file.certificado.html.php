<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-14 16:23:00
         compiled from "templates\certificados\certificado.html" */ ?>
<?php /*%%SmartyHeaderCode:1321354f9244f7c6660-55108032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbc607425dc4d43b7ae27efd67aa3acd31fe6e9' => 
    array (
      0 => 'templates\\certificados\\certificado.html',
      1 => 1426346577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321354f9244f7c6660-55108032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f9244f827b19_83841706',
  'variables' => 
  array (
    'nombre_alumno' => 0,
    'dni_alumno' => 0,
    'estado' => 0,
    'nombre_taller' => 0,
    'fecha' => 0,
    'nombre_capacitador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f9244f827b19_83841706')) {function content_54f9244f827b19_83841706($_smarty_tpl) {?><div style="color: #000080;">
<p style="line-height:  45px; font-size: 25px;">
Certifica que <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['nombre_alumno']->value;?>
</em></font><br />
Documento Nº <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['dni_alumno']->value;?>
</em></font><br />
<?php if ($_smarty_tpl->tpl_vars['estado']->value=="a") {?>
<font face="dejavusans"><em>ASISTI&Oacute; </em></font> al
<?php } else { ?>
Se <font face="dejavusans"><em>CAPACIT&Oacute; </em></font> en el
<?php }?>
curso de <font face="dejavusans"><em><?php echo $_smarty_tpl->tpl_vars['nombre_taller']->value;?>
</em></font><br/>
Que se dictó en:<br />
<b>Asociaci&oacute;n Civil Casa de Francisco.</b><br/>
</p>
<p style="font-size: 20px;" align="rigth">Santo Tom&eacute;, <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
.</p>
<p></p><p></p><p></p>
<br /><br /><br /><br /><br /><br />

<table style="text-align: center; width: 100%;" >
    <tr>
        <td>
            <font face="times">................................................</font>
        </td>
        <td>
            <font face="times">................................................</font>
        </td>
    </tr>
    <tr>
        <td>
            <font face="times"><?php echo $_smarty_tpl->tpl_vars['nombre_capacitador']->value;?>
</font>
        </td>
        <td>
            <font face="times">PATRICIA GARAY</font>
        </td>
    </tr>
    <tr>
        <td>
            <font face="times">Capacitador</font>
        </td>
        <td>
            <font face="times">Presidente</font>
        </td>
    </tr>
</table>
</div>
<?php }} ?>
