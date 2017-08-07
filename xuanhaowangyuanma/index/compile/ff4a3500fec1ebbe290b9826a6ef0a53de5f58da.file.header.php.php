<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:25:52
         compiled from "templates/default/index\module\header.php" */ ?>
<?php /*%%SmartyHeaderCode:192625843386071c2b6-49748998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4a3500fec1ebbe290b9826a6ef0a53de5f58da' => 
    array (
      0 => 'templates/default/index\\module\\header.php',
      1 => 1480799904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192625843386071c2b6-49748998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'S_ROOT' => 0,
    'site_title' => 0,
    'global' => 0,
    'lang' => 0,
    'nav' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843386087fa8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843386087fa8')) {function content_5843386087fa8($_smarty_tpl) {?>
<div id="header">
	<div class="main">
		<div class="logo"><a href="./"><img src="<?php echo $_smarty_tpl->tpl_vars['S_ROOT']->value;?>
images/logo.png" /></a></div>
		<?php echo run(array('module'=>'ad','id'=>'1'),$_smarty_tpl);?>

		<div class="links">
		  <a class="a_1" href="" onClick="window.external.addFavorite('http://'+window.location.host,'<?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
')" target="_top">收藏本站</a>
		  <a class="a_2" href="<?php echo url(array('channel'=>'message'),$_smarty_tpl);?>
">在线留言</a>
		</div>
		<div class="search">
			<form id="form_search" method="post" action="<?php echo url(array('entrance'=>$_smarty_tpl->tpl_vars['global']->value['entrance'],'channel'=>'search'),$_smarty_tpl);?>
">
				<input class="text" name="key" type="text" maxlength="30" onkeydown="if(event.keyCode == 13)do_search();" />
				<a class="bt" onclick="do_search()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</a>
			</form>
		</div>
	</div>
	<div id="nav">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nav']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
			<li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['nav']['first']){?>class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['men_url'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['target']==1){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['men_name'];?>
</a></li>
			<?php } ?>
			<div class="clear"></div>
		</ul>
	</div>
</div>

<script language="javascript">
	function do_search()
	{
		var obj = document.getElementById("form_search");
		var val = obj.key.value;
		obj.action = obj.action + "/key-" + val + "/";
		obj.submit();
	}
</script>

<!-- E数云 -->
<?php }} ?>