<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:26:03
         compiled from "templates/default/admin\info.php" */ ?>
<?php /*%%SmartyHeaderCode:272305843386be9ad02-42547748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '272967f22701f71198bc16ad3c09e90c9db8ce46' => 
    array (
      0 => 'templates/default/admin\\info.php',
      1 => 1480799902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272305843386be9ad02-42547748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
    'info_text' => 0,
    'link_href' => 0,
    'link_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843386c017fb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843386c017fb')) {function content_5843386c017fb($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div>
	<div id="info">
		<div class="main">
			<div class="txt"><?php echo $_smarty_tpl->tpl_vars['info_text']->value;?>
</div>
			<div class="link"><a href="<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</a></div>
		</div>
		<script language="javascript">
			interval = setInterval("document.location.href = '<?php echo $_smarty_tpl->tpl_vars['link_href']->value;?>
'",5000);
		</script>
	</div>
</div>
</body>
</html>
<?php }} ?>