<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:51:41
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\products\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaea5d15abf6_72649063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '973b7ec406e73157d0be20e6a178acd299b21667' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\products\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaea5d15abf6_72649063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63698821263aaea5d159237_36452600', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_63698821263aaea5d159237_36452600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_63698821263aaea5d159237_36452600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['category_tree']->value))) {?>
		<div class="bloc-leadin">
			<div id="container_category_tree">
				<?php echo $_smarty_tpl->tpl_vars['category_tree']->value;?>

			</div>
		</div>
	<?php }
}
}
/* {/block 'leadin'} */
}
