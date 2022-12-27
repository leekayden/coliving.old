<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\cart_rules\product_rule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11029c38_07868325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f050dbdd4c36cbd21dcb1bbe1d479ef7f5e80bd' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\cart_rules\\product_rule.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11029c38_07868325 (Smarty_Internal_Template $_smarty_tpl) {
?><tr id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_tr">
	<td>
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
" />
		<input type="hidden" name="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_rule_type']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
				[<?php if ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'products') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room types:'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'categories') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories:'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'manufacturers') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manufacturers:'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'suppliers') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'attributes') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attributes'),$_smarty_tpl ) );
}?>]
	</td>
	<td>
		<input type="text" id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_match" value="" disabled="disabled" />
	</td>
	<td>
		<a class="btn btn-default" id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link" href="#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
			<i class="icon-list-ul"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose'),$_smarty_tpl ) );?>

		</a>
		<div>
			<div id="product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content">
				<?php echo $_smarty_tpl->tpl_vars['product_rule_choose_content']->value;?>

			</div>
		</div>
	</td>
	<td class="text-right">
		<a class="btn btn-default" href="javascript:removeProductRule(<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
, <?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
);">
			<i class="icon-remove"></i>
		</a>
	</td>
</tr>

<?php echo '<script'; ?>
 type="text/javascript">
	$('#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_content').parent().hide();
	$("#product_rule_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_choose_link").fancybox({
		autoDimensions: false,
		autoSize: false,
		width: 600,
		height: 250});
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_group_id']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product_rule_id']->value);?>
_add')); });
<?php echo '</script'; ?>
><?php }
}
