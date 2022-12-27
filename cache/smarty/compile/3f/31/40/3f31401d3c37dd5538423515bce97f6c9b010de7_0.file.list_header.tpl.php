<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\shop\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13a39d42_63254397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f31401d3c37dd5538423515bce97f6c9b010de7' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13a39d42_63254397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1309748423639e8c13a36a25_75609839', "startForm");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "startForm"} */
class Block_1309748423639e8c13a36a25_75609839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'startForm' => 
  array (
    0 => 'Block_1309748423639e8c13a36a25_75609839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_assignInScope('action', smarty_modifier_replace($_smarty_tpl->tpl_vars['action']->value,'id_shop','shop_id'));?>
	<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal clearfix" id="form-<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
<?php
}
}
/* {/block "startForm"} */
}
