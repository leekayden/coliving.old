<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:51:42
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\helpers\list\list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaea5e49a1f7_66584445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a4dfeab604721d1804c5aaea17c2a8d2c16d3f0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaea5e49a1f7_66584445 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['confirm']->value))) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }
}
