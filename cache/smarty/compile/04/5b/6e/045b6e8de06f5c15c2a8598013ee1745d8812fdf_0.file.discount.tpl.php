<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\discount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10babc64_50541515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '045b6e8de06f5c15c2a8598013ee1745d8812fdf' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\discount.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10babc64_50541515 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>
</a><span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<h1 class="page-heading">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My vouchers'),$_smarty_tpl ) );?>

</h1>

<?php if ((isset($_smarty_tpl->tpl_vars['cart_rules']->value)) && $_smarty_tpl->tpl_vars['nb_cart_rules']->value) {?>
	<table class="discount table table-bordered footab">
		<thead>
			<tr>
				<th data-sort-ignore="true" class="discount_code first_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Code'),$_smarty_tpl ) );?>
</th>
				<th data-sort-ignore="true" class="discount_description item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description'),$_smarty_tpl ) );?>
</th>
				<th class="discount_quantity item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity'),$_smarty_tpl ) );?>
</th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="discount_value item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>
</th>
				<th data-hide="phone,tablet" class="discount_minimum item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minimum'),$_smarty_tpl ) );?>
</th>
				<th data-sort-ignore="true" data-hide="phone,tablet" class="discount_cumulative item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cumulative'),$_smarty_tpl ) );?>
</th>
				<th data-hide="phone" class="discount_expiration_date last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiration date'),$_smarty_tpl ) );?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_rules']->value, 'discountDetail', false, NULL, 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['discountDetail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discountDetail']->value) {
$_smarty_tpl->tpl_vars['discountDetail']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
				<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2) {?>alternate_item<?php }?>">
					<td class="discount_code"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['code'];?>
</td>
					<td class="discount_description"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['name'];?>
</td>
					<td data-value="<?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['quantity_for_user'];?>
" class="discount_quantity"><?php echo $_smarty_tpl->tpl_vars['discountDetail']->value['quantity_for_user'];?>
</td>
					<td class="discount_value">
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'] > 0) {?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'], ENT_QUOTES, 'UTF-8', true);?>
%
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount'] > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'] > 0) {?> + <?php }?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount']),$_smarty_tpl ) );?>
 (<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_tax'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded'),$_smarty_tpl ) );
}?>)
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['free_shipping']) {?>
							<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'] > 0 || $_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount'] > 0) {?> + <?php }?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping'),$_smarty_tpl ) );?>

						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product'] > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['reduction_percent'] > 0 || $_smarty_tpl->tpl_vars['discountDetail']->value['reduction_amount'] > 0) {?> + <?php }?>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_link'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_name'], ENT_QUOTES, 'UTF-8', true);?>

								<?php if ((isset($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_attributes'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_attributes'], $tmp)) {?>
								 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discountDetail']->value['gift_product_attributes'], ENT_QUOTES, 'UTF-8', true);?>
)
								<?php }?>
							</a>
						<?php }?>
					</td>
					<td class="discount_minimum" data-value="<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimal'] == 0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['discountDetail']->value['minimal'];
}?>">
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimal'] == 0) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discountDetail']->value['minimal']),$_smarty_tpl ) );?>
 (<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['minimum_amount_tax'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded'),$_smarty_tpl ) );
}?>)
						<?php }?>
					</td>
					<td class="discount_cumulative">
						<?php if ($_smarty_tpl->tpl_vars['discountDetail']->value['cumulable'] == 1) {?>
							<i class="icon-ok icon"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<i class="icon-remove icon"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

						<?php }?>
					</td>
					<td class="discount_expiration_date" data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['discountDetail']->value['date_to'],"/[\-\:\ ]/",'');?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['discountDetail']->value['date_to']),$_smarty_tpl ) );?>

					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
<?php } else { ?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You do not have any vouchers.'),$_smarty_tpl ) );?>
</p>
<?php }?>

<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<span>
				<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>

			</span>
		</a>
	</li>
	<li>
		<a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
			<span>
				<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>

			</span>
		</a>
	</li>
</ul>
<?php }
}
