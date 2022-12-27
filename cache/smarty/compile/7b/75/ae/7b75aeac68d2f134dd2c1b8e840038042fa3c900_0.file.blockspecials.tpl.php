<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockspecials\blockspecials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c118c5f85_84861858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b75aeac68d2f134dd2c1b8e840038042fa3c900' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockspecials\\blockspecials.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c118c5f85_84861858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl ) );?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl ) );?>

        </a>
    </p>
	<div class="block_content products-block">
    <?php if ($_smarty_tpl->tpl_vars['special']->value) {?>
		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <img 
                    class="replace-2x img-responsive" 
                    src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['special']->value['link_rewrite'],$_smarty_tpl->tpl_vars['special']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" 
                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
" 
                    title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['special']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        </a>
                    </h5>
                    <?php if ((isset($_smarty_tpl->tpl_vars['special']->value['description_short'])) && $_smarty_tpl->tpl_vars['special']->value['description_short']) {?>
                    	<p class="product-description">
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['special']->value['description_short']),40 ));?>

                        </p>
                    <?php }?>
                    <div class="price-box">
                    	<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                        	<span class="price special-price">
                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['special']->value['price']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_tax_exc']),$_smarty_tpl ) );?>

                                <?php }?>
                            </span>
                             <?php if ($_smarty_tpl->tpl_vars['special']->value['specific_prices']) {?>
                                <?php $_smarty_tpl->_assignInScope('specific_prices', $_smarty_tpl->tpl_vars['special']->value['specific_prices']);?>
                                <?php if ($_smarty_tpl->tpl_vars['specific_prices']->value['reduction_type'] == 'percentage' && ($_smarty_tpl->tpl_vars['specific_prices']->value['from'] == $_smarty_tpl->tpl_vars['specific_prices']->value['to'] || (smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') <= $_smarty_tpl->tpl_vars['specific_prices']->value['to'] && smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S') >= $_smarty_tpl->tpl_vars['specific_prices']->value['from']))) {?>
                                    <span class="price-percent-reduction">-<?php echo $_smarty_tpl->tpl_vars['specific_prices']->value['reduction']*floatval(100);?>
%</span>
                                <?php }?>
                            <?php }?>
                             <span class="old-price">
                                <?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['special']->value['price_without_reduction']),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0], array( array('p'=>$_smarty_tpl->tpl_vars['priceWithoutReduction_tax_excl']->value),$_smarty_tpl ) );?>

                                <?php }?>
                            </span>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['special']->value,'type'=>"price"),$_smarty_tpl ) );?>

                        <?php }?>
                    </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" 
            title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl ) );?>
">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All specials','mod'=>'blockspecials'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    <?php } else { ?>
		<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl ) );?>
</div>
    <?php }?>
	</div>
</div>
<!-- /MODULE Block specials -->
<?php }
}
