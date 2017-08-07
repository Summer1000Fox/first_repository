<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:05
         compiled from "templates/default/index\module\here.php" */ ?>
<?php /*%%SmartyHeaderCode:260325844178daa9551-32632681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0939fd3acf063264e79e07155a7da021c7879b83' => 
    array (
      0 => 'templates/default/index\\module\\here.php',
      1 => 1480799904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260325844178daa9551-32632681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'channel_title' => 0,
    'lang' => 0,
    'S_TPL_PATH' => 0,
    'global' => 0,
    'cat_name' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5844178dbd23a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844178dbd23a')) {function content_5844178dbd23a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\wamp64\www\yuan\smarty\plugins\modifier.truncate.php';
?>
<div class="here">
	<span><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</span>
	<div class="link">
		<a href="./"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['channel_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.gif" /><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['channel_title']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['cat_name']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.gif" /><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'cat'=>$_smarty_tpl->tpl_vars['global']->value['cat']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cat_name']->value;?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page_title']->value){?><img src="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
images/here_img.gif" /><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['global']->value['id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['page_title']->value,20);?>
</a><?php }?>
	</div>
</div>
<!-- E数云 --><?php }} ?>