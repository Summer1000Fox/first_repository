<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:39:31
         compiled from "templates/default/admin\module\super\channel_name.php" */ ?>
<?php /*%%SmartyHeaderCode:1409858433b93800565-02839445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6ac956a949dd5fb2e628f4bf6fb0ac3ce8a643f' => 
    array (
      0 => 'templates/default/admin\\module\\super\\channel_name.php',
      1 => 1480799900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409858433b93800565-02839445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'channel' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58433b938fe41',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58433b938fe41')) {function content_58433b938fe41($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>频道名称</span></div>
	<div class="main">
		<form id="edit_channel_name" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="edit_channel_name" />
		<table class="table sheet">
			<tr class="h">
				<td>字符名</td>
				<td>名称</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><input name="cha_id[]" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_id'];?>
" /><?php echo $_smarty_tpl->tpl_vars['item']->value['cha_code'];?>
</td>
				<td><input name="cha_name[]" type="text" class="text" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['cha_name'];?>
" /></td>
			</tr>
			<?php } ?>
			<tr>
				<td class="bt_row" colspan="4">
					<div class="bt_row">
						<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
					</div>
				</td>
			</tr>
		</table>
		</form>
	</div>
</div><?php }} ?>