<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10d42216_71069124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba3d09ba7bd15fae33ad50046bb2b2895b3fe5c7' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\history.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10d42216_71069124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

	</a>
	<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
	<span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history'),$_smarty_tpl ) );?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<h1 class="page-heading bottom-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order history'),$_smarty_tpl ) );?>
</h1>
<p class="info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here are the orders you\'ve placed since your account was created.'),$_smarty_tpl ) );?>
</p>
<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you have just placed an order, it may take a few minutes for it to be validated. Please refresh this page if your order is missing.'),$_smarty_tpl ) );?>
</p>
<?php }?>
<div class="block-center" id="block-history">
	<?php if ($_smarty_tpl->tpl_vars['orders']->value && count($_smarty_tpl->tpl_vars['orders']->value)) {?>
		<table id="order-list" class="table table-bordered footab">
			<thead>
				<tr>
					<th class="first_item" data-sort-ignore="true"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</th>
					<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total price'),$_smarty_tpl ) );?>
</th>
					<?php if ((isset($_smarty_tpl->tpl_vars['adv_active']->value))) {?>
						<th data-hide="phone" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Price'),$_smarty_tpl ) );?>
</th>
					<?php }?>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment'),$_smarty_tpl ) );?>
</th>
					<th class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>

					<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order', false, NULL, 'myLoop', array (
  'first' => true,
  'last' => true,
  'index' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
					<tr class="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>first_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>last_item<?php } else { ?>item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%2) {?>alternate_item<?php }?>">
						<td class="history_link bold">
																					<a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');">
								<?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

							</a>
						</td>
						<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['order']->value['date_add'],"/[\-\:\ ]/",'');?>
" class="history_date bold">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>

						</td>
						<td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
">
							<span class="price">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl ) );?>

							</span>
						</td>
						<?php if ((isset($_smarty_tpl->tpl_vars['adv_active']->value))) {?>
							<td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['due_amount'];?>
">
								<span class="price">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value['due_amount'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl ) );?>

								</span>
							</td>
						<?php }?>
						<td class="history_method"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?> data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order_state'];?>
"<?php }?> class="history_state">
							<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state']))) {?>
								<span class="label<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && Tools::getBrightness($_smarty_tpl->tpl_vars['order']->value['order_state_color']) > 128) {?> dark<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])) && $_smarty_tpl->tpl_vars['order']->value['order_state_color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?>>
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true);?>

								</span>
							<?php }?>
						</td>

						<td class="history_invoice">
							<?php if (((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])) && $_smarty_tpl->tpl_vars['order']->value['invoice'] && (isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])) && $_smarty_tpl->tpl_vars['order']->value['invoice_number']) && (isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)) && $_smarty_tpl->tpl_vars['invoiceAllowed']->value == true) {?>
								<a class="link-button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,NULL,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
" target="_blank">
									<i class="icon-file-text large"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PDF'),$_smarty_tpl ) );?>

								</a>
							<?php } else { ?>
								-
							<?php }?>
						</td>
						<td class="history_detail">
							<a class="btn btn-default button button-small" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');">
								<span>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i>
								</span>
							</a>
							<!-- <?php if ((isset($_smarty_tpl->tpl_vars['opc']->value)) && $_smarty_tpl->tpl_vars['opc']->value) {?>
								<a class="link-button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable6=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,NULL,"submitReorder&id_order=".$_prefixVariable6), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
							<?php } else { ?>
								<a class="link-button" href="<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);
$_prefixVariable7=ob_get_clean();
echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,NULL,"submitReorder&id_order=".$_prefixVariable7), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>
">
							<?php }?>
								<?php if ((isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)) && $_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
									<i class="icon-refresh"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reorder'),$_smarty_tpl ) );?>

								<?php }?>
							</a> --><!-- by webkul not to show reorder tab -->
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>
		<div id="block-order-detail" class="unvisible">&nbsp;</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have not placed any orders.'),$_smarty_tpl ) );?>
</p>
	<?php }?>
</div>
<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
			<span>
				<i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account'),$_smarty_tpl ) );?>

			</span>
		</a>
	</li>
	<li>
		<a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
			<span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>
</span>
		</a>
	</li>
</ul>
<!-- By webkul added for history controller url on history.js -->
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('historyUrl'=>preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['link']->value->getPageLink("orderdetail",true))),$_smarty_tpl ) );
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'req_sent_msg'));
$_block_repeat=true;
echo $_block_plugin9->addJsDefL(array('name'=>'req_sent_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request Sent..','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin9->addJsDefL(array('name'=>'req_sent_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'wait_stage_msg'));
$_block_repeat=true;
echo $_block_plugin10->addJsDefL(array('name'=>'wait_stage_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Waiting','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin10->addJsDefL(array('name'=>'wait_stage_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'pending_state_msg'));
$_block_repeat=true;
echo $_block_plugin11->addJsDefL(array('name'=>'pending_state_msg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pending...','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin11->addJsDefL(array('name'=>'pending_state_msg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'mail_sending_err'));
$_block_repeat=true;
echo $_block_plugin12->addJsDefL(array('name'=>'mail_sending_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while sending mail to the customer','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin12->addJsDefL(array('name'=>'mail_sending_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_sending_error'));
$_block_repeat=true;
echo $_block_plugin13->addJsDefL(array('name'=>'refund_request_sending_error'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while processing request for booking cancelation.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin13->addJsDefL(array('name'=>'refund_request_sending_error'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_bookings_selected'));
$_block_repeat=true;
echo $_block_plugin14->addJsDefL(array('name'=>'no_bookings_selected'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No rooms selected. Please select at least one room.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin14->addJsDefL(array('name'=>'no_bookings_selected'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin15 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin15, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'refund_request_success_txt'));
$_block_repeat=true;
echo $_block_plugin15->addJsDefL(array('name'=>'refund_request_success_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request for booking cancelation is successffully created.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin15->addJsDefL(array('name'=>'refund_request_success_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin16 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin16, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_req_txt'));
$_block_repeat=true;
echo $_block_plugin16->addJsDefL(array('name'=>'cancel_req_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Request','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin16->addJsDefL(array('name'=>'cancel_req_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin17 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin17, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'cancel_booking_txt'));
$_block_repeat=true;
echo $_block_plugin17->addJsDefL(array('name'=>'cancel_booking_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel Bookings','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin17->addJsDefL(array('name'=>'cancel_booking_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
