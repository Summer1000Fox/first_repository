<?php /* Smarty version Smarty-3.1.3, created on 2017-01-18 23:59:10
         compiled from "templates/default/admin\module\basic\advert_add.php" */ ?>
<?php /*%%SmartyHeaderCode:8052587f90ce4581e9-60206656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e76642186fe10cf02718032edcf6ca8d1fb0c95' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\advert_add.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8052587f90ce4581e9-60206656',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_587f90ce5d30c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f90ce5d30c')) {function content_587f90ce5d30c($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>添加广告</span></div>
	<div class="main">
		<form id="form_add_advert" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_advert" />
			<table class="table">
				<tr>
					<td>广告名称：</td>
					<td><input name="adv_name" type="text" class="text" maxlength="40" value="" /></td>
				</tr>
				<tr>
					<td>广告代码：</td>
					<td><textarea class="textarea" name="adv_code"></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" />
							<input class="button" type="button" onclick="go_back()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['go_back'];?>
" />
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div><?php }} ?>