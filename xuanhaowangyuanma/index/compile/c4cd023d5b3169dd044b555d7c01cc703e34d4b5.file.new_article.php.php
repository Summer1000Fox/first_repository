<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:06
         compiled from "templates/default/index\module\new_article.php" */ ?>
<?php /*%%SmartyHeaderCode:197915844178e36de32-58970035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4cd023d5b3169dd044b555d7c01cc703e34d4b5' => 
    array (
      0 => 'templates/default/index\\module\\new_article.php',
      1 => 1480799906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197915844178e36de32-58970035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_article' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5844178e3f69d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844178e3f69d')) {function content_5844178e3f69d($_smarty_tpl) {?><div class="box list in_list">
	<div class="head"><span>最新文章</span><a class="more" href="<?php echo url(array('channel'=>'article'),$_smarty_tpl);?>
">更多&gt;&gt;</a></div>
	<ul class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li><a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['item']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a></li>
		<?php } ?>
	</ul>
</div>
<!-- E数云 --><?php }} ?>