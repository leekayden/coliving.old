<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockwishlist\views\templates\front\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11d02766_51880339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cfbf602b0188cb19860fdfd281e96a52ca732b0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockwishlist\\views\\templates\\front\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11d02766_51880339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
<div id="view_wishlist">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</a>
        <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</a>
        <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current_wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <h1 class="page-heading bottom-indent">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'blockwishlist'),$_smarty_tpl ) );?>

    </h1>
    <?php if ($_smarty_tpl->tpl_vars['wishlists']->value) {?>
        <p>
            <strong class="dark">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other wishlists of %1s %2s:','sprintf'=>array($_smarty_tpl->tpl_vars['current_wishlist']->value['firstname'],$_smarty_tpl->tpl_vars['current_wishlist']->value['lastname']),'mod'=>'blockwishlist'),$_smarty_tpl ) );?>

            </strong>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wishlists']->value, 'wishlist', false, NULL, 'i', array (
  'last' => true,
  'total' => true,
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['wishlist']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wishlist']->value) {
$_smarty_tpl->tpl_vars['wishlist']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
                <?php if ($_smarty_tpl->tpl_vars['wishlist']->value['id_wishlist'] != $_smarty_tpl->tpl_vars['current_wishlist']->value['id_wishlist']) {?>
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','view',array('token'=>$_smarty_tpl->tpl_vars['wishlist']->value['token'])), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['wishlist']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                    </a>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] : null)) {?>
                        /
                    <?php }?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </p>
    <?php }?>

    <div class="wlp_bought">
        <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
        <?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', 2);?>
        <?php $_smarty_tpl->_assignInScope('nbLi', count($_smarty_tpl->tpl_vars['products']->value));?>
        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

        <ul class="row wlp_bought_list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'i', array (
  'last' => true,
  'total' => true,
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'];
?>
                <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

                <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

                <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
                <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
                <li
                        id="wlp_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                        class="ajax_block_product col-xs-12 col-sm-6 col-md-4 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?>last-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?>last-item-of-tablet-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?>first-item-of-tablet-line<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_i']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloTablet']->value)) {?>last-tablet-line<?php }?>">
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_image">
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                    <img
                                            class="replace-2x img-responsive"
                                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['cover'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
"
                                            alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <div class="product_infos">
                                <p id="s_title" class="product-name">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8', true);?>

                                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes_small']))) {?>
                                        <a
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductlink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product detail','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
">
                                            <small><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['attributes_small'], ENT_QUOTES, 'UTF-8', true);?>
</small>
                                        </a>
                                    <?php }?>
                                </p>
                                <div class="wishlist_product_detail">
                                    <p class="form-group">
                                        <label for="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
:
                                        </label>
                                        <input class="form-control grey" type="text"
                                               id="quantity_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
"
                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
" size="3"/>
                                    </p>

                                    <p class="form-group selector1">
                                        <span><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Priority','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['product']->value['priority_name'];?>
</span>
                                    </p>
                                    <div class="btn_action">
                                        <?php if (((isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['attribute_quantity'] >= 1) || (!(isset($_smarty_tpl->tpl_vars['product']->value['attribute_quantity'])) && $_smarty_tpl->tpl_vars['product']->value['product_quantity'] >= 1) || ((isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) && $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
                                            <?php if (!$_smarty_tpl->tpl_vars['ajax']->value) {?>
                                                <form id="addtocart_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"
                                                      action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'), ENT_QUOTES, 'UTF-8', true);?>
"
                                                      method="post">
                                                    <p class="hidden">
                                                        <input type="hidden" name="id_product"
                                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
"
                                                               id="product_page_product_id"/>
                                                        <input type="hidden" name="add" value="1"/>
                                                        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
"/>
                                                        <input type="hidden" name="id_product_attribute"
                                                               id="idCombination"
                                                               value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"/>
                                                    </p>
                                                </form>
                                            <?php }?>
                                            <a
                                                    href="javascript:void(0);"
                                                    class="button ajax_add_to_cart_button btn btn-default"
                                                    onclick="WishlistBuyProduct('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
', this, <?php echo $_smarty_tpl->tpl_vars['ajax']->value;?>
);"
                                                    title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
"
                                                    rel="nofollow">
                                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                                            </a>
                                        <?php } else { ?>
                                            <span class="button ajax_add_to_cart_button btn btn-default disabled">
												<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
											</span>
                                        <?php }?>
                                        <a
                                                class="button lnk_view btn btn-default"
                                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"
                                                title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
"
                                                rel="nofollow">
                                            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'blockwishlist'),$_smarty_tpl ) );?>
</span>
                                        </a>
                                    </div>
                                    <!-- .btn_action -->
                                </div>
                                <!-- .wishlist_product_detail -->
                            </div>
                            <!-- .product_infos -->
                        </div>
                    </div>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</div> <!-- #view_wishlist -->
<?php }
}
