<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-06 03:41:31
         compiled from ".\templates\talleres\buscar_taller.html" */ ?>
<?php /*%%SmartyHeaderCode:2661154f913db09a7e4-67155925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f8875bdf0dd29056f49351408abdef516b70d6' => 
    array (
      0 => '.\\templates\\talleres\\buscar_taller.html',
      1 => 1425609317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661154f913db09a7e4-67155925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54f913db0c1131_97763240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f913db0c1131_97763240')) {function content_54f913db0c1131_97763240($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_capacitadores')) include 'D:\\Program Files\\WampServer\\www\\ABM_AUS\\libs\\plugins\\function.html_capacitadores.php';
?><h1>Buscar Taller</h1>
    <form name="formBTaller" action="index.php?section=capacitadores&sub=listar_capacitadores.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" value="" name="nombre" />
        </br>
	
        <label for="capacitador">Capacitador:</label> 
	<?php echo smarty_function_html_capacitadores(array('name'=>"id_capacitador"),$_smarty_tpl);?>

        </br>
	
        <input class="btnSubmit" type="submit" name="buscar" value="Buscar">
    </form><?php }} ?>
