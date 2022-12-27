<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\carriercompare\template\carriercompare.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11d64366_64441202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ba0a0a2f0e8e084be829600a0afe5e36b932b74' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\carriercompare\\template\\carriercompare.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11d64366_64441202 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['opc']->value) {?>
<form class="box" id="compare_shipping_form" method="post" action="#" >
	<fieldset id="compare_shipping">
		<h1 class="page-heading bottom-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estimate the cost of shipping & taxes.','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</h1>
		<div class="form-group">
			<label for="id_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</label>
			<select name="id_country" id="id_country" class="form-control">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id_country'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_country']->value == $_smarty_tpl->tpl_vars['country']->value['id_country']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
		</div>
		<div id="states" class="form-group" style="display: none;">
			<label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</label>
			<select name="id_state" id="id_state" class="form-control">
				<option></option>
			</select>
		</div>
		<div class="form-group last">
			<label for="zipcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/postal code','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</label>
			<input class="form-control" type="text" name="zipcode" id="zipcode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zipcode']->value, ENT_QUOTES, 'UTF-8', true);?>
"/> (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Needed for certain carriers.','mod'=>'carriercompare'),$_smarty_tpl ) );?>
)
		</div>
		<div id="carriercompare_errors" style="display: none;">
			<ul id="carriercompare_errors_list"></ul><br />
		</div>		
		<div id="SE_AjaxDisplay">
			<img src="<?php echo $_smarty_tpl->tpl_vars['new_base_dir']->value;?>
loader.gif" alt="Loading data" /><br />
			<p></p>
		</div>
		<div id="availableCarriers" style="display: none;">
			<table cellspacing="0" cellpadding="0" id="availableCarriers_table" class="table table-bordered">
				<thead>
					<tr>
						<th class="carrier_action first_item"></th>
						<th class="carrier_name item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</th>
						<th class="carrier_infos item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</th>
						<th class="carrier_price last_item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'carriercompare'),$_smarty_tpl ) );?>
</th>
					</tr>
				</thead>
				<tbody id="carriers_list">
					
				</tbody>
			</table>
		</div>
		<p class="alert alert-warning text-center" id="noCarrier" style="display: none;">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carrier has been made available for this selection.','mod'=>'carriercompare'),$_smarty_tpl ) );?>

		</p>
		<p class="SE_SubmitRefreshCard">
            <button class="btn btn-default button button-small" id="carriercompare_submit" type="button" name="carriercompare_submit">
            	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update cart','mod'=>'carriercompare'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
            </button>
            <button id="update_carriers_list" type="button" class="btn btn-default button button-small">
            	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update carrier list','mod'=>'carriercompare'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
            </button>
		</p>
	</fieldset>
</form>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('taxEnabled'=>$_smarty_tpl->tpl_vars['use_taxes']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('displayPrice'=>$_smarty_tpl->tpl_vars['priceDisplay']->value),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_carrier'=>intval($_smarty_tpl->tpl_vars['id_carrier']->value)),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('id_state'=>intval($_smarty_tpl->tpl_vars['id_state']->value)),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('SE_RefreshMethod'=>intval($_smarty_tpl->tpl_vars['refresh_method']->value)),$_smarty_tpl ) );?>


<?php $_block_plugin38 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin38, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'SE_RedirectTS'));
$_block_repeat=true;
echo $_block_plugin38->addJsDefL(array('name'=>'SE_RedirectTS'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refreshing the page and updating your cart...','mod'=>'carriercompare','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin38->addJsDefL(array('name'=>'SE_RedirectTS'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin39 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin39, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'SE_RefreshStateTS'));
$_block_repeat=true;
echo $_block_plugin39->addJsDefL(array('name'=>'SE_RefreshStateTS'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checking available states...','mod'=>'carriercompare','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin39->addJsDefL(array('name'=>'SE_RefreshStateTS'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin40 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin40, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'SE_RetrievingInfoTS'));
$_block_repeat=true;
echo $_block_plugin40->addJsDefL(array('name'=>'SE_RetrievingInfoTS'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Retrieving information...','mod'=>'carriercompare','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin40->addJsDefL(array('name'=>'SE_RetrievingInfoTS'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin41 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin41, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtFree'));
$_block_repeat=true;
echo $_block_plugin41->addJsDefL(array('name'=>'txtFree'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free!','mod'=>'carriercompare','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin41->addJsDefL(array('name'=>'txtFree'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
