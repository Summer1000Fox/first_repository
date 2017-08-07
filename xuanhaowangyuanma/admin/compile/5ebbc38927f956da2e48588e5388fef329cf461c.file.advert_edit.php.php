<?php /* Smarty version Smarty-3.1.3, created on 2017-01-18 23:56:12
         compiled from "templates/default/admin\module\basic\advert_edit.php" */ ?>
<?php /*%%SmartyHeaderCode:18054587f901c457695-97410022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ebbc38927f956da2e48588e5388fef329cf461c' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\advert_edit.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18054587f901c457695-97410022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'advert' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_587f901c735d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f901c735d4')) {function content_587f901c735d4($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>编辑广告</span></div>
	<div class="main">
		<form id="form_edit_advert" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_or_edit_advert" />
			<input name="adv_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['advert']->value['adv_id'];?>
" />
			<table class="table">
				<tr>
					<td>广告名称：</td>
					<td><input name="adv_name" type="text" class="text" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['advert']->value['adv_name'];?>
" /></td>
				</tr>
				<tr>
					<td>广告代码：</td>
					<td><textarea class="textarea" name="adv_code"><?php echo $_smarty_tpl->tpl_vars['advert']->value['adv_code'];?>
</textarea></td>
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