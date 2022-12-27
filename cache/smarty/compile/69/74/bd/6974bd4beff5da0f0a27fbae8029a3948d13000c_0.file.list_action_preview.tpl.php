<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:51:42
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\helpers\list\list_action_preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaea5e3126e8_63747778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6974bd4beff5da0f0a27fbae8029a3948d13000c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaea5e3126e8_63747778 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
