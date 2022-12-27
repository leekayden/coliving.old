<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blocknewproducts\blocknewproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c116faa84_50800244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ef79809ac2589124d86bb4756a7b6b2008e73b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c116faa84_50800244 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block">
	<h4 class="title_block">
    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
</a>
    </h4>
    <div class="block_content products-block">
        <?php if ($_smarty_tpl->tpl_vars['new_products']->value !== false) {?>
            <ul class="products">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_products']->value, 'newproduct', false, NULL, 'myLoop', array (
));
$_smarty_tpl->tpl_vars['newproduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['newproduct']->value) {
$_smarty_tpl->tpl_vars['newproduct']->do_else = false;
?>
                    <li class="clearfix">
                        <a class="products-block-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"><img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['newproduct']->value['link_rewrite'],$_smarty_tpl->tpl_vars['newproduct']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" /></a>
                        <div class="product-content">
                        	<h5>
                            	<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newproduct']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['newproduct']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</a>
                            </h5>
                        	<p class="product-description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['newproduct']->value['description_short']),75,'...' ));?>
</p>
                            <?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value && (((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])) && $_smarty_tpl->tpl_vars['newproduct']->value['show_price']) || ((isset($_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])) && $_smarty_tpl->tpl_vars['newproduct']->value['available_for_order'])))) {?>
                            	<?php if ((isset($_smarty_tpl->tpl_vars['newproduct']->value['show_price'])) && $_smarty_tpl->tpl_vars['newproduct']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value))) {?>
                                    <div class="price-box">
                                        <span class="price">
                                        	<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['newproduct']->value['price_tax_exc']),$_smarty_tpl ) );
}?>
                                        </span>
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['newproduct']->value,'type'=>"price"),$_smarty_tpl ) );?>

                                    </div>
                                <?php }?>
                            <?php }?>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
" class="btn btn-default button button-small"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span></a>
            </div>
        <?php } else { ?>
        	<p>&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not allow new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl ) );?>
</p>
        <?php }?>
    </div>
</div>
<!-- /MODULE Block new products --><?php }
}
