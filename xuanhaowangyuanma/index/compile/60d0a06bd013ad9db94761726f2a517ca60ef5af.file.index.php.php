<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:25:52
         compiled from "templates/default/index\index.php" */ ?>
<?php /*%%SmartyHeaderCode:1637758433860629f73-72471069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60d0a06bd013ad9db94761726f2a517ca60ef5af' => 
    array (
      0 => 'templates/default/index\\index.php',
      1 => 1480799906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637758433860629f73-72471069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
    'describe' => 0,
    'version' => 0,
    'site_title' => 0,
    'S_TPL_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_584338606fcea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584338606fcea')) {function content_584338606fcea($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['describe']->value;?>
" />
	<meta name="version" content="<?php echo $_smarty_tpl->tpl_vars['version']->value;?>
" />
	<title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
	<link href="<?php echo $_smarty_tpl->tpl_vars['S_TPL_PATH']->value;?>
css/index.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php echo run(array('module'=>'header'),$_smarty_tpl);?>

	<div id="main">
		<?php echo run(array('module'=>'ad','id'=>'2'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'article_list'),$_smarty_tpl);?>

		<?php echo run(array('module'=>'link'),$_smarty_tpl);?>

	</div>
	<?php echo run(array('module'=>'footer'),$_smarty_tpl);?>

</body>
</html><?php }} ?>