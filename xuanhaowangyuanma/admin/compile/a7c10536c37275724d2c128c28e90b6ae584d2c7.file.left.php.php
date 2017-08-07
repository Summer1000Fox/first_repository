<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:26:05
         compiled from "templates/default/admin\module\left.php" */ ?>
<?php /*%%SmartyHeaderCode:171645843386db36fa8-37347784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c10536c37275724d2c128c28e90b6ae584d2c7' => 
    array (
      0 => 'templates/default/admin\\module\\left.php',
      1 => 1480799902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171645843386db36fa8-37347784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nav_left' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843386db90d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843386db90d3')) {function content_5843386db90d3($_smarty_tpl) {?>
<div id="left">
	<ul id="menu">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav_left']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li><a href="?/<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
		<?php } ?>
	</ul>
</div><?php }} ?>