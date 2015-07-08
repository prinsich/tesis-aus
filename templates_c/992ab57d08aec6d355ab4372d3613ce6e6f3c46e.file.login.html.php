<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-06 00:36:33
         compiled from ".\templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:31886554942c4549c32-13756753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992ab57d08aec6d355ab4372d3613ce6e6f3c46e' => 
    array (
      0 => '.\\templates\\login.html',
      1 => 1430865389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31886554942c4549c32-13756753',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554942c45c7cf3_58310007',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554942c45c7cf3_58310007')) {function content_554942c45c7cf3_58310007($_smarty_tpl) {?><h1>Acceso al Sistema</h1>

<form id="login" method="post" action="<?php echo '<?php'; ?>
 echo $path; <?php echo '?>'; ?>
system/process-login.php" >
    <label for="usr">Usuario:</label>
    <input type="text" value="" id="usr" name="usr" />
    <br />

    <label for="password">Contrase&ntilde;a:</label>
    <input type="password" value="" id="password" name="password" />
    <br />
    
    <input class="btnSubmit" type="button" name="login" value="Acceder" onclick="login();">
</form><?php }} ?>
