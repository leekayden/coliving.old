<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\shop\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13a14a03_58643539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '238817fade13f3427dd2452a70828224a10a0a54' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\list\\list_content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13a14a03_58643539 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1707615298639e8c13a02aa1_22908041', "open_td");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1831578673639e8c13a0fe59_97172335', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "open_td"} */
class Block_1707615298639e8c13a02aa1_22908041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_1707615298639e8c13a02aa1_22908041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'url') {?>
		<td<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['position']))) {?> id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count')-1));
}?>"<?php }?> class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if ((isset($_smarty_tpl->tpl_vars['params']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if ((isset($_smarty_tpl->tpl_vars['params']->value['align']))) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>">
	<?php } else { ?>
		<td class="pointer" onclick="document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_index']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;shop_id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['view']->value) {?>&amp;view<?php } else { ?>&amp;update<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
'">
	<?php }
}
}
/* {/block "open_td"} */
/* {block "td_content"} */
class Block_1831578673639e8c13a0fe59_97172335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_1831578673639e8c13a0fe59_97172335',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'url') {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]))) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" onmouseover="$(this).css('text-decoration', 'underline')" onmouseout="$(this).css('text-decoration', 'none')" class="_blank"><?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</a>
		<?php } else { ?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminShopUrl'), ENT_QUOTES, 'UTF-8', true);?>
&amp;shop_id=<?php echo intval($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value]);?>
&amp;addshop_url" class="multishop_warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here to set a URL for this shop.'),$_smarty_tpl ) );?>
</a>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
