<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 16:07:08
         compiled from "templates/default/admin\module\basic\db_set.php" */ ?>
<?php /*%%SmartyHeaderCode:148615843ceacf31023-57177516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f268c6a2da8c32e048fe0301fa18305d33c1491' => 
    array (
      0 => 'templates/default/admin\\module\\basic\\db_set.php',
      1 => 1480799898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148615843ceacf31023-57177516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'global' => 0,
    'lang' => 0,
    'restore' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843cead17950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843cead17950')) {function content_5843cead17950($_smarty_tpl) {?>
<div class="block">
	<div class="head"><span>备份数据库</span></div>
	<div class="main">
		<form id="form_db_backup" method="post" action="<?php echo url(array('channel'=>$_smarty_tpl->tpl_vars['global']->value['channel']),$_smarty_tpl);?>
">
			<input name="cmd" type="hidden" value="db_backup" />
			<table class="table">
				<tr>
					<td>备份数据库：</td>
					<td><input class="button" type="submit" value="立即备份" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span>备份管理</span></div>
	<div class="main">
		<table class="table sheet">
			<tr class="h">
				<td>已备份数据库</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['operate'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['restore']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
</td>
				<td>
					<span class="red" onClick="db_restore('<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
')">[还原]</span>
					<span class="red" onClick="del_file('data/backup/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
')">[<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
]</span>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<div class="space"></div>
<div class="block">
	<div class="head"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['help'];?>
</span></div>
	<div class="main content">
		1.本功能目前只能备份ACCESS数据库，如果您使用的是MYSQL数据库，本功能不起作用。
	</div>
</div>

<script language="javascript">
	function db_restore(val)
	{
		if(confirm("您确定要还原该备份文件吗？"))
		{
			ajax("post","?/deal/dir-basic/","cmd=db_restore&file=" + val,
			function(data)
			{
				if(data == 1)
				{
					alert("还原数据库成功");
				}
			});
		}
	}
</script>
<?php }} ?>