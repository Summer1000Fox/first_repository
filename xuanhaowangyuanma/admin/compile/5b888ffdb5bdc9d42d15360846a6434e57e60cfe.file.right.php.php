<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:26:05
         compiled from "templates/default/admin\module\right.php" */ ?>
<?php /*%%SmartyHeaderCode:256855843386dba0742-31865040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b888ffdb5bdc9d42d15360846a6434e57e60cfe' => 
    array (
      0 => 'templates/default/admin\\module\\right.php',
      1 => 1480799902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256855843386dba0742-31865040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_info' => 0,
    'check_power' => 0,
    'global' => 0,
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843386dc968f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843386dc968f')) {function content_5843386dc968f($_smarty_tpl) {?>
<div id="right">
<?php if (!$_smarty_tpl->tpl_vars['show_info']->value&&$_smarty_tpl->tpl_vars['check_power']->value){?>
	<div id="core">
		<?php echo $_smarty_tpl->getSubTemplate ((((('module/').($_smarty_tpl->tpl_vars['global']->value['original'])).('/')).($_smarty_tpl->tpl_vars['global']->value['mod'])).('.php'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
<?php }else{ ?>
	<div class="block">
		<div class="head"><span>系统信息</span></div>
		<div class="main">
			<div id="info">
				<?php if ($_smarty_tpl->tpl_vars['check_power']->value){?>
				<div class="main">
					<div class="txt"><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
					<div class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a></div>
				</div>
				<script language="javascript">
					interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",3000);
				</script>
				<?php }else{ ?>
				<div class="main">
					<div class="txt">对不起，您的权限不足，无法操作当前页面</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php }?>
</div><?php }} ?>