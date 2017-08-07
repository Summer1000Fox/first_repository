<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:14
         compiled from "templates/default/index\module\message_main.php" */ ?>
<?php /*%%SmartyHeaderCode:2169058441796478335-76144147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbda13fe835452574f7f2751fd3cb4b6e799c761' => 
    array (
      0 => 'templates/default/index\\module\\message_main.php',
      1 => 1480799906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2169058441796478335-76144147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'item' => 0,
    'lang' => 0,
    'global' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58441796775de',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58441796775de')) {function content_58441796775de($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\wamp64\www\yuan\smarty\plugins\modifier.date_format.php';
?>
<div class="mes_sheet">
	<ul>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<li>
			<table>
				<tr>
					<td height="30px"><b><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_username'];?>
：</b><span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_title'];?>
</span>&nbsp;&nbsp;[ <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['mes_add_time'],"%Y-%m-%d %H:%M:%S");?>
 ]</td>
				</tr>
				<tr>
					<td><div><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_text'];?>
</div></td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['mes_reply']){?>
				<tr>
					<td><div class="reply"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['reply'];?>
：</span><?php echo $_smarty_tpl->tpl_vars['item']->value['mes_reply'];?>
</div></td>
				</tr>
				<?php }?>
			</table>
		</li>
		<?php } ?>
	</ul>
	<?php if (!$_smarty_tpl->tpl_vars['message']->value){?><div class="not_found"><?php echo $_smarty_tpl->tpl_vars['lang']->value['not_found'];?>
</div><?php }?>
</div>
<?php $_smarty_tpl->tpl_vars['prefix'] = new Smarty_variable($_smarty_tpl->tpl_vars['global']->value['channel'], null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("module/page_link.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('page'=>$_smarty_tpl->tpl_vars['global']->value['page']), 0);?>

<div id="leave_word">
	<form id="form_add_message" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'info'),$_smarty_tpl);?>
">
		<input name="cmd" type="hidden" value="add_message"/>
		<table>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_name'];?>
：</td>
				<td><input name="username" class="text" type="text" value="匿名用户" /></td>
			</tr>
			<tr>
				<td class="l">E-mail：</td>
				<td><input name="email" class="text" type="text" value="" /></td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['message_type'];?>
：</td>
				<td>
					<input name="type" type="radio" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['leave_word'];?>
" checked="checked" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['leave_word'];?>
&nbsp;&nbsp;
					<input name="type" type="radio" value="发布信息" />发布信息&nbsp;&nbsp;
				</td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['theme'];?>
：</td>
				<td>
					<input name="title" class="text" type="text" maxlength="80"/>&nbsp;&nbsp;
					<input name="show" type="checkbox" value="2"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang']->value['secret'];?>

				</td>
			</tr>
			<tr>
				<td class="l"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_content'];?>
：</td>
				<td><textarea name="text"></textarea></td>
			</tr>
			<tr>
				<td colspan="2">
					<div class="bt_row">
						<input class="button" type="button" onclick="submit_add_message()" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
" />&nbsp;&nbsp;
						<input class="button" type="reset" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['reset'];?>
"/>
					</div>
				</td>
			</tr>
		</table>
	</form>
</div>
<div class="space"></div>
<script language="javascript">
	var lang_email_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['email_empty'];?>
";
	var lang_mes_title_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_title_empty'];?>
";
	var lang_mes_text_empty = "<?php echo $_smarty_tpl->tpl_vars['lang']->value['mes_text_empty'];?>
";
</script>

<script language="javascript">
function submit_add_message()
{
	var str = "";
	var obj = document.getElementById("form_add_message");
	if(obj.email.value == ""){str += "-" + lang_email_empty + "\n";}
	if(obj.title.value == ""){str += "-" + lang_mes_title_empty + "\n";}
	if(obj.text.value == ""){str += "-" + lang_mes_text_empty + "\n";}
	if(str != "")
	{
		alert(str);
	}else{
		obj.submit();
	}
}
</script>

<!-- E数云 --><?php }} ?>