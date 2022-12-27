<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:13
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\tree\tree_toolbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c15199997_75896054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2946f75c22076f95e633350119a7704d052c5cb3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c15199997_75896054 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-actions pull-right">
	<?php if ((isset($_smarty_tpl->tpl_vars['actions']->value))) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }?>
</div><?php }
}
