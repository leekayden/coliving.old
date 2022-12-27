<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:51:42
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\helpers\list\list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaea5e2715c4_03857601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cffce88202eda571227a89df6b890206981f6787' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaea5e2715c4_03857601 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }
}
