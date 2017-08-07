<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:06
         compiled from "templates/default/index\module\best_article.php" */ ?>
<?php /*%%SmartyHeaderCode:114845844178e4063d5-36249605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f6b2a7444510b649f8b20ba44eabb715c3a1f55' => 
    array (
      0 => 'templates/default/index\\module\\best_article.php',
      1 => 1480799904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114845844178e4063d5-36249605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_article' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5844178e49ab0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844178e49ab0')) {function content_5844178e49ab0($_smarty_tpl) {?><div class="box list in_list">
	<div class="head"><span>推荐文章</span><a class="more" href="<?php echo url(array('channel'=>'article','best'=>'1'),$_smarty_tpl);?>
">更多&gt;&gt;</a></div>
	<ul class="main">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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