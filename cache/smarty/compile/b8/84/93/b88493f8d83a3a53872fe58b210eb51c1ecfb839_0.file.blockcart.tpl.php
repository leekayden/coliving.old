<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockcart\blockcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c112e5ba2_12977381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88493f8d83a3a53872fe58b210eb51c1ecfb839' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockcart\\blockcart.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c112e5ba2_12977381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>
<!-- MODULE Block cart -->
<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && $_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
<div class="clearfix<?php if ($_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?> header_user_catalog<?php }?> nav_menu_padding pull-right">
<?php }?>
	<div class="shopping_cart">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['order_process']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my booking cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
			<!-- <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
</b> -->
			<span class="badge badge_style ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value == 0) {?> unvisible<?php }?>"><?php echo $_smarty_tpl->tpl_vars['total_rooms_in_cart']->value;?>
</span>
			<!-- <span class="ajax_cart_product_txt<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value != 1) {?> unvisible<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span> -->
			<!-- <span class="ajax_cart_product_txt_s<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value < 2) {?> unvisible<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span> -->
			<span class="ajax_cart_total<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value == 0) {?> unvisible<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
					<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
						<?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('blockcart_cart_flag', constant('Cart::BOTH_WITHOUT_SHIPPING'));?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['blockcart_cart_flag']->value)),$_smarty_tpl ) );?>

					<?php }?>
				<?php }?>
			</span>
			<span class="badge badge_style ajax_cart_no_product<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?> unvisible<?php }?>">0</span>
			<?php if ($_smarty_tpl->tpl_vars['ajax_allowed']->value && (isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && !$_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
				<span class="block_cart_expand<?php if (!(isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) || ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'expanded')) {?> unvisible<?php }?>">&nbsp;</span>
				<span class="block_cart_collapse<?php if ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'collapsed') {?> unvisible<?php }?>">&nbsp;</span>
			<?php }?>
		</a>
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
			<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && !$_smarty_tpl->tpl_vars['blockcart_top']->value) {
if ((isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value)) && $_smarty_tpl->tpl_vars['colapseExpandStatus']->value == 'expanded' || !$_smarty_tpl->tpl_vars['ajax_allowed']->value || !(isset($_smarty_tpl->tpl_vars['colapseExpandStatus']->value))) {?> expanded<?php } else { ?> collapsed unvisible<?php }
}?>">
						<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
							<dl class="products">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'data_k', 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
									<?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
									<?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
									<dt data-id="cart_block_product_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
} else { ?>0<?php }?>_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
} else { ?>0<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
										<a class="cart-images" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'cart_default');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
										<div class="cart-info">
											<div class="product-name">
											<!-- quantity changed for number of rooms -->
												<!-- <span class="quantity-formated"><span class="quantity"><?php echo $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['total_num_rooms'];?>
</span>&nbsp;x&nbsp;</span> -->
												<a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...',true )), ENT_QUOTES, 'UTF-8', true);?>
</a>
											</div>
											<!-- extra fields added by webkul to show on the cart  -->
											<div class="room-capacity cart-info-sec">
												<span class="product_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Capacity','mod'=>'blockcart'),$_smarty_tpl ) );?>
:</span>
												<span class="product_info_data">&nbsp;<?php echo $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['adult'];?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults','mod'=>'blockcart'),$_smarty_tpl ) );?>
&nbsp;&&nbsp;<?php echo $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['children'];?>
&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
											</div>

											<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
												<div class="product-atributes">
													<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value,$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockcart'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['attributes_small'];?>
</a>
												</div>
											<?php }?>
											<div class="cart-info-sec rm_product_info_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
												<span class="product_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart'),$_smarty_tpl ) );?>
:</span>
												<span class="price product_info_data" ttl_prod_price=<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo $_smarty_tpl->tpl_vars['product']->value['total'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['total_wt'];
}?>>
													<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
														<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>((string)$_smarty_tpl->tpl_vars['product']->value['total'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>((string)$_smarty_tpl->tpl_vars['product']->value['total_wt'])),$_smarty_tpl ) );
}?>
	                                                    <div id="hookDisplayProductPriceBlock-price">
	                                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price",'from'=>"blockcart"),$_smarty_tpl ) );?>

	                                                    </div>
													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free!','mod'=>'blockcart'),$_smarty_tpl ) );?>

													<?php }?>
												</span>
											</div>

											<div class="cart-info-sec rm_product_info_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
">
												<span class="product_info_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Qty.','mod'=>'blockcart'),$_smarty_tpl ) );?>
:</span>
												<span class="quantity-formated">
													<span class="quantity product_info_data"><?php echo $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['total_num_rooms'];?>
</span>
												</span>
											</div>
										</div>
										<span class="remove_link">
											<?php if (!(isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) && (!(isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])) || !$_smarty_tpl->tpl_vars['product']->value['is_gift'])) {?>
												<a class="ajax_cart_block_remove_link" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable8=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable9=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
$_prefixVariable10=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&id_product=".$_prefixVariable8."&ipa=".$_prefixVariable9."&id_address_delivery=".$_prefixVariable10."&token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this product from my cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
">&nbsp;</a>
											<?php }?>
										</span>
										<div style="clear:both"></div>
										<div id="booking_dates_container_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" class="cart_prod_cont">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
															<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty.','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
															<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart'),$_smarty_tpl ) );?>
</th>
															<th>&nbsp;<!-- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'blockcart'),$_smarty_tpl ) );?>
 --></th>
														</tr>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_booking_data']->value[$_smarty_tpl->tpl_vars['data_k']->value]['date_diff'], 'data_v', false, 'data_k1');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k1']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
															<tr class="rooms_remove_container">
																<td>
																	<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_v']->value['data_form'],"%d %b %Y");?>
&nbsp;-&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data_v']->value['data_to'],"%d %b %Y");?>

																</td>
																<td class="num_rooms_in_date"><?php echo $_smarty_tpl->tpl_vars['data_v']->value['num_rm'];?>
</td>
																<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['data_v']->value['amount']),$_smarty_tpl ) );?>
</td>
																<td><a class="remove_rooms_from_cart_link" href="#" rm_price="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['amount'];?>
" id_product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" date_from="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['data_form'];?>
" date_to="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['data_to'];?>
" num_rooms="<?php echo $_smarty_tpl->tpl_vars['data_v']->value['num_rm'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this room from my cart','mod'=>'blockcart'),$_smarty_tpl ) );?>
"></a></td>
															</tr>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</tbody>
												</table>
											</div>
										</div>
									</dt>
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
										<dd data-id="cart_block_combination_of_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
}?>_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
									<?php }?>
									<!-- Customizable datas -->
									<?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']]))) {?>
										<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
											<dd data-id="cart_block_combination_of_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
} else { ?>0<?php }?>_<?php if ($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']) {
echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);
} else { ?>0<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
										<?php }?>
										<ul class="cart_block_customizations" data-id="customization_<?php echo $_smarty_tpl->tpl_vars['productId']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['productAttributeId']->value;?>
">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value][$_smarty_tpl->tpl_vars['product']->value['id_address_delivery']], 'customization', false, 'id_customization', 'customizations', array (
));
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id_customization']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
												<li name="customization">
													<div data-id="deleteCustomizableProduct_<?php echo intval($_smarty_tpl->tpl_vars['id_customization']->value);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
" class="deleteCustomizableProduct">
														<a class="ajax_cart_block_remove_link" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);
$_prefixVariable11=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);
$_prefixVariable12=ob_get_clean();
ob_start();
echo intval($_smarty_tpl->tpl_vars['id_customization']->value);
$_prefixVariable13=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"delete=1&id_product=".$_prefixVariable11."&ipa=".$_prefixVariable12."&id_customization=".$_prefixVariable13."&token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow">&nbsp;</a>
													</div>
													<?php if ((isset($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value][0]))) {?>
														<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['customization']->value['datas'][$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value][0]['value'],"<br />"," "),28,'...' )), ENT_QUOTES, 'UTF-8', true);?>

													<?php } else { ?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization #%d:','sprintf'=>intval($_smarty_tpl->tpl_vars['id_customization']->value),'mod'=>'blockcart'),$_smarty_tpl ) );?>

													<?php }?>
												</li>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</ul>
										<?php if (!(isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?></dd><?php }?>
									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?></dd><?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</dl>
						<?php }?>
						<p class="cart_block_no_products<?php if ($_smarty_tpl->tpl_vars['products']->value) {?> unvisible<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','mod'=>'blockcart'),$_smarty_tpl ) );?>

						</p>
						<?php if (count($_smarty_tpl->tpl_vars['discounts']->value) > 0) {?>
							<table class="vouchers<?php if (count($_smarty_tpl->tpl_vars['discounts']->value) == 0) {?> unvisible<?php }?>">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['discount']->value['value_real'] > 0) {?>
										<tr class="bloc_cart_voucher" data-id="bloc_cart_voucher_<?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
">
											<td class="quantity">1x</td>
											<td class="name" title="<?php echo $_smarty_tpl->tpl_vars['discount']->value['description'];?>
">
												<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['discount']->value['name'],18,'...' )), ENT_QUOTES, 'UTF-8', true);?>

											</td>
											<td class="price">
												-<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_tax_exc']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value_real']),$_smarty_tpl ) );
}?>
											</td>
											<td class="delete">
												<?php if (strlen($_smarty_tpl->tpl_vars['discount']->value['code'])) {?>
													<a class="delete_voucher" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true);?>
?deleteDiscount=<?php echo intval($_smarty_tpl->tpl_vars['discount']->value['id_discount']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
														<i class="icon-remove-sign"></i>
													</a>
												<?php }?>
											</td>
										</tr>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</table>
						<?php }?>
						<div class="cart-prices">
							<!-- <div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost<?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && $_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0) {?>
										 <?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart'),$_smarty_tpl ) );
}?>
									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>

									<?php }?>
								</span>
								<span<?php if (!($_smarty_tpl->tpl_vars['page_name']->value == 'order-opc') && $_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> class="unvisible"<?php }?>>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','mod'=>'blockcart'),$_smarty_tpl ) );?>

								</span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['show_wrapping']->value) {?>
								<div class="cart-prices-line">
									<?php $_smarty_tpl->_assignInScope('cart_flag', constant('Cart::ONLY_WRAPPING'));?>
									<span class="price cart_block_wrapping_cost">
										<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,$_smarty_tpl->tpl_vars['cart_flag']->value)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,$_smarty_tpl->tpl_vars['cart_flag']->value)),$_smarty_tpl ) );?>

										<?php }?>
									</span>
									<span>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping','mod'=>'blockcart'),$_smarty_tpl ) );?>

									</span>
							   </div>
							<?php }?> --><!-- commented by webkul unnecessary data -->
							<?php if ($_smarty_tpl->tpl_vars['show_tax']->value && (isset($_smarty_tpl->tpl_vars['tax_cost']->value))) {?>
								<div class="cart-prices-line">
									<span class="price cart_block_tax_cost ajax_cart_tax_cost"><?php echo $_smarty_tpl->tpl_vars['tax_cost']->value;?>
</span>
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
								</div>
							<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['total_extra_demands']->value))) {?>
								<div class="cart-prices-line">
									<span class="price cart_block_additional_facilities_cost ajax_cart_extra_demands_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_extra_demands']->value),$_smarty_tpl ) );?>
</span>
									<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities Cost','mod'=>'blockcart'),$_smarty_tpl ) );?>
</strong>
								</div>
							<?php }?>
							<div class="cart-prices-line last-line">
								<span class="price cart_block_total ajax_block_cart_total" total_cart_price="<?php echo $_smarty_tpl->tpl_vars['totalToPay']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
								<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl ) );?>
</span>
							</div>
							<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value == 1 && $_smarty_tpl->tpl_vars['show_tax']->value) {?>
								<p>
								<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 0) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prices are tax included','mod'=>'blockcart'),$_smarty_tpl ) );?>

								<?php } elseif ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prices are tax excluded','mod'=>'blockcart'),$_smarty_tpl ) );?>

								<?php }?>
								</p>
							<?php }?>
						</div>
						<p class="cart-buttons">
							<a id="button_order_cart" class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
								<span>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check out','mod'=>'blockcart'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div><!-- .cart_block -->
		<?php }?>
	</div>
<?php if ((isset($_smarty_tpl->tpl_vars['blockcart_top']->value)) && $_smarty_tpl->tpl_vars['blockcart_top']->value) {?>
</div>
<?php }
echo smarty_function_counter(array('name'=>'active_overlay','assign'=>'active_overlay'),$_smarty_tpl);?>

<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && $_smarty_tpl->tpl_vars['active_overlay']->value == 1) {?>
	<div id="layer_cart">
		<div class="clearfix">
			<div class="layer_cart_product col-xs-12 col-md-6">
				<span class="cross" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close window','mod'=>'blockcart'),$_smarty_tpl ) );?>
"></span>
				<h2>
					<i class="icon-check"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room successfully added to your cart','mod'=>'blockcart'),$_smarty_tpl ) );?>

				</h2>
				<div class="product-image-container layer_cart_img">
				</div>
				<div class="layer_cart_product_info">
					<span id="layer_cart_product_title" class="product-name"></span>
					<span id="layer_cart_product_attributes"></span>
					<div>
						<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time Duration','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
						<span id="layer_cart_product_time_duration"></span>
					</div>
					<div>
						<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms Quantity Added','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
						<span id="layer_cart_product_quantity"></span>
					</div>
					<div>
						<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Cart Cost of This Room Type','mod'=>'blockcart'),$_smarty_tpl ) );?>
 &nbsp;-&nbsp;</strong>
						<span id="layer_cart_product_price"></span>
					</div>
				</div>
			</div>
			<div class="layer_cart_cart col-xs-12 col-md-6">
				<h2>
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value < 2) {?> unvisible<?php }?>">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are [1]%d[/1] room(s) in your cart.','mod'=>'blockcart','sprintf'=>array($_smarty_tpl->tpl_vars['cart_qties']->value),'tags'=>array('<span class="ajax_cart_quantity">')),$_smarty_tpl ) );?>

					</span>

					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt <?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 1) {?> unvisible<?php }?>">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1 room in your cart.','mod'=>'blockcart'),$_smarty_tpl ) );?>

					</span>
				</h2>

				<div class="layer_cart_row">
					<strong class="dark">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost in cart','mod'=>'blockcart'),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

							<?php }?>
						<?php }?>
					</strong>
					<span class="ajax_block_products_total">
						<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,Cart::ONLY_PRODUCTS)),$_smarty_tpl ) );?>

						<?php }?>
					</span>
				</div>

				<!-- <?php if ($_smarty_tpl->tpl_vars['show_wrapping']->value) {?>
					<div class="layer_cart_row">
						<strong class="dark">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping','mod'=>'blockcart'),$_smarty_tpl ) );?>

							<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value && $_smarty_tpl->tpl_vars['display_tax_label']->value && $_smarty_tpl->tpl_vars['show_tax']->value) {?>
								<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

								<?php }?>
							<?php }?>
						</strong>
						<span class="price cart_block_wrapping_cost">
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false,Cart::ONLY_WRAPPING)),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true,Cart::ONLY_WRAPPING)),$_smarty_tpl ) );?>

							<?php }?>
						</span>
					</div>
				<?php }?> -->
				<!-- <div class="layer_cart_row">
					<strong class="dark<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total shipping','mod'=>'blockcart'),$_smarty_tpl ) );?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {
if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );
}
}?>
					</strong>
					<span class="ajax_cart_shipping_cost<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0 && (!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {?> unvisible<?php }?>">
						<?php if ($_smarty_tpl->tpl_vars['shipping_cost_float']->value == 0) {?>
							 <?php if ((!(isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) || !$_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart'),$_smarty_tpl ) );
}?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['shipping_cost']->value;?>

						<?php }?>
					</span>
				</div> -->
				<?php if ((isset($_smarty_tpl->tpl_vars['total_extra_demands']->value))) {?>
					<div class="layer_cart_row">
						<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Additional Facilities Cost','mod'=>'blockcart'),$_smarty_tpl ) );?>
</strong>
						<span class="price ajax_cart_extra_demands_cost"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_extra_demands']->value),$_smarty_tpl ) );?>
</span>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_tax']->value && (isset($_smarty_tpl->tpl_vars['tax_cost']->value))) {?>
					<div class="layer_cart_row">
						<strong class="dark"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax','mod'=>'blockcart'),$_smarty_tpl ) );?>
</strong>
						<span class="price cart_block_tax_cost ajax_cart_tax_cost"><?php echo $_smarty_tpl->tpl_vars['tax_cost']->value;?>
</span>
					</div>
				<?php }?>
				<div class="layer_cart_row">
					<strong class="dark">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'blockcart'),$_smarty_tpl ) );?>

						<?php if ($_smarty_tpl->tpl_vars['display_tax_label']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax excl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(tax incl.)','mod'=>'blockcart'),$_smarty_tpl ) );?>

							<?php }?>
						<?php }?>
					</strong>
					<span class="ajax_block_cart_total">
						<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(false)),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['cart']->value->getOrderTotal(true)),$_smarty_tpl ) );?>

							<?php }?>
						<?php }?>
					</span>
				</div>
				<div class="button-container">
					<span class="continue btn btn-default button exclusive-medium" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue browsing','mod'=>'blockcart'),$_smarty_tpl ) );?>
">
						<span>
							<i class="icon-chevron-left left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue browsing','mod'=>'blockcart'),$_smarty_tpl ) );?>

						</span>
					</span>
					<a class="btn btn-default button button-medium"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink(((string)$_smarty_tpl->tpl_vars['order_process']->value),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','mod'=>'blockcart'),$_smarty_tpl ) );?>
" rel="nofollow">
						<span>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','mod'=>'blockcart'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>
<?php }
$_block_plugin18 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin18, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'someErrorCondition'));
$_block_repeat=true;
echo $_block_plugin18->addJsDefL(array('name'=>'someErrorCondition'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some Error occured.Please try again.','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin18->addJsDefL(array('name'=>'someErrorCondition'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('CUSTOMIZE_TEXTFIELD'=>$_smarty_tpl->tpl_vars['CUSTOMIZE_TEXTFIELD']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('img_dir'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['img_dir']->value)),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('generated_date'=>intval(time())),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('ajax_allowed'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_allowed']->value ))),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('hasDeliveryAddress'=>((isset($_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)) && $_smarty_tpl->tpl_vars['cart']->value->id_address_delivery)),$_smarty_tpl ) );
$_block_plugin19 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin19, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'customizationIdMessage'));
$_block_repeat=true;
echo $_block_plugin19->addJsDefL(array('name'=>'customizationIdMessage'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customization #','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin19->addJsDefL(array('name'=>'customizationIdMessage'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin20 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin20, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'removingLinkText'));
$_block_repeat=true;
echo $_block_plugin20->addJsDefL(array('name'=>'removingLinkText'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this product from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin20->addJsDefL(array('name'=>'removingLinkText'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin21 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin21, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'freeShippingTranslation'));
$_block_repeat=true;
echo $_block_plugin21->addJsDefL(array('name'=>'freeShippingTranslation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free shipping!','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin21->addJsDefL(array('name'=>'freeShippingTranslation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin22 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin22, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'freeProductTranslation'));
$_block_repeat=true;
echo $_block_plugin22->addJsDefL(array('name'=>'freeProductTranslation'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free!','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin22->addJsDefL(array('name'=>'freeProductTranslation'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin23 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin23, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'delete_txt'));
$_block_repeat=true;
echo $_block_plugin23->addJsDefL(array('name'=>'delete_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin23->addJsDefL(array('name'=>'delete_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin24 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin24, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'toBeDetermined'));
$_block_repeat=true;
echo $_block_plugin24->addJsDefL(array('name'=>'toBeDetermined'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To be determined','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin24->addJsDefL(array('name'=>'toBeDetermined'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!-- /MODULE Block cart -->

<!-- ################################################################### -->
<!-- By webkul to send needed variable in ajax-cart.js -->
<!-- ################################################################### -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('module_dir'=>$_smarty_tpl->tpl_vars['module_dir']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_sign'=>$_smarty_tpl->tpl_vars['currency']->value->sign),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('room_warning_num'=>$_smarty_tpl->tpl_vars['warning_num']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_format'=>$_smarty_tpl->tpl_vars['currency']->value->format),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('currency_blank'=>$_smarty_tpl->tpl_vars['currency']->value->blank),$_smarty_tpl ) );?>

<?php $_block_plugin25 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin25, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'adults_txt'));
$_block_repeat=true;
echo $_block_plugin25->addJsDefL(array('name'=>'adults_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin25->addJsDefL(array('name'=>'adults_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin26 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin26, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'children_txt'));
$_block_repeat=true;
echo $_block_plugin26->addJsDefL(array('name'=>'children_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin26->addJsDefL(array('name'=>'children_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin27 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin27, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'price_txt'));
$_block_repeat=true;
echo $_block_plugin27->addJsDefL(array('name'=>'price_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin27->addJsDefL(array('name'=>'price_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin28 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin28, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'total_qty_txt'));
$_block_repeat=true;
echo $_block_plugin28->addJsDefL(array('name'=>'total_qty_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Qty.','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin28->addJsDefL(array('name'=>'total_qty_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin29 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin29, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'qty_txt'));
$_block_repeat=true;
echo $_block_plugin29->addJsDefL(array('name'=>'qty_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin29->addJsDefL(array('name'=>'qty_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin30 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin30, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'duration_txt'));
$_block_repeat=true;
echo $_block_plugin30->addJsDefL(array('name'=>'duration_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin30->addJsDefL(array('name'=>'duration_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin31 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin31, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'capacity_txt'));
$_block_repeat=true;
echo $_block_plugin31->addJsDefL(array('name'=>'capacity_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Capacity','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin31->addJsDefL(array('name'=>'capacity_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin32 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin32, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'remove_rm_title'));
$_block_repeat=true;
echo $_block_plugin32->addJsDefL(array('name'=>'remove_rm_title'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this room from my cart','mod'=>'blockcart','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin32->addJsDefL(array('name'=>'remove_rm_title'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('rm_avail_process_lnk'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockcart','checkroomavailabilityajaxprocess')),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('pagename'=>$_smarty_tpl->tpl_vars['current_page']->value),$_smarty_tpl ) );?>


<!-- ################################################################### -->
<!-- End -->
<!-- ################################################################### --><?php }
}
