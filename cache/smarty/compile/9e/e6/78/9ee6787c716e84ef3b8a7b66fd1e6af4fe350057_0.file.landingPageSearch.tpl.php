<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:22
  from 'C:\xampp2\htdocs\coliving\modules\wkroomsearchblock\views\templates\hook\landingPageSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e2d47fe6_95394946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee6787c716e84ef3b8a7b66fd1e6af4fe350057' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkroomsearchblock\\views\\templates\\hook\\landingPageSearch.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e2d47fe6_95394946 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['is_index_page']->value)) && $_smarty_tpl->tpl_vars['is_index_page']->value) {?>
    <div class="header-rmsearch-container header-rmsearch-hide-xs hidden-xs">
        <?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
            <div class="header-rmsearch-wrapper" id="xs_room_search_form">
                <div class="header-rmsearch-primary">
                    <div class="fancy_search_header_xs">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search Rooms','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</p>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="row header-rmsearch-inner-wrapper">
                            <form method="POST" id="search_hotel_block_form">
                                <?php if ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    <div class="form-group
                                    <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value) <= 1 && !$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-3
                                    <?php } else { ?>
                                        col-sm-6 col-lg-3
                                    <?php }?>">
                                        <input type="text" class="form-control header-rmsearch-input" id="hotel_location" name="hotel_location" autocomplete="off" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Location','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
">
                                        <div class="dropdown">
                                            <ul class="location_search_results_ul"></ul>
                                        </div>
                                    </div>
                                <?php }?>
                                <div class="form-group <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value) <= 1 && !$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?> hidden <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-6 col-lg-3
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="hidden" name="is_hotel_rooms_search" value="1">
                                    <?php if (!$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date']))) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['max_order_date'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>">
                                        <input type="hidden" id="hotel_cat_id" name="hotel_cat_id" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['id_category'];?>
">
                                        <input type="hidden" id="id_hotel" name="id_hotel" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotels_info']->value[0]['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                        <input type="text" id="htl_name" class="form-control header-rmsearch-input" value="<?php echo $_smarty_tpl->tpl_vars['hotels_info']->value[0]['hotel_name'];?>
" readonly>
                                    <?php } else { ?>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && count($_smarty_tpl->tpl_vars['hotels_info']->value)) {?>
                                            <input type="hidden" id="max_order_date" name="max_order_date" value="<?php if ((isset($_smarty_tpl->tpl_vars['max_order_date']->value))) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['max_order_date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>">
                                            <div class="dropdown">
                                                <input type="hidden" id="hotel_cat_id" name="hotel_cat_id">
                                                <input type="hidden" id="id_hotel" name="id_hotel">
                                                <button class="form-control header-rmsearch-input <?php if ((isset($_smarty_tpl->tpl_vars['error']->value)) && $_smarty_tpl->tpl_vars['error']->value == 1) {?>error_border<?php }?>" type="button" data-toggle="dropdown" id="id_hotel_button">
                                                    <span id="hotel_cat_name" class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Hotel','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</span>
                                                </button>
                                                <ul class="dropdown-menu hotel_dropdown_ul">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['hotels_info']->value)) && $_smarty_tpl->tpl_vars['hotels_info']->value) {?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotels_info']->value, 'name_val');
$_smarty_tpl->tpl_vars['name_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name_val']->value) {
$_smarty_tpl->tpl_vars['name_val']->do_else = false;
?>
                                                            <li class="search_result_li" data-id-hotel="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-hotel-cat-id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['id_category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" data-max_order_date="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['max_order_date'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_val']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        <?php }?>
                                    <?php }?>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value) <= 1) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value && $_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && !$_smarty_tpl->tpl_vars['location_enabled']->value && !$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="text" class="form-control header-rmsearch-input input-date" id="check_in_time" name="check_in_time" autocomplete="off" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In Date','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
" readonly>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value) <= 1) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value && $_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && !$_smarty_tpl->tpl_vars['location_enabled']->value && !$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <input type="text" class="form-control header-rmsearch-input input-date" id="check_out_time" name="check_out_time" autocomplete="off" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out Date','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
" readonly>
                                </div>
                                <div class="form-group
                                <?php if (count($_smarty_tpl->tpl_vars['hotels_info']->value) <= 1) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value && $_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4 col-lg-2
                                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && !$_smarty_tpl->tpl_vars['location_enabled']->value && !$_smarty_tpl->tpl_vars['show_hotel_name']->value) {?>
                                        col-sm-4
                                    <?php } else { ?>
                                        col-sm-3
                                    <?php }?>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['location_enabled']->value)) && $_smarty_tpl->tpl_vars['location_enabled']->value) {?>
                                    col-sm-4 col-lg-2
                                <?php } else { ?>
                                    col-sm-3
                                <?php }?>">
                                    <button type="submit" class="btn btn-default button button-medium exclusive" name="search_room_submit" id="search_room_submit">
                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search Now','mod'=>'wkroomsearchblock'),$_smarty_tpl ) );?>
</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }
}
}
