<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:21
  from 'C:\xampp2\htdocs\coliving\modules\wkhotelroom\views\templates\hook\hotelRoomDisplayBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e151e1e8_29050725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61d7d9109866a2435a57bad4b0990167471f39a0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkhotelroom\\views\\templates\\hook\\hotelRoomDisplayBlock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e151e1e8_29050725 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['hotelRoomDisplay']->value)) && $_smarty_tpl->tpl_vars['hotelRoomDisplay']->value) {?>
    <div id="hotelRoomsBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_ROOM_DISPLAY_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="row home_block_content">
                <div class="col-sm-12 col-xs-12">
                    <?php $_smarty_tpl->_assignInScope('htlRoomBlockIteration', 0);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelRoomDisplay']->value, 'roomDisplay', false, NULL, 'htlRoom', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['roomDisplay']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['roomDisplay']->value) {
$_smarty_tpl->tpl_vars['roomDisplay']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']++;
?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null)%2) {?>
                            <div class="row">
                        <?php }?>
                                <div class="col-sm-12 col-md-6 margin-btm-30">
                                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="img-responsive width-100">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHotelRoomsBlockImageAfter','room_type'=>$_smarty_tpl->tpl_vars['roomDisplay']->value),$_smarty_tpl ) );?>

                                    <div class="hotelRoomDescContainer">
                                        <div class="row margin-lr-0">
                                            <p class="htlRoomTypeNameText pull-left"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomDisplay']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                            <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['show_price'] && !(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                                                <p class="htlRoomTypePriceText pull-right">
                                                    <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff'] >= 0) {?>
                                                        <span class="wk_roomType_price <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff'] > 0) {?>room_type_old_price<?php }?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['price_without_reduction']),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price_diff']) {?>
                                                        <span class="wk_roomType_price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['roomDisplay']->value['feature_price']),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                    /&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Per Night','mod'=>'wkhotelroom'),$_smarty_tpl ) );?>

                                                </p>
                                            <?php }?>
                                        </div>
                                        <div class="row margin-lr-0 htlRoomTypeDescText">
                                            <?php echo $_smarty_tpl->tpl_vars['roomDisplay']->value['description'];?>

                                        </div>
                                        <div class="row margin-lr-0">
                                            <a target="_blank" class="btn btn-default button htlRoomTypeBookNow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['roomDisplay']->value['id_product']), ENT_QUOTES, 'UTF-8', true);?>
"><span><?php if (!(isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && !$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'book now','mod'=>'wkhotelroom'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','mod'=>'wkhotelroom'),$_smarty_tpl ) );
}?></span></a>
                                        </div>
                                    </div>
                                </div>
                        <?php if (!((isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null)%2)) {?>
                            </div>
                        <?php }?>
                        <?php $_smarty_tpl->_assignInScope('htlRoomBlockIteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_htlRoom']->value['iteration'] : null));?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if ($_smarty_tpl->tpl_vars['htlRoomBlockIteration']->value%2) {?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <hr class="home_block_seperator"/>
    </div>
<?php }
}
}
