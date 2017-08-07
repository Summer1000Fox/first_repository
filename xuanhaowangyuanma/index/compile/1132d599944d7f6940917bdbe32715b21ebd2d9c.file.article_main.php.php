<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:05
         compiled from "templates/default/index\module\article_main.php" */ ?>
<?php /*%%SmartyHeaderCode:72095844178dbf5627-80811032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1132d599944d7f6940917bdbe32715b21ebd2d9c' => 
    array (
      0 => 'templates/default/index\\module\\article_main.php',
      1 => 1480799904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72095844178dbf5627-80811032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_sheet' => 0,
    'article' => 0,
    'global' => 0,
    'item' => 0,
    'lang' => 0,
    'share_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5844178ddddb1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844178ddddb1')) {function content_5844178ddddb1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\wamp64\www\yuan\smarty\plugins\modifier.date_format.php';
?>
<?php if ($_smarty_tpl->tpl_vars['show_sheet']->value==1){?>
	<div class="art_sheet list">
		<ul class="main">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li>
				<a href="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel'],'id'=>$_smarty_tpl->tpl_vars['item']->value['art_id']),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['art_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['short_title'];?>
</a>
				<span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['art_add_time'],"%Y-%m-%d");?>
</span>
				<div class="clear"></div>
			</li>
			<?php } ?>
		</ul>
		<?php if (!$_smarty_tpl->tpl_vars['article']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

<?php }else{ ?>
	<div id="article">
		<div class="title">
			<h2><?php echo $_smarty_tpl->tpl_vars['article']->value['art_title'];?>
</h2>
		</div>
		<div class="message">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
：<?php echo $_smarty_tpl->tpl_vars['article']->value['art_author'];?>
&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_time'];?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['art_add_time'],"%Y-%m-%d %H:%M:%S");?>

		</div>
		<div class="main">
			<?php echo run(array('module'=>'ad','id'=>'3'),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->tpl_vars['article']->value['art_text'];?>

			<div class="clear"></div>
		</div>
		<div class="share"><?php echo $_smarty_tpl->tpl_vars['share_code']->value;?>
</div>
		<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable($_smarty_tpl->tpl_vars['global']->value['channel'], null, 0);?>
		<?php echo $_smarty_tpl->getSubTemplate ("module/prev_next.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('id'=>$_smarty_tpl->tpl_vars['global']->value['id']), 0);?>

	</div>
<?php }?>
<!-- E数云 -->
<?php }} ?>