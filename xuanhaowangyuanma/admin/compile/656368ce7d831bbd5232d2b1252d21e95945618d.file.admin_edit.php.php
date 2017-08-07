<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 16:14:37
         compiled from "templates/default/admin\module\basic\admin_edit.php" */ ?>
<?php /*%%SmartyHeaderCode:194835843d06d46d9d5-10897105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656368ce7d831bbd5232d2b1252d21e95945618d' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\admin_edit.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194835843d06d46d9d5-10897105',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'admin' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843d06d57b29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843d06d57b29')) {function content_5843d06d57b29($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>修改密码</span></div>
	<div class="main">
	<form id="form_edit_admin" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="edit_admin" />
			<input name="adm_id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['adm_id'];?>
" />
			<table class="table">
				<tr>
					<td>用户名：</td>
					<td><input class="text" name="username" type="text" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['adm_username'];?>
" /></td>
				</tr>
				<tr>
					<td>密码：</td>
					<td><input class="text" name="adm_password" type="password" /></td>
				</tr>
				<tr>
					<td>重复密码：</td>
					<td><input class="text" name="re_password" type="password" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div class="bt_row">
							<input class="button" type="button" onclick="check_edit_admin()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
	</form>
	</div>
</div>

<script language="javascript">
	function check_edit_admin()
	{
		var obj = document.getElementById("form_edit_admin");
		var str = "";
		if(obj.adm_password.value.length < 5){
			str = "密码长度不能小于5个字符";
		}else if(obj.adm_password.value != obj.re_password.value){
			str = "两次输入密码不一致";
		}
		if(str != "")
		{
			alert(str);
		}else{
			obj.submit();
		}
	}
</script>

<?php }} ?>