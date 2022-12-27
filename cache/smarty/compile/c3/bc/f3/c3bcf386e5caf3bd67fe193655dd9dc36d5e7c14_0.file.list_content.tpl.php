<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\tabs\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c140653f6_20602888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3bcf386e5caf3bd67fe193655dd9dc36d5e7c14' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\tabs\\helpers\\list\\list_content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c140653f6_20602888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11330673639e8c1405d942_81686277', "open_td");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "open_td"} */
class Block_11330673639e8c1405d942_81686277 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_11330673639e8c1405d942_81686277',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<td
					<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?>
						id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"
					<?php }?>
					class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['position'])) && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?> dragHandle<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>"
					<?php if ((!(isset($_smarty_tpl->tpl_vars['params']->value['position'])) && !$_smarty_tpl->tpl_vars['no_link']->value && !(isset($_smarty_tpl->tpl_vars['params']->value['remove_onclick'])))) {?>
						onclick="document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_index']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8', true);?>
=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value], ENT_QUOTES, 'UTF-8', true);?>
&amp;details<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
'">
					<?php } else { ?>
					>
					<?php }?>
			<?php
}
}
/* {/block "open_td"} */
}
