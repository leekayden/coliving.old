<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:09:42
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\preferences\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaee96b2fd92_91584285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cbaae5a0f2143b2f5c65115bf8695c182db6ccd' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\preferences\\helpers\\options\\options.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaee96b2fd92_91584285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75595430663aaee96b258e5_47255572', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_75595430663aaee96b258e5_47255572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_75595430663aaee96b258e5_47255572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'disabled') {?>
		<?php echo $_smarty_tpl->tpl_vars['field']->value['disabled'];?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
