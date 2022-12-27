<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockwishlist\blockwishlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11b332b7_85199765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a37f78561b7df6a44db7459d3ad829860dced032' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockwishlist\\blockwishlist.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11b332b7_85199765 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="wishlist_block" class="block account">
	<h4 class="title_block">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" rel="nofollow">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

		</a>
	</h4>
	<div class="block_content">
		<div id="wishlist_block_list" class="expanded">
			<?php if ($_smarty_tpl->tpl_vars['wishlist_products']->value) {?>
				<dl class="products">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlist_products']->value, 'product', false, NULL, 'i', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
						<dt class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
							<span class="quantity-formated">
								<span class="quantity"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
</span>x
							</span>
							<a class="cart_block_product_name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8', true);?>

							</a>
							<a class="ajax_cart_block_remove_link" href="javascript:;" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'remove this product from my wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '0', '<?php if ((isset($_smarty_tpl->tpl_vars['token']->value))) {
echo $_smarty_tpl->tpl_vars['token']->value;
}?>');">
								<i class="icon-remove-sign "></i>
							</a>
						</dt>
						<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
							<dd class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?>">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail'),$_smarty_tpl ) );?>
">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</dd>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</dl>
			<?php } else { ?>
				<dl class="products no-products">
					<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</dt>
					<dd></dd>
				</dl>
			<?php }?>
		</div> <!-- #wishlist_block_list -->

		<div class="lnk">
			<?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
				<div class="form-group selector1">
					<select name="wishlists" id="wishlists" class="form-control">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'i', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'];?>
"<?php if ($_smarty_tpl->tpl_vars['id_wishlist']->value == $_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'] || ($_smarty_tpl->tpl_vars['id_wishlist']->value == false && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['first'] : null))) {?> selected="selected"<?php }?>>
									<?php echo mb_convert_encoding(htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['wishlist']->value['name'],22,'...' )), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			<?php }?>
			<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
				<span>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
				</span>
			</a>
		</div> <!-- .lnk -->
	</div> <!-- .block_content -->
</div> <!-- #wishlist_block -->
<?php }
}
