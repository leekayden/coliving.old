<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\crossselling\crossselling.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1203e111_67280932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86cd1a8981d4eb053e931dade6aa331cc62a9567' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\crossselling\\crossselling.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1203e111_67280932 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['orderProducts']->value)) && count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
	<section id="crossselling" class="page-product-box">
		<h3 class="productscategory_h2 page-product-heading">
			<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'product') {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend','mod'=>'crossselling'),$_smarty_tpl ) );?>

			<?php }?>
		</h3>
		<div id="crossselling_list">
			<ul id="crossselling_list_car" class="clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderProducts']->value, 'orderProduct', false, NULL, 'orderProduct', array (
));
$_smarty_tpl->tpl_vars['orderProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->do_else = false;
?>
					<li class="product-box item" itemprop="isRelatedTo" itemscope itemtype="https://schema.org/Product">
						<a class="lnk_img product-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" >
							<img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" />
						</a>
						<div class="s_title_block">
							<h5 itemprop="name" class="product-name">
								<a itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
									<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...' )), ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</h5>
							
							<?php if ((isset($_smarty_tpl->tpl_vars['orderProduct']->value['description_short']))) {?><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['orderProduct']->value['description_short']),50,'...' ));?>
</p><?php }?>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value && $_smarty_tpl->tpl_vars['orderProduct']->value['show_price'] == 1 && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<p class="price_display">
								<span class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl ) );?>
</span>
							</p>
						<?php }?>
						<div class="clearfix" style="margin-top:5px">
							<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && ($_smarty_tpl->tpl_vars['orderProduct']->value['allow_oosp'] || $_smarty_tpl->tpl_vars['orderProduct']->value['quantity'] > 0)) {?>
								<div class="no-print">
									<a class="exclusive button ajax_add_to_cart_button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);
$_prefixVariable19=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,NULL,"qty=1&amp;id_product=".$_prefixVariable19."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['orderProduct']->value['id_product']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'crossselling'),$_smarty_tpl ) );?>
">
										<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'crossselling'),$_smarty_tpl ) );?>
</span>
									</a>
								</div>
							<?php }?>
						</div>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	</section>
<?php }
}
}
