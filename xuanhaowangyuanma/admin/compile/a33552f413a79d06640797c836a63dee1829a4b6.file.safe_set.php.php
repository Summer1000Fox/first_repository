<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:38:49
         compiled from "templates/default/admin\module\basic\safe_set.php" */ ?>
<?php /*%%SmartyHeaderCode:2477658433b691cf917-78400198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33552f413a79d06640797c836a63dee1829a4b6' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\safe_set.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2477658433b691cf917-78400198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'safe_admin_login_hours' => 0,
    'safe_admin_login_times' => 0,
    'safe_message_hours' => 0,
    'safe_message_times' => 0,
    'safe_comment_hours' => 0,
    'safe_comment_times' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58433b692b9f5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58433b692b9f5')) {function content_58433b692b9f5($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>安全设置</span></div>
	<div class="main">
		<table class="table">
			<tr>
				<td width="30%">后台登录设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_admin_login_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_hours']->value;?>
" />
					小时内同一IP只能登录后台
					<input type="text" class="text2" onBlur="set_varia('safe_admin_login_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_admin_login_times']->value;?>
" />
					次
				</td>
			</tr>
			<tr>
				<td>前台留言设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_message_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_hours']->value;?>
" />
					小时内同一IP只能提交留言
					<input type="text" class="text2" onBlur="set_varia('safe_message_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_message_times']->value;?>
" />
					次
				</td>
			</tr>
			<tr>
				<td>前台评论设置：</td>
				<td>
					<input type="text" class="text2" onBlur="set_varia('safe_comment_hours',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_hours']->value;?>
" />
					小时内同一IP只能提交评论
					<input type="text" class="text2" onBlur="set_varia('safe_comment_times',this.value)" value="<?php echo $_smarty_tpl->tpl_vars['safe_comment_times']->value;?>
" />
					次
				</td>
			</tr>
		</table>
	</div>
</div>
<?php }} ?>