<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:25:52
         compiled from "templates/default/index\module\footer.php" */ ?>
<?php /*%%SmartyHeaderCode:2388258433860ba84c2-56771613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7760452d075538029f9ecb7e4dda4e1b48641984' => 
    array (
      0 => 'templates/default/index\\module\\footer.php',
      1 => 1480799904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2388258433860ba84c2-56771613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footer_nav' => 0,
    'item' => 0,
    'site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58433860c7757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58433860c7757')) {function content_58433860c7757($_smarty_tpl) {?>
<div id="footer">
	<div class="nav">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['footer_nav']['last'] = $_smarty_tpl->tpl_vars['item']->last;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['footer_nav']['last']){?>|<?php }?>
		<?php } ?>
	</div>
	<div class="info">
		<?php echo $_smarty_tpl->getSubTemplate ("module/copyright.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['record_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['record'];?>
</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['site']->value['tech_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site']->value['tech'];?>
</a>
		<?php echo $_smarty_tpl->tpl_vars['site']->value['statistical_code'];?>

	</div>
</div>
<!-- E数云 --><?php }} ?>