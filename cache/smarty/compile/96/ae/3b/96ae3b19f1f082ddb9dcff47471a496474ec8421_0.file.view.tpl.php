<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:24:38
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\payment\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaf216506948_97741853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96ae3b19f1f082ddb9dcff47471a496474ec8421' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\payment\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/payment/restrictions.tpl' => 1,
  ),
),false)) {
function content_63aaf216506948_97741853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55036033063aaf2164e5ab4_37784343', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_55036033063aaf2164e5ab4_37784343 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_55036033063aaf2164e5ab4_37784343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (!$_smarty_tpl->tpl_vars['shop_context']->value) {?>
		<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have more than one shop and must select one to configure payment.'),$_smarty_tpl ) );?>
</div>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['modules_list']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['modules_list']->value;?>

		<?php }?>
		<div class="alert alert-info">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This is where you decide what payment modules are available for different variations like your customers\' currency, group, and country.'),$_smarty_tpl ) );?>

			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A check mark indicates you want the payment module available.'),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If it is not checked then this means that the payment module is disabled.'),$_smarty_tpl ) );?>

			<br />
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please make sure to click Save for each section.'),$_smarty_tpl ) );?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['display_restrictions']->value) {?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
				<?php $_smarty_tpl->_subTemplateRender('file:controllers/payment/restrictions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php } else { ?>
			<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment module installed'),$_smarty_tpl ) );?>
</div>
		<?php }?>
	<?php }
}
}
/* {/block "override_tpl"} */
}
