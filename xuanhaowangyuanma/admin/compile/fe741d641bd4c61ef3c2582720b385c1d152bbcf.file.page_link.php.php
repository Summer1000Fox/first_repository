<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 05:39:07
         compiled from "templates/default/admin\module\page_link.php" */ ?>
<?php /*%%SmartyHeaderCode:1675658433b7b111ac0-09378962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe741d641bd4c61ef3c2582720b385c1d152bbcf' => 
    array (
      0 => 'templates/default/admin\\module\\page_link.php',
      1 => 1480799902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675658433b7b111ac0-09378962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_sum' => 0,
    'page' => 0,
    'prefix' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_58433b7b51513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58433b7b51513')) {function content_58433b7b51513($_smarty_tpl) {?>
<div class="page_link">
	<div class="in">
		<span>共<?php echo $_smarty_tpl->tpl_vars['page_sum']->value;?>
页</span>
		<span>第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</span>
		<?php if ($_smarty_tpl->tpl_vars['page_sum']->value!=1){?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>1),$_smarty_tpl);?>
">首页</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">上一页</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-4>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-4),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-4;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-3>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-3),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-3;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-2>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-2),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-2;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value-1>0){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value-1),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
]</a><?php }?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" style="color:#C00;font-weight:bold;">[<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
]</a>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+2<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+2),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+2;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+3<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+3),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+3;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+4<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+4),$_smarty_tpl);?>
">[<?php echo $_smarty_tpl->tpl_vars['page']->value+4;?>
]</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['page']->value+1<=$_smarty_tpl->tpl_vars['page_sum']->value){?><a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value+1),$_smarty_tpl);?>
">下一页</a><?php }?>
		<a href="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page_sum']->value),$_smarty_tpl);?>
">末页</a>
		<?php }?>
		<form id="form_jump" action="" method="get">
			<input type="hidden" name="url" value="<?php echo url(array('prefix'=>$_smarty_tpl->tpl_vars['prefix']->value,'page'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
" />
			<input class="text" type="text" style="width:30px" name="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" />
			<input class="button" type="button" onclick="page_jump('<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
')" value="跳转"/>
		</form>
	</div>
</div>
<!-- E数云 --><?php }} ?>