<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\tracking\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1429da18_33139136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ec45ab00dc02c1c2e0086f0ef54dba6afa7964' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\tracking\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1429da18_33139136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1297332114639e8c1429c320_93279619', "preTable");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block "preTable"} */
class Block_1297332114639e8c1429c320_93279619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'preTable' => 
  array (
    0 => 'Block_1297332114639e8c1429c320_93279619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['list_id']->value == 'empty_categories') {?>
		<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block "preTable"} */
}
