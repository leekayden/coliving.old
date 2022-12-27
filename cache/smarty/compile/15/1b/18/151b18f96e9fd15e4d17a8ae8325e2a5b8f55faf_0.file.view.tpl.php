<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:31
  from 'C:\xampp2\htdocs\coliving\modules\hotelreservationsystem\views\templates\admin\hotel_configuration_setting\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed23becca4_51633645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '151b18f96e9fd15e4d17a8ae8325e2a5b8f55faf' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\hotelreservationsystem\\views\\templates\\admin\\hotel_configuration_setting\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aaed23becca4_51633645 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel htl_conf_panel">
	<h3 class="tab"> <i class="icon-cogs"></i>&nbsp;&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Configuration','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</h3>
	<div class="panel-body">
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['general_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cogs"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel General Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Your Hotel general Settings using this option.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
				<?php if ((isset($_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value)) && $_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value) {?>
			<div class="btn-group setting-link-div col-sm-3 col-xs-12">
				<a type="button"  href="<?php echo $_smarty_tpl->tpl_vars['htl_reviews_conf_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
					<span class="col-sm-2 col-xs-2"><i class="icon-star"></i></span>
					<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Reviews','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
				</a>
				<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Reviews Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure Reviews setting using this link.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-placement="bottom">
					<i class="icon-question-circle"></i>
				</a>
			</div>
		<?php }?>
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['order_restrict_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-list-alt"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Restrict','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Restrict Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure if you want to restrict orders till a specific date for your hotels.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<!-- Setting to set prices for date range -->
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['feature_price_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cog"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature Price','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature Prices Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here set specific prices for specific dates.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>
		<!-- Setting to set addition demands for the room type -->
		<div class="btn-group setting-link-div col-sm-3 col-xs-12">
			<a type="button" href="<?php echo $_smarty_tpl->tpl_vars['additional_demand_setting_link']->value;?>
" class="setting-link btn btn-default col-sm-10 col-xs-10">
				<span class="col-sm-2 col-xs-2"><i class="icon-cog"></i></span>
				<span class="setting-title col-sm-10 col-xs-10"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
			</a>
			<a tabindex="0" class="btn btn-default col-sm-2 col-xs-2" role="button" data-toggle="popover" data-trigger="focus" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities Settings','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-content="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here create additional facilities and their prices for room types.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
" data-placement="bottom">
				<i class="icon-question-circle"></i>
			</a>
		</div>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAddModuleSettingLink'),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
}
