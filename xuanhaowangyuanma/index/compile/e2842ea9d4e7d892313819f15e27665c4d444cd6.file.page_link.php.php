<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 21:18:05
         compiled from "templates/default/index\module\page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:111825844178dde9692-46579974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2842ea9d4e7d892313819f15e27665c4d444cd6' => 
    array (
      0 => 'templates/default/index\\module\\page_link.php',
      1 => 1480799906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111825844178dde9692-46579974',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'page_sum' => 0,
    'page' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5844178e35e43',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5844178e35e43')) {function content_5844178e35e43($_smarty_tpl) {?>
<div class="page_link">
	<div class="in">
		<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['all'];?>
<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</span>
		<span><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang']->value['page'];?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['first_page'];?>
</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['previous_page'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
】</a><?php }?>
		<a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" style="color:#7fb402;">【<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
】</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a class="num" href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
">【<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
】</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['next_page'];?>
</a><?php }?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_page'];?>
</a>
		<?php }?>
		<form id="form_jump" action="" method="get">
			<input type="hidden" name="url" value="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" />
			<input class="text" type="text" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
			<input class="bt" type="button" onclick="page_jump('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
')" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['jump'];?>
"/>
		</form>
	</div>
</div>

<script language="javascript">
	function page_jump(val)
	{
		var obj = document.getElementById("form_jump");
		var url = obj.url.value;
		var page = obj.page.value;
		url = url.replace("/page-" + val + "/","/page-" + page + "/");
		document.location.href = url;
	}
</script>

<!-- E数云 --><?php }} ?>