<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 15:59:25
         compiled from "templates/default/admin\module\basic\admin_add.php" */ ?>
<?php /*%%SmartyHeaderCode:11165843ccddefa036-96331211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f04225939879520a26936165f432f861863b7a16' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\admin_add.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11165843ccddefa036-96331211',
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
  'unifunc' => 'content_5843ccde0c167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843ccde0c167')) {function content_5843ccde0c167($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>添加管理员帐号</span></div>
	<div class="main">
	<form id="form_add_admin" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="add_admin" />
			<table class="table">
				<tr>
					<td>用户名：</td>
					<td><input class="text" name="adm_username" type="text" /></td>
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
							<input class="button" type="button" onclick="check_add_admin()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" />
						</div>
					</td>
				</tr>
			</table>
	</form>
	</div>
</div>

<script language="javascript">
	function check_add_admin()
	{
		var obj = document.getElementById("form_add_admin");
		var str = "";
		if(obj.adm_username.value.length < 5)
		{
			str = "用户名长度不能小于5个字符";
		}else if(obj.adm_password.value.length < 5){
			str = "密码长度不能小于5个字符";
		}else if(obj.adm_password.value != obj.re_password.value){
			str = "两次输入密码不一致";
		}
		ajax("post","?/deal/dir-site/","cmd=check_admin_name&name=" + obj.adm_username.value,
		function(data)
		{
			if(data == 1)
			{
				str = "对不起，用户名已存在";
			}
			if(str != "")
			{
				alert(str);
			}else{
				obj.submit();
			}
		});
	}
</script>

<?php }} ?>