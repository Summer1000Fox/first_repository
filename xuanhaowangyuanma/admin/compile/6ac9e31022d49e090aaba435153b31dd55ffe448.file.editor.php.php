<?php /* Smarty version Smarty-3.1.3, created on 2016-12-04 17:04:25
         compiled from "templates/default/admin\module\editor.php" */ ?>
<?php /*%%SmartyHeaderCode:29615843dc19d4ff24-74015588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ac9e31022d49e090aaba435153b31dd55ffe448' => 
    array (
      0 => 'templates/default/admin\\module\\editor.php',
      1 => 1480799900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29615843dc19d4ff24-74015588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'editor_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_5843dc19d7703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5843dc19d7703')) {function content_5843dc19d7703($_smarty_tpl) {?>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.js"></script>
<script id="editor" name="editor" type="text/plain"><?php echo $_smarty_tpl->tpl_vars['editor_text']->value;?>
</script>

<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>

<!-- E数云 --><?php }} ?>