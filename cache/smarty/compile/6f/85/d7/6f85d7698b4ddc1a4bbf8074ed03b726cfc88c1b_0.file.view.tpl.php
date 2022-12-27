<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1279def4_51131258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f85d7698b4ddc1a4bbf8074ed03b726cfc88c1b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:controllers/orders/_documents.tpl' => 1,
    'file:controllers/orders/_shipping.tpl' => 1,
    'file:controllers/orders/_product_line.tpl' => 1,
    'file:controllers/orders/_new_product.tpl' => 1,
    'file:controllers/orders/_discount_form.tpl' => 1,
  ),
),false)) {
function content_639e8c1279def4_51131258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1135176559639e8c126c1194_64640170', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1135176559639e8c126c1194_64640170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1135176559639e8c126c1194_64640170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	var admin_order_tab_link = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
";
	var id_order = <?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
;
	var id_lang = <?php echo $_smarty_tpl->tpl_vars['current_id_lang']->value;?>
;
	var id_currency = <?php echo $_smarty_tpl->tpl_vars['order']->value->id_currency;?>
;
	var id_customer = <?php echo intval($_smarty_tpl->tpl_vars['order']->value->id_customer);?>
;
	<?php $_smarty_tpl->_assignInScope('PS_TAX_ADDRESS_TYPE', Configuration::get('PS_TAX_ADDRESS_TYPE'));?>
	var id_address = <?php echo $_smarty_tpl->tpl_vars['order']->value->{$_smarty_tpl->tpl_vars['PS_TAX_ADDRESS_TYPE']->value};?>
;
	var currency_sign = "<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
";
	var currency_format = "<?php echo $_smarty_tpl->tpl_vars['currency']->value->format;?>
";
	var currency_blank = "<?php echo $_smarty_tpl->tpl_vars['currency']->value->blank;?>
";
	var priceDisplayPrecision = <?php echo intval((defined('_PS_PRICE_DISPLAY_PRECISION_') ? constant('_PS_PRICE_DISPLAY_PRECISION_') : null));?>
;
	var use_taxes = <?php if ($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_INC') ? constant('PS_TAX_INC') : null)) {?>true<?php } else { ?>false<?php }?>;
	var stock_management = <?php echo intval($_smarty_tpl->tpl_vars['stock_management']->value);?>
;
	var txt_add_product_stock_issue = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to add this quantity?','js'=>1),$_smarty_tpl ) );?>
";
	var txt_add_product_new_invoice = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure you want to create a new invoice?','js'=>1),$_smarty_tpl ) );?>
";
	var txt_add_product_no_product = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error: No product has been selected','js'=>1),$_smarty_tpl ) );?>
";
	var txt_add_product_no_product_quantity = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error: Quantity of products must be set','js'=>1),$_smarty_tpl ) );?>
";
	var txt_add_product_no_product_price = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error: Product price must be set','js'=>1),$_smarty_tpl ) );?>
";
	var txt_confirm = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','js'=>1),$_smarty_tpl ) );?>
";
	var statesShipped = new Array();
	var has_voucher = <?php if (count($_smarty_tpl->tpl_vars['discounts']->value)) {?>1<?php } else { ?>0<?php }?>;
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
		<?php if (((isset($_smarty_tpl->tpl_vars['currentState']->value->shipped)) && !$_smarty_tpl->tpl_vars['currentState']->value->shipped && $_smarty_tpl->tpl_vars['state']->value['shipped'])) {?>
			statesShipped.push(<?php echo $_smarty_tpl->tpl_vars['state']->value['id_order_state'];?>
);
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	var order_discount_price = <?php if (($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null))) {?>
									<?php echo $_smarty_tpl->tpl_vars['order']->value->total_discounts_tax_excl;?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['order']->value->total_discounts_tax_incl;?>

								<?php }?>;

	var errorRefund = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error. You cannot refund a negative amount.'),$_smarty_tpl ) );?>
";
	<?php echo '</script'; ?>
>

	<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayInvoice",'id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('hook_invoice', $_prefixVariable8);?>
	<?php if (($_smarty_tpl->tpl_vars['hook_invoice']->value)) {?>
	<div><?php echo $_smarty_tpl->tpl_vars['hook_invoice']->value;?>
</div>
	<?php }?>

	<div class="panel kpi-container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 box-stats color3" >
				<div class="kpi-content">
					<i class="icon-calendar-empty"></i>
					<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</span>
					<span class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>false),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 box-stats color4" >
				<div class="kpi-content">
					<i class="icon-money"></i>
					<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span>
					<span class="value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</span>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 box-stats color2" >
				<div class="kpi-content">
					<i class="icon-comments"></i>
					<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>
</span>
					<span class="value"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomerThreads'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
"><?php echo sizeof($_smarty_tpl->tpl_vars['customer_thread_message']->value);?>
</a></span>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3 box-stats color1" >
				<a href="#start_products">
					<div class="kpi-content">
						<i class="icon icon-home"></i>
						<!-- Original -->
						<!-- <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total'),$_smarty_tpl ) );?>
</span>
						<span class="value"><?php echo sizeof($_smarty_tpl->tpl_vars['products']->value);?>
</span> -->
						<span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms'),$_smarty_tpl ) );?>
</span>
						<span class="value"><?php echo count($_smarty_tpl->tpl_vars['order_detail_data']->value);?>
</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-7">
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-credit-card"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order'),$_smarty_tpl ) );?>

					<span class="badge"><?php echo $_smarty_tpl->tpl_vars['order']->value->reference;?>
</span>
					<span class="badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"#"),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['order']->value->id;?>
</span>
					<div class="panel-heading-action">
						<div class="btn-group">
							<a class="btn btn-default<?php if (!$_smarty_tpl->tpl_vars['previousOrder']->value) {?> disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['previousOrder']->value);?>
">
								<i class="icon-backward"></i>
							</a>
							<a class="btn btn-default<?php if (!$_smarty_tpl->tpl_vars['nextOrder']->value) {?> disabled<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['nextOrder']->value);?>
">
								<i class="icon-forward"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- Orders Actions -->
				<div class="well hidden-print">
					<a class="btn btn-default" href="javascript:window.print()">
						<i class="icon-print"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print order'),$_smarty_tpl ) );?>

					</a>
					&nbsp;
					<?php if (Configuration::get('PS_INVOICE') && count($_smarty_tpl->tpl_vars['invoices_collection']->value) && $_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
						<a data-selenium-id="view_invoice" class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
							<i class="icon-file"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View invoice'),$_smarty_tpl ) );?>

						</a>
					<?php } else { ?>
						<span class="span label label-inactive">
							<i class="icon-remove"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No invoice'),$_smarty_tpl ) );?>

						</span>
					<?php }?>
					&nbsp;

					<!-- By webkul to hide unneccessary data on order detail page -->
					<!-- <?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
						<a class="btn btn-default _blank"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
							<i class="icon-truck"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View delivery slip'),$_smarty_tpl ) );?>

						</a>
					<?php } else { ?>
						<span class="span label label-inactive">
							<i class="icon-remove"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No delivery slip'),$_smarty_tpl ) );?>

						</span>
					<?php }?> -->
					<!-- End -->
					&nbsp;
					<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value && !$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
						<a id="desc-order-standard_refund" class="btn btn-default" href="#refundForm">
							<i class="icon-exchange"></i>
							<?php if ($_smarty_tpl->tpl_vars['order']->value->hasBeenPaid()) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Initiate refund'),$_smarty_tpl ) );?>

							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel bookings'),$_smarty_tpl ) );?>

							<?php }?>
						</a>
						&nbsp;
					<?php }?>
				</div>
				<!-- Tab nav -->
				<ul class="nav nav-tabs" id="tabOrder">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_TAB_ORDER']->value;?>

					<li class="active">
						<a href="#status">
							<i class="icon-time"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['history']->value);?>
</span>
						</a>
					</li>
					<li>
						<a href="#documents">
							<i class="icon-file-text"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documents'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['order']->value->getDocuments());?>
</span>
						</a>
					</li>
				</ul>
				<!-- Tab content -->
				<div class="tab-content panel">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENT_ORDER']->value;?>

					<!-- Tab status -->
					<div class="tab-pane active" id="status">
						<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
 <span class="badge">(<?php echo count($_smarty_tpl->tpl_vars['history']->value);?>
)</span></h4>
						<!-- History of status -->
						<div class="table-responsive">
							<table class="table history-status row-margin-bottom">
								<tbody>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'row', false, 'key');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
										<?php if (($_smarty_tpl->tpl_vars['key']->value == 0)) {?>
											<tr>
												<td style="background-color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['img_dir']->value)."os/".((string)(intval($_smarty_tpl->tpl_vars['row']->value['id_order_state']))).".gif");?>
" width="16" height="16" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['row']->value['ostate_name']);?>
" /></td> 												<td style="background-color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['row']->value['text-color'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['row']->value['ostate_name']);?>
</td>
												<td style="background-color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['row']->value['text-color'];?>
"><?php if ($_smarty_tpl->tpl_vars['row']->value['employee_lastname']) {
echo stripslashes($_smarty_tpl->tpl_vars['row']->value['employee_firstname']);?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['row']->value['employee_lastname']);
}?></td>
												<td style="background-color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['row']->value['text-color'];?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['row']->value['date_add'],'full'=>true),$_smarty_tpl ) );?>
</td>
												<td style="background-color:<?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
;color:<?php echo $_smarty_tpl->tpl_vars['row']->value['text-color'];?>
" class="text-right">
													<?php if (intval($_smarty_tpl->tpl_vars['row']->value['send_email'])) {?>
														<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
&amp;sendStateEmail=<?php echo intval($_smarty_tpl->tpl_vars['row']->value['id_order_state']);?>
&amp;id_order_history=<?php echo intval($_smarty_tpl->tpl_vars['row']->value['id_order_history']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resend this email to the customer'),$_smarty_tpl ) );?>
">
															<i class="icon-mail-reply"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resend email'),$_smarty_tpl ) );?>

														</a>
													<?php }?>
												</td>
											</tr>
										<?php } else { ?>
											<tr>
												<td><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)$_smarty_tpl->tpl_vars['img_dir']->value)."os/".((string)(intval($_smarty_tpl->tpl_vars['row']->value['id_order_state']))).".gif");?>
" width="16" height="16" /></td>
												<td><?php echo stripslashes($_smarty_tpl->tpl_vars['row']->value['ostate_name']);?>
</td>
												<td><?php if ($_smarty_tpl->tpl_vars['row']->value['employee_lastname']) {
echo stripslashes($_smarty_tpl->tpl_vars['row']->value['employee_firstname']);?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['row']->value['employee_lastname']);
} else { ?>&nbsp;<?php }?></td>
												<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['row']->value['date_add'],'full'=>true),$_smarty_tpl ) );?>
</td>
												<td class="text-right">
													<?php if (intval($_smarty_tpl->tpl_vars['row']->value['send_email'])) {?>
														<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
&amp;sendStateEmail=<?php echo intval($_smarty_tpl->tpl_vars['row']->value['id_order_state']);?>
&amp;id_order_history=<?php echo intval($_smarty_tpl->tpl_vars['row']->value['id_order_history']);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resend this email to the customer'),$_smarty_tpl ) );?>
">
															<i class="icon-mail-reply"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Resend email'),$_smarty_tpl ) );?>

														</a>
													<?php }?>
												</td>
											</tr>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tbody>
							</table>
						</div>
						<!-- Change status form -->
						<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;token=<?php echo $_GET['token'];?>
" method="post" class="form-horizontal well hidden-print">
							<div class="row">
								<div class="col-lg-9">
									<select id="id_order_state" class="chosen form-control" name="id_order_state">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
											<option value="<?php echo intval($_smarty_tpl->tpl_vars['state']->value['id_order_state']);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['currentState']->value)) && $_smarty_tpl->tpl_vars['state']->value['id_order_state'] == $_smarty_tpl->tpl_vars['currentState']->value->id) {?> selected="selected" disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" />
								</div>
								<div class="col-lg-3">
									<button type="submit" name="submitState" class="btn btn-primary">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update status'),$_smarty_tpl ) );?>

									</button>
								</div>
							</div>
						</form>
					</div>
					<!-- Tab documents -->
					<div class="tab-pane" id="documents">
						<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documents'),$_smarty_tpl ) );?>
 <span class="badge">(<?php echo count($_smarty_tpl->tpl_vars['order']->value->getDocuments());?>
)</span></h4>
												<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_documents.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['returns']->value) {?>
					<div class="alert alert-warning">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking cancellation requests has raised  from this order. To see booking cancelation requests'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRequests');?>
&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;vieworder_return"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here'),$_smarty_tpl ) );?>
</a>.
					</div>
				<?php }?>
				<div class="row">
					<div class="panel">
						<div class="panel-heading order_status_heading">
							<i class="icon-credit-card"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms Status'),$_smarty_tpl ) );?>

						</div>
						<div class="panel-content">
							<div class="row">
								<div class="col-lg-12" id="room_status_info_wrapper">
									<table class="table table-responsive">
										<tr>
											<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</th>
											<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</th>
											<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</th>
											<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</th>
											<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Status'),$_smarty_tpl ) );?>
</th>
										</tr>
										<?php if ((isset($_smarty_tpl->tpl_vars['htl_booking_order_data']->value)) && $_smarty_tpl->tpl_vars['htl_booking_order_data']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htl_booking_order_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
												<tr>
													<td>
														<?php echo $_smarty_tpl->tpl_vars['data']->value['room_num'];?>

													</td>
													<td>
														<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel');?>
&amp;id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id_hotel'];?>
&amp;updatehtl_branch_info" target="_blank">
															<span><?php echo $_smarty_tpl->tpl_vars['data']->value['hotel_name'];?>
</span>
														</a>
													</td>
													<td>
														<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>

													</td>
													<td>
														<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%d-%m-%Y");?>

													</td>
													<td>
														<form action="" method="post" class="form-horizontal row room_status_info_form">
															<div class="col-sm-7">
																<select name="booking_order_status" class="form-control booking_order_status margin-bottom-5">
																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotel_order_status']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
																		<option value="<?php echo intval($_smarty_tpl->tpl_vars['state']->value['id_status']);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['id_status'])) && $_smarty_tpl->tpl_vars['state']->value['id_status'] == $_smarty_tpl->tpl_vars['data']->value['id_status']) {?> selected="selected" disabled="disabled"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['state']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																</select>

																<?php if ($_smarty_tpl->tpl_vars['data']->value['id_status'] == $_smarty_tpl->tpl_vars['hotel_order_status']->value['STATUS_CHECKED_IN']['id_status']) {?><span class="badge badge-success margin-bottom-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'checked in on'),$_smarty_tpl ) );?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['check_in'],"%d-%m-%Y");?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['data']->value['id_status'] == $_smarty_tpl->tpl_vars['hotel_order_status']->value['STATUS_CHECKED_OUT']['id_status']) {?><span class="badge badge-success margin-bottom-5"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'checked out on'),$_smarty_tpl ) );?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['check_out'],"%d-%m-%Y");?>
</span><?php }?>

																																<input class="room_status_date wk-input-date" type="text" name="status_date" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%d-%m-%Y");?>
" readonly/>

																<input type="hidden" name="date_from" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_from'],"%Y-%m-%d");?>
" />
																<input type="hidden" name="date_to" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['date_to'],"%Y-%m-%d");?>
" />
																<input type="hidden" name="id_room" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id_room'];?>
" />
																<input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" />
															</div>
															<div class="col-sm-5">
																<button type="submit" name="submitbookingOrderStatus" class="btn btn-primary">
																	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update Status'),$_smarty_tpl ) );?>

																</button>
															</div>
														</form>
													</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php } else { ?>
											<tr>
												<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data found.'),$_smarty_tpl ) );?>
</td>
											</tr>
										<?php }?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo '<script'; ?>
>
					$('#tabOrder a').click(function (e) {
						e.preventDefault()
						$(this).tab('show')
					})
				<?php echo '</script'; ?>
>
				<hr />
				<!-- Tab nav -->
				<ul class="nav nav-tabs" id="myTab" style="display:none"><!-- by webkul -->
					<?php echo $_smarty_tpl->tpl_vars['HOOK_TAB_SHIP']->value;?>

					<li class="active">
						<a href="#shipping">
							<i class="icon-truck "></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['order']->value->getShipping());?>
</span>
						</a>
					</li>
					<li>
						<a href="#returns">
							<i class="icon-undo"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise Returns'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['order']->value->getReturn());?>
</span>
						</a>
					</li>
				</ul>
				<!-- Tab content -->
				<div class="tab-content panel" style="display:none"><!-- by webkul -->
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENT_SHIP']->value;?>

					<!-- Tab shipping -->
					<div class="tab-pane active" id="shipping">
						<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping'),$_smarty_tpl ) );?>
 <span class="badge">(<?php echo count($_smarty_tpl->tpl_vars['order']->value->getShipping());?>
)</span></h4>
						<!-- Shipping block -->
						<?php if (!$_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>
						<div class="form-horizontal">
							<?php if ($_smarty_tpl->tpl_vars['order']->value->gift_message) {?>
							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
									<p class="form-control-static"><?php echo nl2br($_smarty_tpl->tpl_vars['order']->value->gift_message);?>
</p>
								</div>
							</div>
							<?php }?>
							<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_shipping.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php if ($_smarty_tpl->tpl_vars['carrierModuleCall']->value) {?>
								<?php echo $_smarty_tpl->tpl_vars['carrierModuleCall']->value;?>

							<?php }?>
							<hr />
							<?php if ($_smarty_tpl->tpl_vars['order']->value->recyclable) {?>
								<span class="label label-success"><i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recycled packaging'),$_smarty_tpl ) );?>
</span>
							<?php } else { ?>
								<span class="label label-inactive"><i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recycled packaging'),$_smarty_tpl ) );?>
</span>
							<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['order']->value->gift) {?>
								<span class="label label-success"><i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift wrapping'),$_smarty_tpl ) );?>
</span>
							<?php } else { ?>
								<span class="label label-inactive"><i class="icon-remove"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gift wrapping'),$_smarty_tpl ) );?>
</span>
							<?php }?>
						</div>
						<?php }?>
					</div>
					<!-- Tab returns -->
					<div class="tab-pane" id="returns">
						<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise Returns'),$_smarty_tpl ) );?>
 <span class="badge">(<?php echo count($_smarty_tpl->tpl_vars['order']->value->getReturn());?>
)</span></h4>
						<?php if (!$_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>
						<!-- Return block -->
							<?php if (count($_smarty_tpl->tpl_vars['order']->value->getReturn()) > 0) {?>
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</span></th>
											<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type'),$_smarty_tpl ) );?>
</span></th>
											<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier'),$_smarty_tpl ) );?>
</span></th>
											<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tracking number'),$_smarty_tpl ) );?>
</span></th>
										</tr>
									</thead>
									<tbody>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getReturn(), 'line');
$_smarty_tpl->tpl_vars['line']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->do_else = false;
?>
										<tr>
											<td><?php echo $_smarty_tpl->tpl_vars['line']->value['date_add'];?>
</td>
											<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['line']->value['type']),$_smarty_tpl ) );?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['line']->value['state_name'];?>
</td>
											<td class="actions">
												<span class="shipping_number_show"><?php if ((isset($_smarty_tpl->tpl_vars['line']->value['url'])) && (isset($_smarty_tpl->tpl_vars['line']->value['tracking_number']))) {?><a href="<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['line']->value['url'],'@',$_smarty_tpl->tpl_vars['line']->value['tracking_number']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];?>
</a><?php } elseif ((isset($_smarty_tpl->tpl_vars['line']->value['tracking_number']))) {
echo $_smarty_tpl->tpl_vars['line']->value['tracking_number'];
}?></span>
												<?php if ($_smarty_tpl->tpl_vars['line']->value['can_edit']) {?>
												<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
&amp;id_order_invoice=<?php if ($_smarty_tpl->tpl_vars['line']->value['id_order_invoice']) {
echo intval($_smarty_tpl->tpl_vars['line']->value['id_order_invoice']);
} else { ?>0<?php }?>&amp;id_carrier=<?php if ($_smarty_tpl->tpl_vars['line']->value['id_carrier']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value['id_carrier'], ENT_QUOTES, 'UTF-8', true);
} else { ?>0<?php }?>">
													<span class="shipping_number_edit" style="display:none;">
														<button type="button" name="tracking_number">
															<?php echo htmlentities($_smarty_tpl->tpl_vars['line']->value['tracking_number']);?>

														</button>
														<button type="submit" class="btn btn-default" name="submitShippingNumber">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>

														</button>
													</span>
													<button href="#" class="edit_shipping_number_link">
														<i class="icon-pencil"></i>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

													</button>
													<button href="#" class="cancel_shipping_number_link" style="display: none;">
														<i class="icon-remove"></i>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

													</button>
												</form>
												<?php }?>
											</td>
										</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</tbody>
								</table>
							</div>
							<?php } else { ?>
							<div class="list-empty hidden-print">
								<div class="list-empty-msg">
									<i class="icon-warning-sign list-empty-icon"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No merchandise returned yet'),$_smarty_tpl ) );?>

								</div>
							</div>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['carrierModuleCall']->value) {?>
								<?php echo $_smarty_tpl->tpl_vars['carrierModuleCall']->value;?>

							<?php }?>
						<?php }?>
					</div>
				</div>
				<?php echo '<script'; ?>
>
					$('#myTab a').click(function (e) {
						e.preventDefault()
						$(this).tab('show')
					})
				<?php echo '</script'; ?>
>
			</div>
			<!-- Payments block -->
			<div id="formAddPaymentPanel" class="panel">
				<div class="panel-heading">
					<i class="icon-money"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Payment"),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['order']->value->getOrderPayments());?>
</span>
				</div>
				<?php if (count($_smarty_tpl->tpl_vars['order']->value->getOrderPayments()) > 0) {?>
					<p class="alert alert-danger"<?php if (round($_smarty_tpl->tpl_vars['orders_total_paid_tax_incl']->value,2) == round($_smarty_tpl->tpl_vars['total_paid']->value,2) || ((isset($_smarty_tpl->tpl_vars['currentState']->value)) && $_smarty_tpl->tpl_vars['currentState']->value->id == 6)) {?> style="display: none;"<?php }?>>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning'),$_smarty_tpl ) );?>

						<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_paid']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paid instead of'),$_smarty_tpl ) );?>

						<strong class="total_paid"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['orders_total_paid_tax_incl']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getBrother(), 'brother_order');
$_smarty_tpl->tpl_vars['brother_order']->index = -1;
$_smarty_tpl->tpl_vars['brother_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brother_order']->value) {
$_smarty_tpl->tpl_vars['brother_order']->do_else = false;
$_smarty_tpl->tpl_vars['brother_order']->index++;
$_smarty_tpl->tpl_vars['brother_order']->first = !$_smarty_tpl->tpl_vars['brother_order']->index;
$__foreach_brother_order_143_saved = $_smarty_tpl->tpl_vars['brother_order'];
?>
							<?php if ($_smarty_tpl->tpl_vars['brother_order']->first) {?>
								<?php if (count($_smarty_tpl->tpl_vars['order']->value->getBrother()) == 1) {?>
									<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This warning also concerns order '),$_smarty_tpl ) );?>

								<?php } else { ?>
									<br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This warning also concerns the next orders:'),$_smarty_tpl ) );?>

								<?php }?>
							<?php }?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['brother_order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">
								#<?php echo sprintf('%06d',$_smarty_tpl->tpl_vars['brother_order']->value->id);?>

							</a>
						<?php
$_smarty_tpl->tpl_vars['brother_order'] = $__foreach_brother_order_143_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</p>
				<?php }?>
				<form id="formAddPayment"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</span></th>
									<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method'),$_smarty_tpl ) );?>
</span></th>
									<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transaction ID'),$_smarty_tpl ) );?>
</span></th>
									<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>
</span></th>
									<th><span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>
</span></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getOrderPaymentCollection(), 'payment');
$_smarty_tpl->tpl_vars['payment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->do_else = false;
?>
								<tr>
									<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['payment']->value->date_add,'full'=>true),$_smarty_tpl ) );?>
</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value->payment_method, ENT_QUOTES, 'UTF-8', true);?>
</td>
									<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment']->value->transaction_id, ENT_QUOTES, 'UTF-8', true);?>
</td>
									<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['payment']->value->amount,'currency'=>$_smarty_tpl->tpl_vars['payment']->value->id_currency),$_smarty_tpl ) );?>
</td>
									<td>
									<?php $_prefixVariable9 = $_smarty_tpl->tpl_vars['payment']->value->getOrderInvoice($_smarty_tpl->tpl_vars['order']->value->id);
$_smarty_tpl->_assignInScope('invoice', $_prefixVariable9);
if ($_prefixVariable9) {?>
										<?php echo $_smarty_tpl->tpl_vars['invoice']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value,$_smarty_tpl->tpl_vars['order']->value->id_shop);?>

									<?php } else { ?>
									<?php }?>
									</td>
									<td class="actions">
										<button class="btn btn-default open_payment_information">
											<i class="icon-search"></i>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details'),$_smarty_tpl ) );?>

										</button>
									</td>
								</tr>
								<tr class="payment_information" style="display: none;">
									<td colspan="5">
										<p>
											<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Number'),$_smarty_tpl ) );?>
</b>&nbsp;
											<?php if ($_smarty_tpl->tpl_vars['payment']->value->card_number) {?>
												<?php echo $_smarty_tpl->tpl_vars['payment']->value->card_number;?>

											<?php } else { ?>
												<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</i>
											<?php }?>
										</p>
										<p>
											<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Brand'),$_smarty_tpl ) );?>
</b>&nbsp;
											<?php if ($_smarty_tpl->tpl_vars['payment']->value->card_brand) {?>
												<?php echo $_smarty_tpl->tpl_vars['payment']->value->card_brand;?>

											<?php } else { ?>
												<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</i>
											<?php }?>
										</p>
										<p>
											<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Expiration'),$_smarty_tpl ) );?>
</b>&nbsp;
											<?php if ($_smarty_tpl->tpl_vars['payment']->value->card_expiration) {?>
												<?php echo $_smarty_tpl->tpl_vars['payment']->value->card_expiration;?>

											<?php } else { ?>
												<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</i>
											<?php }?>
										</p>
										<p>
											<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card Holder'),$_smarty_tpl ) );?>
</b>&nbsp;
											<?php if ($_smarty_tpl->tpl_vars['payment']->value->card_holder) {?>
												<?php echo $_smarty_tpl->tpl_vars['payment']->value->card_holder;?>

											<?php } else { ?>
												<i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not defined'),$_smarty_tpl ) );?>
</i>
											<?php }?>
										</p>
									</td>
								</tr>
								<?php
}
if ($_smarty_tpl->tpl_vars['payment']->do_else) {
?>
								<tr>
									<td class="list-empty hidden-print" colspan="6">
										<div class="list-empty-msg">
											<i class="icon-warning-sign list-empty-icon"></i>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment methods are available'),$_smarty_tpl ) );?>

										</div>
									</td>
								</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<tr class="current-edit hidden-print">
									<td>
										<div class="input-group fixed-width-xl">
											<input type="text" name="payment_date" class="datepicker" value="<?php echo date('Y-m-d');?>
" />
											<div class="input-group-addon">
												<i class="icon-calendar-o"></i>
											</div>
										</div>
									</td>
									<td>
										<input name="payment_method" list="payment_method" class="payment_method">
										<datalist id="payment_method">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'payment_method');
$_smarty_tpl->tpl_vars['payment_method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['payment_method']->value) {
$_smarty_tpl->tpl_vars['payment_method']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['payment_method']->value;?>
">
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</datalist>
									</td>
									<td>
										<input type="text" name="payment_transaction_id" value="" class="form-control fixed-width-sm"/>
									</td>
									<td>
										<input type="text" name="payment_amount" value="" class="form-control fixed-width-sm pull-left" />
										<select name="payment_currency" class="payment_currency form-control fixed-width-xs pull-left">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'current_currency');
$_smarty_tpl->tpl_vars['current_currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['current_currency']->value) {
$_smarty_tpl->tpl_vars['current_currency']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['current_currency']->value['id_currency'];?>
"<?php if ($_smarty_tpl->tpl_vars['current_currency']->value['id_currency'] == $_smarty_tpl->tpl_vars['currency']->value->id) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['current_currency']->value['sign'];?>
</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</select>
									</td>
									<td>
										<?php if (count($_smarty_tpl->tpl_vars['invoices_collection']->value) > 0) {?>
											<select name="payment_invoice" id="payment_invoice">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoices_collection']->value, 'invoice');
$_smarty_tpl->tpl_vars['invoice']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invoice']->value) {
$_smarty_tpl->tpl_vars['invoice']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['invoice']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value,$_smarty_tpl->tpl_vars['order']->value->id_shop);?>
</option>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										<?php }?>
									</td>
									<td class="actions">
										<button class="btn btn-primary" type="submit" name="submitAddPayment">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
				<?php if ((!$_smarty_tpl->tpl_vars['order']->value->valid && sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1)) {?>
					<form class="form-horizontal well" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">
						<div class="row">
							<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change currency'),$_smarty_tpl ) );?>
</label>
							<div class="col-lg-6">
								<select name="new_currency">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency_change');
$_smarty_tpl->tpl_vars['currency_change']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency_change']->value) {
$_smarty_tpl->tpl_vars['currency_change']->do_else = false;
?>
									<?php if ($_smarty_tpl->tpl_vars['currency_change']->value['id_currency'] != $_smarty_tpl->tpl_vars['order']->value->id_currency) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['currency_change']->value['id_currency'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency_change']->value['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['currency_change']->value['sign'];?>
</option>
									<?php }?>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
								<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do not forget to update your exchange rate before making this change.'),$_smarty_tpl ) );?>
</p>
							</div>
							<div class="col-lg-3">
								<button type="submit" class="btn btn-default" name="submitChangeCurrency"><i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change'),$_smarty_tpl ) );?>
</button>
							</div>
						</div>
					</form>
				<?php }?>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAdminOrderLeft",'id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

		</div>
		<div class="col-lg-5">
			<!-- Customer informations -->
			<div class="panel">
				<?php if ($_smarty_tpl->tpl_vars['customer']->value->id) {?>
					<div class="panel-heading">
						<i class="icon-user"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer'),$_smarty_tpl ) );?>

						<span class="badge">
							<a href="?tab=AdminCustomers&amp;id_customer=<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
&amp;viewcustomer&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
">
								<?php if (Configuration::get('PS_B2B_ENABLE')) {
echo $_smarty_tpl->tpl_vars['customer']->value->company;?>
 - <?php }?>
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gender']->value->name, ENT_QUOTES, 'UTF-8', true);?>

								<?php echo $_smarty_tpl->tpl_vars['customer']->value->firstname;?>

								<?php echo $_smarty_tpl->tpl_vars['customer']->value->lastname;?>

							</a>
						</span>
						<span class="badge">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'#'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['customer']->value->id;?>

						</span>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<?php if (($_smarty_tpl->tpl_vars['customer']->value->isGuest())) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This order has been placed by a guest.'),$_smarty_tpl ) );?>

								<?php if ((!Customer::customerExists($_smarty_tpl->tpl_vars['customer']->value->email))) {?>
									<form method="post" action="index.php?tab=AdminCustomers&amp;id_customer=<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
">
										<input type="hidden" name="id_lang" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id_lang;?>
" />
										<input class="btn btn-default" type="submit" name="submitGuestToCustomer" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transform a guest into a customer'),$_smarty_tpl ) );?>
" />
										<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This feature will generate a random password and send an email to the customer.'),$_smarty_tpl ) );?>
</p>
									</form>
								<?php } else { ?>
									<div class="alert alert-warning">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A registered customer account has already claimed this email address'),$_smarty_tpl ) );?>

									</div>
								<?php }?>
							<?php } else { ?>
								<dl class="well list-detail">
									<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</dt>
										<dd><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
"><i class="icon-envelope-o"></i> <?php echo $_smarty_tpl->tpl_vars['customer']->value->email;?>
</a></dd><br>
									<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account registered'),$_smarty_tpl ) );?>
</dt>
										<dd class="text-muted"><i class="icon-calendar-o"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['customer']->value->date_add,'full'=>true),$_smarty_tpl ) );?>
</dd>
									<!-- <dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valid orders placed'),$_smarty_tpl ) );?>
</dt>
										<dd><span class="badge"><?php echo intval($_smarty_tpl->tpl_vars['customerStats']->value['nb_orders']);?>
</span></dd>
									<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total spent since registration'),$_smarty_tpl ) );?>
</dt>
										<dd><span class="badge badge-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>Tools::ps_round(Tools::convertPrice($_smarty_tpl->tpl_vars['customerStats']->value['total_orders'],$_smarty_tpl->tpl_vars['currency']->value),2),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</span></dd>
									<?php if (Configuration::get('PS_B2B_ENABLE')) {?>
										<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Siret'),$_smarty_tpl ) );?>
</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['customer']->value->siret;?>
</dd>
										<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'APE'),$_smarty_tpl ) );?>
</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['customer']->value->ape;?>
</dd>
									<?php }?> -->
								</dl>
							<?php }?>
						</div>

						<div class="col-xs-6">
							<div class="form-group hidden-print">
								<a href="?tab=AdminCustomers&amp;id_customer=<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
&amp;viewcustomer&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
" class="btn btn-default btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View full details...'),$_smarty_tpl ) );?>
</a>
							</div>
							<div class="panel panel-sm">
								<div class="panel-heading">
									<i class="icon-eye-slash"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Private note'),$_smarty_tpl ) );?>

								</div>
								<form id="customer_note" class="form-horizontal" action="ajax.php" method="post" onsubmit="saveCustomerNote(<?php echo $_smarty_tpl->tpl_vars['customer']->value->id;?>
);return false;" >
									<div class="form-group">
										<div class="col-lg-12">
											<textarea name="note" id="noteContent" class="textarea-autosize" onkeyup="$(this).val().length > 0 ? $('#submitCustomerNote').removeAttr('disabled') : $('#submitCustomerNote').attr('disabled', 'disabled')"><?php echo $_smarty_tpl->tpl_vars['customer']->value->note;?>
</textarea>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button type="submit" id="submitCustomerNote" class="btn btn-default pull-right" disabled="disabled">
												<i class="icon-save"></i>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

											</button>
										</div>
									</div>
									<span id="note_feedback"></span>
								</form>
							</div>
						</div>
					</div>
				<?php }?>
				<!-- Tab nav -->
				<div class="row" style="display:none">
					<ul class="nav nav-tabs" id="tabAddresses">
						<li class="active">
							<a href="#addressShipping">
								<i class="icon-truck"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping address'),$_smarty_tpl ) );?>

							</a>
						</li>
						<li>
							<a href="#addressInvoice">
								<i class="icon-file-text"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>

							</a>
						</li>
					</ul>
					<!-- Tab content -->
					<div class="tab-content panel">
						<!-- Tab status -->
						<div class="tab-pane  in active" id="addressShipping">
							<!-- Addresses -->
							<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping address'),$_smarty_tpl ) );?>
</h4>
							<?php if (!$_smarty_tpl->tpl_vars['order']->value->isVirtual()) {?>
							<!-- Shipping address -->
								<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
									<form class="form-horizontal hidden-print" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
										<div class="form-group">
											<div class="col-lg-9">
												<select name="id_address">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['address']->value['id_address'];?>
"
														<?php if ($_smarty_tpl->tpl_vars['address']->value['id_address'] == $_smarty_tpl->tpl_vars['order']->value->id_address_delivery) {?>
															selected="selected"
														<?php }?>>
														<?php echo $_smarty_tpl->tpl_vars['address']->value['alias'];?>
 -
														<?php echo $_smarty_tpl->tpl_vars['address']->value['address1'];?>

														<?php echo $_smarty_tpl->tpl_vars['address']->value['postcode'];?>

														<?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>

														<?php if (!empty($_smarty_tpl->tpl_vars['address']->value['state'])) {?>
															<?php echo $_smarty_tpl->tpl_vars['address']->value['state'];?>

														<?php }?>,
														<?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>

													</option>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</select>
											</div>
											<div class="col-lg-3">
												<button class="btn btn-default" type="submit" name="submitAddressShipping"><i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change'),$_smarty_tpl ) );?>
</button>
											</div>
										</div>
									</form>
								<?php }?>
								<div class="well">
									<div class="row">
										<div class="col-sm-6">
											<a class="btn btn-default pull-right" href="?tab=AdminAddresses&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['addresses']->value['delivery']->id;?>
&amp;addaddress&amp;realedit=1&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;address_type=1&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAddresses'),$_smarty_tpl ) );?>
&amp;back=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
">
												<i class="icon-pencil"></i>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

											</a>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayAddressDetail'][0], array( array('address'=>$_smarty_tpl->tpl_vars['addresses']->value['delivery'],'newLine'=>'<br />'),$_smarty_tpl ) );?>

											<?php if ($_smarty_tpl->tpl_vars['addresses']->value['delivery']->other) {?>
												<hr /><?php echo $_smarty_tpl->tpl_vars['addresses']->value['delivery']->other;?>
<br />
											<?php }?>
										</div>
										<div class="col-sm-6 hidden-print">
											<div id="map-delivery-canvas" style="height: 190px"></div>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
						<div class="tab-pane " id="addressInvoice">
							<!-- Invoice address -->
							<h4 class="visible-print"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
</h4>
							<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
								<form class="form-horizontal hidden-print" method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
									<div class="form-group">
										<div class="col-lg-9">
											<select name="id_address">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer_addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['address']->value['id_address'];?>
"
													<?php if ($_smarty_tpl->tpl_vars['address']->value['id_address'] == $_smarty_tpl->tpl_vars['order']->value->id_address_invoice) {?>
													selected="selected"
													<?php }?>>
													<?php echo $_smarty_tpl->tpl_vars['address']->value['alias'];?>
 -
													<?php echo $_smarty_tpl->tpl_vars['address']->value['address1'];?>

													<?php echo $_smarty_tpl->tpl_vars['address']->value['postcode'];?>

													<?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>

													<?php if (!empty($_smarty_tpl->tpl_vars['address']->value['state'])) {?>
														<?php echo $_smarty_tpl->tpl_vars['address']->value['state'];?>

													<?php }?>,
													<?php echo $_smarty_tpl->tpl_vars['address']->value['country'];?>

												</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</select>
										</div>
										<div class="col-lg-3">
											<button class="btn btn-default" type="submit" name="submitAddressInvoice"><i class="icon-refresh"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change'),$_smarty_tpl ) );?>
</button>
										</div>
									</div>
								</form>
							<?php }?>
							<div class="well">
								<div class="row">
									<div class="col-sm-6">
										<a class="btn btn-default pull-right" href="?tab=AdminAddresses&amp;id_address=<?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->id;?>
&amp;addaddress&amp;realedit=1&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;address_type=2&amp;back=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAddresses'),$_smarty_tpl ) );?>
">
											<i class="icon-pencil"></i>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

										</a>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayAddressDetail'][0], array( array('address'=>$_smarty_tpl->tpl_vars['addresses']->value['invoice'],'newLine'=>'<br />'),$_smarty_tpl ) );?>

										<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->other) {?>
											<hr /><?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->other;?>
<br />
										<?php }?>
									</div>
									<div class="col-sm-6 hidden-print">
										<div id="map-invoice-canvas" style="height: 190px"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php echo '<script'; ?>
>
					$('#tabAddresses a').click(function (e) {
						e.preventDefault()
						$(this).tab('show')
					})
				<?php echo '</script'; ?>
>
			</div>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-envelope"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo sizeof($_smarty_tpl->tpl_vars['customer_thread_message']->value);?>
</span>
				</div>
				<?php if ((sizeof($_smarty_tpl->tpl_vars['messages']->value))) {?>
					<div class="panel panel-highlighted">
						<div class="message-item">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
								<div class="message-avatar">
									<div class="avatar-md">
										<i class="icon-user icon-2x"></i>
									</div>
								</div>
								<div class="message-body">

									<span class="message-date">&nbsp;<i class="icon-calendar"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add']),$_smarty_tpl ) );?>
 -
									</span>
									<h4 class="message-item-heading">
										<?php if ((htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['efirstname'], ENT_QUOTES, 'UTF-8', true);?>

											<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['elastname'], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['cfirstname'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['clastname'], ENT_QUOTES, 'UTF-8', true);?>

										<?php }?>
										<?php if (($_smarty_tpl->tpl_vars['message']->value['private'] == 1)) {?>
											<span class="badge badge-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Private'),$_smarty_tpl ) );?>
</span>
										<?php }?>
									</h4>
									<p class="message-item-text">
										<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value['message'], ENT_QUOTES, 'UTF-8', true));?>

									</p>
								</div>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				<?php }?>
				<div id="messages" class="well hidden-print">
					<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
" method="post" onsubmit="if (getE('visibility').checked == true) return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to send this message to the customer?'),$_smarty_tpl ) );?>
');">
						<div id="message" class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a standard message'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
									<select class="chosen form-control" name="order_message" id="order_message" onchange="orderOverwriteMessage(this, '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to overwrite your existing message?'),$_smarty_tpl ) );?>
')">
										<option value="0" selected="selected">-</option>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orderMessages']->value, 'orderMessage');
$_smarty_tpl->tpl_vars['orderMessage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['orderMessage']->value) {
$_smarty_tpl->tpl_vars['orderMessage']->do_else = false;
?>
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderMessage']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['orderMessage']->value['name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
									<p class="help-block">
										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderMessage'), ENT_QUOTES, 'UTF-8', true);?>
">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure predefined messages'),$_smarty_tpl ) );?>

											<i class="icon-external-link"></i>
										</a>
									</p>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display to customer?'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
									<span class="switch prestashop-switch fixed-width-lg">
										<input type="radio" name="visibility" id="visibility_on" value="0" />
										<label for="visibility_on">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>

										</label>
										<input type="radio" name="visibility" id="visibility_off" value="1" checked="checked" />
										<label for="visibility_off">
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>

										</label>
										<a class="slide-button btn"></a>
									</span>
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</label>
								<div class="col-lg-9">
									<textarea id="txt_msg" class="textarea-autosize" name="message"><?php echo htmlspecialchars(Tools::getValue('message'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									<p id="nbchars"></p>
								</div>
							</div>


							<input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" />
							<input type="hidden" name="id_customer" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id_customer;?>
" />
							<button type="submit" id="submitMessage" class="btn btn-primary pull-right" name="submitMessage">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send message'),$_smarty_tpl ) );?>

							</button>
							<a class="btn btn-default" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminCustomerThreads'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all messages'),$_smarty_tpl ) );?>

								<i class="icon-external-link"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAdminOrderRight",'id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

		</div>
	</div>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayAdminOrder",'id_order'=>$_smarty_tpl->tpl_vars['order']->value->id),$_smarty_tpl ) );?>

	<div class="row" id="start_products">
		<div class="col-lg-12">
			<form class="container-command-top-spacing" action="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
" method="post" onsubmit="return orderDeleteProduct('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This product cannot be returned.'),$_smarty_tpl ) );?>
', '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity to cancel is greater than quantity available.'),$_smarty_tpl ) );?>
');">
				<input type="hidden" name="id_order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
" />
				<div style="display: none">
					<input type="hidden" value="<?php echo implode($_smarty_tpl->tpl_vars['order']->value->getWarehouseList());?>
" id="warehouse_list" />
				</div>

				<div class="panel">
					<div class="panel-heading">
						<i class="icon-shopping-cart"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rooms In This Order'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['order_detail_data']->value);?>
</span>
											</div>
										<div class="row">
						<div class="col-lg-12">
							<table class="table" id="customer_cart_details">
								<thead>
									<tr>
										<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
											<th class="standard_refund_fields" style="display:none"></th>
										<?php }?>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</span></th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Image'),$_smarty_tpl ) );?>
</th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Type'),$_smarty_tpl ) );?>
</span></th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name'),$_smarty_tpl ) );?>
</span></th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duration'),$_smarty_tpl ) );?>
</span></th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit Price (Tax incl.)'),$_smarty_tpl ) );?>
</span></th>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Price (Tax incl.)'),$_smarty_tpl ) );?>
</span></th>
										<?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
											<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund State'),$_smarty_tpl ) );?>
</span></th>
											<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded amount'),$_smarty_tpl ) );?>
</span></th>
										<?php }?>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reallocate Room'),$_smarty_tpl ) );?>
</span></th>
										<?php if (($_smarty_tpl->tpl_vars['can_edit']->value && !$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered())) {?>
										<th class="text-center"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Order'),$_smarty_tpl ) );?>
</th>
										<?php }?>
									</tr>
								</thead>
								<tbody>
								<?php if ($_smarty_tpl->tpl_vars['order_detail_data']->value) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_detail_data']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
																				<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_product_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } else { ?>
									<tr>
										<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Data Found.'),$_smarty_tpl ) );?>
</td>
									</tr>
								<?php }?>
																<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_new_product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
								</tbody>
							</table>
						</div>
					</div>

					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "TaxMethod", null, null);?>
						<?php if (($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null))) {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax excluded.'),$_smarty_tpl ) );?>

						<?php } else { ?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tax included.'),$_smarty_tpl ) );?>

						<?php }?>
					<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php if (($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null))) {?>
						<input type="hidden" name="TaxMethod" value="0">
					<?php } else { ?>
						<input type="hidden" name="TaxMethod" value="1">
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
						<div class="row-margin-bottom row-margin-top order_action standard_refund_fields"  style="display: none;">
							<textarea class="cancellation_reason" name="cancellation_reason" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter reason to cancel bookings'),$_smarty_tpl ) );?>
"></textarea>
						</div>
						<div class="row-margin-bottom row-margin-top order_action">
							<?php if (!$_smarty_tpl->tpl_vars['order']->value->hasBeenDelivered()) {?>
								<button type="button" id="add_product" class="btn btn-default">
									<i class="icon-plus-sign"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Rooms In Order'),$_smarty_tpl ) );?>

								</button>
							<?php }?>
							<button id="add_voucher" class="btn btn-default" type="button" >
								<i class="icon-ticket"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new discount'),$_smarty_tpl ) );?>

							</button>

							<?php if ($_smarty_tpl->tpl_vars['refund_allowed']->value && !$_smarty_tpl->tpl_vars['hasCompletelyRefunded']->value) {?>
								<button style="display: none;" type="submit" name="initiateRefund" class="btn btn-success standard_refund_fields pull-right" id="initiateRefund">
									<?php if ($_smarty_tpl->tpl_vars['order']->value->hasBeenPaid()) {?><i class="icon-undo"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Initiate Refund'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel bookings'),$_smarty_tpl ) );
}?>
								</button>
							<?php }?>
						</div>
					<?php }?>
					<div class="clear">&nbsp;</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="alert alert-warning">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For this customer group, prices are displayed as: [1]%s[/1]','sprintf'=>array($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'TaxMethod')),'tags'=>array('<strong>')),$_smarty_tpl ) );?>

								<?php if (!$_smarty_tpl->tpl_vars['refund_allowed']->value) {?>
									<br/><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunds are disabled'),$_smarty_tpl ) );?>
</strong>
								<?php }?>
							</div>
						</div>
						<div class="col-xs-6 pull-right">
							<div class="panel panel-vouchers" style="<?php if (!sizeof($_smarty_tpl->tpl_vars['discounts']->value)) {?>display:none;<?php }?>">
								<?php if ((sizeof($_smarty_tpl->tpl_vars['discounts']->value) || $_smarty_tpl->tpl_vars['can_edit']->value)) {?>
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>
														<span class="title_box ">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount name'),$_smarty_tpl ) );?>

														</span>
													</th>
													<th>
														<span class="title_box ">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Value'),$_smarty_tpl ) );?>

														</span>
													</th>
													<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
													<th></th>
													<?php }?>
												</tr>
											</thead>
											<tbody>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discounts']->value, 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
												<tr>
													<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['name'];?>
</td>
													<td>
													<?php if ($_smarty_tpl->tpl_vars['discount']->value['value'] != 0.00) {?>
														-
													<?php }?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['discount']->value['value'],'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

													</td>
													<?php if ($_smarty_tpl->tpl_vars['can_edit']->value) {?>
													<td>
														<a href="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;submitDeleteVoucher&amp;id_order_cart_rule=<?php echo $_smarty_tpl->tpl_vars['discount']->value['id_order_cart_rule'];?>
&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">
															<i class="icon-minus-sign"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete voucher'),$_smarty_tpl ) );?>

														</a>
													</td>
													<?php }?>
												</tr>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</tbody>
										</table>
									</div>
									<div class="current-edit" id="voucher_form" style="display:none;">
										<?php $_smarty_tpl->_subTemplateRender('file:controllers/orders/_discount_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
									</div>
								<?php }?>
							</div>
							<div class="panel panel-total">
								<div class="table-responsive">
									<table class="table">
																				<?php if (($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null))) {?>
											<?php $_smarty_tpl->_assignInScope('order_product_price', ($_smarty_tpl->tpl_vars['order']->value->total_products));?>
											<?php $_smarty_tpl->_assignInScope('order_discount_price', $_smarty_tpl->tpl_vars['order']->value->total_discounts_tax_excl);?>
											<?php $_smarty_tpl->_assignInScope('order_wrapping_price', $_smarty_tpl->tpl_vars['order']->value->total_wrapping_tax_excl);?>
											<?php $_smarty_tpl->_assignInScope('order_shipping_price', $_smarty_tpl->tpl_vars['order']->value->total_shipping_tax_excl);?>
										<?php } else { ?>
											<?php $_smarty_tpl->_assignInScope('order_product_price', $_smarty_tpl->tpl_vars['order']->value->total_products_wt);?>
											<?php $_smarty_tpl->_assignInScope('order_discount_price', $_smarty_tpl->tpl_vars['order']->value->total_discounts_tax_incl);?>
											<?php $_smarty_tpl->_assignInScope('order_wrapping_price', $_smarty_tpl->tpl_vars['order']->value->total_wrapping_tax_incl);?>
											<?php $_smarty_tpl->_assignInScope('order_shipping_price', $_smarty_tpl->tpl_vars['order']->value->total_shipping_tax_incl);?>
										<?php }?>
										<tr id="total_products">
											<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Cost (tax excl.)'),$_smarty_tpl ) );?>
</strong></td>
											<td class="amount text-right nowrap">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['totalRoomsCostTE']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
											</td>
											<td class="partial_refund_fields current-edit" style="display:none;"></td>
										</tr>
										<?php if ((isset($_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value)) && $_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value > 0) {?>
											<tr id="total_products">
												<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities Cost (tax excl.)'),$_smarty_tpl ) );?>
</strong></td>
												<td class="amount text-right nowrap">
													<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
												</td>
												<td class="partial_refund_fields current-edit" style="display:none;"></td>
											</tr>
										<?php }?>
										<tr id="total_tax_order">
											<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms Tax'),$_smarty_tpl ) );?>
</strong></td>
											<td class="text-right nowrap">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['total_room_tax']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
											</td>
											<td class="partial_refund_fields current-edit" style="display:none;"></td>
										</tr>
										<?php if ((isset($_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value)) && $_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value > 0) {?>
											<tr id="total_tax_order">
												<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional Facilities Tax'),$_smarty_tpl ) );?>
</strong></td>
												<td class="text-right nowrap">
													<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['totalDemandsPriceTI']->value-$_smarty_tpl->tpl_vars['totalDemandsPriceTE']->value),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
												</td>
												<td class="partial_refund_fields current-edit" style="display:none;"></td>
											</tr>
										<?php }?>
										<tr id="total_discounts" <?php if ($_smarty_tpl->tpl_vars['order']->value->total_discounts_tax_incl == 0) {?>style="display: none;"<?php }?>>
											<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discounts'),$_smarty_tpl ) );?>
</td>
											<td class="amount text-right nowrap">
												-<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order_discount_price']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

											</td>
											<td class="partial_refund_fields current-edit" style="display:none;"></td>
										</tr>
										<tr id="total_wrapping" <?php if ($_smarty_tpl->tpl_vars['order']->value->total_wrapping_tax_incl == 0) {?>style="display: none;"<?php }?>>
											<td class="text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wrapping'),$_smarty_tpl ) );?>
</td>
											<td class="amount text-right nowrap">
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order_wrapping_price']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

											</td>
											<td class="partial_refund_fields current-edit" style="display:none;"></td>
										</tr>
										<?php if (($_smarty_tpl->tpl_vars['order']->value->getTaxCalculationMethod() == (defined('PS_TAX_EXC') ? constant('PS_TAX_EXC') : null))) {?>
											<tr id="total_taxes">
												<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Taxes'),$_smarty_tpl ) );?>
</strong></td>
												<td class="amount text-right nowrap" ><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong></td>
												<td class="partial_refund_fields current-edit" style="display:none;"></td>
											</tr>
			 							<?php }?>
										<tr id="total_order">
											<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Final Booking Total'),$_smarty_tpl ) );?>
</strong></td>
											<td class="amount text-right nowrap">
												<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
											</td>
											<td class="partial_refund_fields current-edit" style="display:none;"></td>
										</tr>

										<?php if ((isset($_smarty_tpl->tpl_vars['refundReqBookings']->value)) && $_smarty_tpl->tpl_vars['refundReqBookings']->value) {?>
											<tr id="total_order">
												<td class="text-right"><strong>* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refunded Amount'),$_smarty_tpl ) );?>
</strong></td>
												<td class="amount text-right nowrap">
													<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundedAmount']->value,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
</strong>
												</td>
												<td class="partial_refund_fields current-edit" style="display:none;"></td>
											</tr>
										<?php }?>

										<?php if ($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl > $_smarty_tpl->tpl_vars['order']->value->total_paid_real) {?>
											<tr>
												<td class="text-right"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Due Amount'),$_smarty_tpl ) );?>
</strong></td>
												<td class="amount text-right nowrap">
													<strong>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_real)),$_smarty_tpl ) );?>

													</strong>
												</td>
											</tr>
										<?php }?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<!-- Sources block -->
			<?php if ((sizeof($_smarty_tpl->tpl_vars['sources']->value))) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-globe"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sources'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['sources']->value);?>
</span>
				</div>
				<ul <?php if (sizeof($_smarty_tpl->tpl_vars['sources']->value) > 3) {?>style="height: 200px; overflow-y: scroll;"<?php }?>>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sources']->value, 'source');
$_smarty_tpl->tpl_vars['source']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->tpl_vars['source']->do_else = false;
?>
					<li>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['source']->value['date_add'],'full'=>true),$_smarty_tpl ) );?>
<br />
						<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
</b><?php if ($_smarty_tpl->tpl_vars['source']->value['http_referer'] != '') {?><a href="<?php echo $_smarty_tpl->tpl_vars['source']->value['http_referer'];?>
"><?php echo smarty_modifier_regex_replace(parse_url($_smarty_tpl->tpl_vars['source']->value['http_referer'],(defined('PHP_URL_HOST') ? constant('PHP_URL_HOST') : null)),'/^www./','');?>
</a><?php } else { ?>-<?php }?><br />
						<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
</b> <a href="http://<?php echo $_smarty_tpl->tpl_vars['source']->value['request_uri'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value['request_uri'],100,'...' ));?>
</a><br />
						<?php if ($_smarty_tpl->tpl_vars['source']->value['keywords']) {?><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keywords'),$_smarty_tpl ) );?>
</b> <?php echo $_smarty_tpl->tpl_vars['source']->value['keywords'];?>
<br /><?php }?><br />
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<?php }?>

			<!-- linked orders block -->
			<?php if (count($_smarty_tpl->tpl_vars['order']->value->getBrother()) > 0) {?>
			<div class="panel">
				<div class="panel-heading">
					<i class="icon-cart"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Linked orders'),$_smarty_tpl ) );?>

				</div>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order no. '),$_smarty_tpl ) );?>

								</th>
								<th>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>

								</th>
								<th>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>

								</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getBrother(), 'brother_order');
$_smarty_tpl->tpl_vars['brother_order']->index = -1;
$_smarty_tpl->tpl_vars['brother_order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brother_order']->value) {
$_smarty_tpl->tpl_vars['brother_order']->do_else = false;
$_smarty_tpl->tpl_vars['brother_order']->index++;
$_smarty_tpl->tpl_vars['brother_order']->first = !$_smarty_tpl->tpl_vars['brother_order']->index;
$__foreach_brother_order_156_saved = $_smarty_tpl->tpl_vars['brother_order'];
?>
							<tr>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['brother_order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">#<?php echo $_smarty_tpl->tpl_vars['brother_order']->value->id;?>
</a>
								</td>
								<td>
									<?php echo $_smarty_tpl->tpl_vars['brother_order']->value->getCurrentOrderState()->name[$_smarty_tpl->tpl_vars['current_id_lang']->value];?>

								</td>
								<td>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['brother_order']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

								</td>
								<td>
									<a href="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;vieworder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['brother_order']->value->id;?>
&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);?>
">
										<i class="icon-eye-open"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See the order'),$_smarty_tpl ) );?>

									</a>
								</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['brother_order'] = $__foreach_brother_order_156_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</tbody>
					</table>
				</div>
			</div>
			<?php }?>
		</div>
	</div>

<!-- Modal for reallocation of rooms -->
<div class="modal fade" id="mySwappigModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#reallocate_room_tab" aria-controls="reallocate" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room Reallocation'),$_smarty_tpl ) );?>
</a></li>
		    <li role="presentation"><a href="#swap_room_tab" aria-controls="swap" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Swap Room'),$_smarty_tpl ) );?>
</a></li>
		 </ul>
		<div class="tab-content panel active">
			<div role="tabpanel" class="tab-pane active" id="reallocate_room_tab">
				<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="realloc_myModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reallocate Rooms'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="curr_room_num" class="control-label model-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Room Number:'),$_smarty_tpl ) );?>
</label>
							<input type="text" class="form-control modal_curr_room_num" name="modal_curr_room_num" readonly="true">
							<input type="hidden" class="form-control modal_date_from" name="modal_date_from">
							<input type="hidden" class="form-control modal_date_to" name="modal_date_to">
							<input type="hidden" class="form-control modal_id_room" name="modal_id_room">
						</div>
						<div class="form-group">
							<label for="realloc_avail_rooms" class="control-label model-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Rooms To Reallocate:'),$_smarty_tpl ) );?>
</label>
							<div class="realloc_avail_rooms_container" style="width: 195px;">
								<select class="form-control" name="realloc_avail_rooms" id="realloc_avail_rooms">
									<option value="0" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Rooms'),$_smarty_tpl ) );?>
</option>
								</select>
							</div>
							<p class="error_text" id="realloc_sel_rm_err_p"></p>
						</div>
						<div class="form-group">
							<label style="text-decoration:underline;margin-top:5px;" for="message-text" class="col-sm-12 control-label model-label"><i class="icon-info-circle"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently Alloted Customer Information:'),$_smarty_tpl ) );?>
</label>
							<dl class="well list-detail">
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</dt>
								<dd class="cust_name"></dd><br>
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</dt>
								<dd class="cust_email"></dd><br>
							</dl>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close",'mod'=>"hotelreservationsyatem"),$_smarty_tpl ) );?>
</button>
						<input type="submit" id="realloc_allocated_rooms" name="realloc_allocated_rooms" class="btn btn-primary" value="Reallocate">
					</div>
				</form>
			</div>
			<div role="tabpanel" class="tab-pane" id="swap_room_tab">
				<form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'), ENT_QUOTES, 'UTF-8', true);?>
&amp;vieworder&amp;id_order=<?php echo intval($_smarty_tpl->tpl_vars['order']->value->id);?>
">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="swap_myModalLabel"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Swap Rooms'),$_smarty_tpl ) );?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="swap_curr_room_num" class="control-label model-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Room Number:'),$_smarty_tpl ) );?>
</label>
							<input type="text" class="form-control modal_curr_room_num" name="modal_curr_room_num" readonly="true">
							<input type="hidden" class="form-control modal_date_from" name="modal_date_from">
							<input type="hidden" class="form-control modal_date_to" name="modal_date_to">
							<input type="hidden" class="form-control modal_id_room" name="modal_id_room">
							<input type="hidden" class="form-control modal_id_order" name="modal_id_order">
						</div>
						<div class="form-group">
							<label for="swap_avail_rooms" class="control-label model-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Rooms To Swap:'),$_smarty_tpl ) );?>
</label>
							<div class="swap_avail_rooms_container"></div>
							<p class="error_text" id="swap_sel_rm_err_p"></p>
						</div>
						<div class="form-group">
							<label style="text-decoration:underline;margin-top:5px;" for="message-text" class="col-sm-12 control-label model-label"><i class="icon-info-circle"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currently Alloted Customer Information:'),$_smarty_tpl ) );?>
</label>
							<dl class="well list-detail">
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name'),$_smarty_tpl ) );?>
</dt>
								<dd class="cust_name"></dd><br>
								<dt><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
</dt>
								<dd class="cust_email"></dd><br>
							</dl>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Close",'mod'=>"hotelreservationsyatem"),$_smarty_tpl ) );?>
</button>
						<input type="submit" id="swap_allocated_rooms" name="swap_allocated_rooms" class="btn btn-primary" value="Swap">
					</div>
				</form>
			</div>
		</div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="rooms_type_extra_demands">
	<div class="modal-dialog" role="document">
		<div class="modal-content" id="room_extra_demand_content">

		</div>
	</div>
</div>

<style>
	.error_text {
		color:red;}
	.model-label {
		font-weight:bold!important;}
	.room_type_old_price {
		text-decoration: line-through;
		color:#979797;
		font-size:12px;}
	.wk-input-date {
		cursor: text!important;
		background-color: #F5F8F9!important;}
	#room_status_info_wrapper .margin-bottom-5 {
		margin-bottom: 5px!important;}
	#room_status_info_wrapper .room_status_date {
		display: none;}
</style>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'no_rm_avail_txt'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'no_rm_avail_txt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No rooms available.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'no_rm_avail_txt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'slct_rm_err'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'slct_rm_err'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a room first.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'slct_rm_err'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtExtraDemandSucc'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'txtExtraDemandSucc'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Updated Successfully','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'txtExtraDemandSucc'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'atleastSelectTxt'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'atleastSelectTxt'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select at least one facility to update.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'atleastSelectTxt'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtSomeErr'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'txtSomeErr'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred. Please try again.','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'txtSomeErr'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtDeleteSucc'));
$_block_repeat=true;
echo $_block_plugin6->addJsDefL(array('name'=>'txtDeleteSucc'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deleted successfully','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin6->addJsDefL(array('name'=>'txtDeleteSucc'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'txtInvalidDemandVal'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'txtInvalidDemandVal'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid demand value found','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'txtInvalidDemandVal'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo '<script'; ?>
>
	var geocoder = new google.maps.Geocoder();
	var delivery_map, invoice_map;

	$(document).ready(function() {
				$('#initiateRefund').on('click', function(e) {
			if ($.trim($('.cancellation_reason').val()) == '') {
				$('.cancellation_reason').focus().css('border', '1px solid red');
				return false;
			}
		});

				$('.booking_order_status').on('change', function() {
			var status = $(this).val();
			if (status == '2' || status == '3') {
				$(this).closest('.room_status_info_form').find('.room_status_date').show();
			} else {
				$(this).closest('.room_status_info_form').find('.room_status_date').hide();
			}
		});

				$(document).on('focus', '.room_status_date', function() {
			var dateFrom = $(this).closest('.room_status_info_form').find('[name="date_from"]').val();
			dateFrom = dateFrom.split("-");
            minDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(dateFrom[0], dateFrom[1] - 1, dateFrom[2])));

			var dateTo = $(this).closest('.room_status_info_form').find('[name="date_to"]').val();
			dateTo = dateTo.split("-");
            maxDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(dateTo[0], dateTo[1] - 1, dateTo[2])));

			$(this).datepicker({
				dateFormat: 'dd-mm-yy',
				minDate: minDate,
				maxDate: maxDate,
				dayNamesMin: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]
			});
		});

				$('.open_room_extra_demands').on('click', function(e) {
			e.preventDefault();
			var idProduct = $(this).attr('id_product');
			var idOrder = $(this).attr('id_order');
			var idRoom = $(this).attr('id_room');
			var dateFrom = $(this).attr('date_from');
			var dateTo = $(this).attr('date_to');
			var idHtlBooking = $(this).attr('id_htl_booking');
			var orderEdit = 0;
			if(  $(this).closest('.product-line-row').find(".submitProductChange").is(":visible") == true ) {
				orderEdit = 1;
			}

			$.ajax({
				type: 'POST',
				headers: {
					"cache-control": "no-cache"
				},
				url: admin_order_tab_link,
				dataType: 'html',
				cache: false,
				data: {
					id_room: idRoom,
					id_product: idProduct,
					id_order: idOrder,
					date_from: dateFrom,
					date_to: dateTo,
					orderEdit: orderEdit,
					action: 'getRoomTypeBookingDemands',
					ajax: true
				},
				success: function(result) {
					$('#room_extra_demand_content').html('');
					$('#room_extra_demand_content').append(result);

					$('#room_extra_demand_content #id_htl_booking').val(idHtlBooking);

					$('#rooms_type_extra_demands').modal('show');
				},
			});
		});

				$(document).on('click', '#room_extra_demand_content #btn_new_room_facility', function() {
			$('#rooms_extra_demands .room_demands_container').show();
			$('#room_extra_demand_content #save_room_facilities').show();
			$('#room_extra_demand_content #back_to_facilities_btn').show();
			$('#rooms_extra_demands .room_ordered_demands').hide();
			$('#room_extra_demand_content #btn_new_room_facility').hide();
		});
				$(document).on('click', '#room_extra_demand_content #back_to_facilities_btn', function() {
			$('#rooms_extra_demands .room_ordered_demands').show();
			$('#room_extra_demand_content #btn_new_room_facility').show();
			$('#rooms_extra_demands .room_demands_container').hide();
			$('#room_extra_demand_content #save_room_facilities').hide();
			$('#room_extra_demand_content #back_to_facilities_btn').hide();
		});

				$(document).on('click', '#save_room_facilities', function(e) {
			e.preventDefault();
			var idHtlBooking = $(this).closest('#room_extra_demand_content').find('#id_htl_booking').val();
			if (idHtlBooking) {
				var roomDemands = [];
				// get the selected extra demands by customer
				$(this).closest('#room_extra_demand_content').find('input:checkbox.id_room_type_demand:checked').each(function () {
					roomDemands.push({
						'id_global_demand':$(this).val(),
						'id_option': $(this).closest('.room_demand_block').find('.id_option').val()
					});
				});

				if (roomDemands.length) {
					$.ajax({
						type: 'POST',
						headers: {
							"cache-control": "no-cache"
						},
						url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
						dataType: 'JSON',
						cache: false,
						data: {
							id_htl_booking: idHtlBooking,
							room_demands: JSON.stringify(roomDemands),
							action: 'EditRoomExtraDemands',
							ajax: true
						},
						success: function(result) {
							if (result == 1) {
								showSuccessMessage(txtExtraDemandSucc);
								$('#rooms_type_extra_demands').modal('hide');
							} else {
								showErrorMessage(txtSomeErr);
							}
						}
					});
				} else {
					showErrorMessage(atleastSelectTxt);
				}
			}
		});

				$(document).on('click', '.del-order-room-demand', function(e) {
			e.preventDefault();
			if (confirm(txt_confirm)) {
				var idBookingDemand = $(this).attr('id_booking_demand');
				$currentItem = $(this);
				if (idBookingDemand) {
					$.ajax({
						type: 'POST',
						headers: {
							"cache-control": "no-cache"
						},
						url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrders'));?>
",
						dataType: 'JSON',
						cache: false,
						data: {
							id_booking_demand: idBookingDemand,
							action: 'DeleteRoomExtraDemand',
							ajax: true
						},
						success: function(result) {
							if (result == 1) {
								$currentItem.closest('tr').remove();
								showSuccessMessage(txtDeleteSucc);
							} else {
								showErrorMessage(txtSomeErr);
							}
						}
					});
				} else {
					showErrorMessage(txtInvalidDemandVal);
				}
			}
		});

		// change advance option of extra demand
		$(document).on('change', '.demand_adv_option_block .id_option', function(e) {
			var option_selected = $(this).find('option:selected');
			var extra_demand_price = option_selected.attr("optionPrice")
			extra_demand_price = parseFloat(extra_demand_price);
			extra_demand_price = formatCurrency(extra_demand_price, currency_format, currency_sign, currency_blank);
			$(this).closest('.room_demand_block').find('.extra_demand_option_price').text(extra_demand_price);
		});

		$('#mySwappigModal').on('hidden.bs.modal', function (e)
		{
			$(".modal_id_order").val('');
			$(".modal_date_from").val('');
			$(".modal_date_to").val('');
			$(".modal_id_room").val('');
			$(".modal_curr_room_num").val('');
			$(".cust_name").text('');
			$(".cust_email").text('');
			$(".swp_rm_opts").remove();
			$(".realloc_rm_opts").remove();
		});

		$('#mySwappigModal').on('shown.bs.modal', function (e)
		{
			$(".modal_id_order").val(e.relatedTarget.dataset.id_order);
			$(".modal_date_from").val(e.relatedTarget.dataset.date_from);
			$(".modal_date_to").val(e.relatedTarget.dataset.date_to);
			$(".modal_id_room").val(e.relatedTarget.dataset.id_room);
			$(".modal_curr_room_num").val(e.relatedTarget.dataset.room_num);
			$(".cust_name").text(e.relatedTarget.dataset.cust_name);
			$(".cust_email").text(e.relatedTarget.dataset.cust_email);

			// For Rooms Swapping
			if (e.relatedTarget.dataset.avail_rm_swap != 'false') {
				var json_arr_rm_swp = JSON.parse(e.relatedTarget.dataset.avail_rm_swap);

				html = '<select class="form-control" name="swap_avail_rooms" id="swap_avail_rooms" style="width:195px;">';
					$.each(json_arr_rm_swp, function(key,val) {
						html += '<option class="swp_rm_opts" value="'+val.id_room+'" >'+val.room_num+'</option>';
					});
				html += '</select>';
				$(".swap_avail_rooms_container").empty().append(html);
			} else {
				$(".swap_avail_rooms_container").empty().text(no_rm_avail_txt);
			}

			// For Rooms Reallocation
			if (e.relatedTarget.dataset.avail_rm_realloc != 'false') {
				var json_arr_rm_realloc = JSON.parse(e.relatedTarget.dataset.avail_rm_realloc);

				html = '<select class="form-control" name="realloc_avail_rooms" id="realloc_avail_rooms" style="width:195px;">';
					$.each(json_arr_rm_realloc, function(key,val) {
						html += '<option class="realloc_rm_opts" value="'+val.id_room+'" >'+val.room_num+'</option>';
					});
				html += '</select>';
				$(".realloc_avail_rooms_container").empty().append(html);
			} else {
				$(".realloc_avail_rooms_container").empty().text(no_rm_avail_txt);
			}
		});

		/*For reallocating rooms in the modal*/
		$("#realloc_allocated_rooms").on('click', function(e){
			$(".error_text").text('');
			var room_to_reallocate = $('#realloc_avail_rooms').val();
			if (typeof room_to_reallocate == 'undefined' || room_to_reallocate == 0) {
				$("#realloc_sel_rm_err_p").text(slct_rm_err);
				return false;
			}
		});
		/*For swaping rooms in the modal*/
		$("#swap_allocated_rooms").on('click', function(e){
			$(".error_text").text('');
			var room_to_swap = $('#swap_avail_rooms').val();
			if (typeof room_to_swap == 'undefined' || room_to_swap == 0) {
				$("#swap_sel_rm_err_p").text(slct_rm_err);
				return false;
			}
		});

		/*END*/

		$(".textarea-autosize").autosize();

		geocoder.geocode({
			address: '<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['delivery']->address1,'\'');?>
,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['delivery']->postcode,'\'');?>
,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['delivery']->city,'\'');
if ((isset($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name)) && $_smarty_tpl->tpl_vars['addresses']->value['delivery']->id_state) {?>,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name,'\'');
}?>,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['delivery']->country,'\'');?>
'
			}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK)
			{
				delivery_map = new google.maps.Map(document.getElementById('map-delivery-canvas'), {
					zoom: 10,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: results[0].geometry.location
				});
				var delivery_marker = new google.maps.Marker({
					map: delivery_map,
					position: results[0].geometry.location,
					url: 'http://maps.google.com?q=<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['delivery']->address1);?>
,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['delivery']->postcode);?>
,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['delivery']->city);
if ((isset($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name)) && $_smarty_tpl->tpl_vars['addresses']->value['delivery']->id_state) {?>,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name);
}?>,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['delivery']->country);?>
'
				});
				google.maps.event.addListener(delivery_marker, 'click', function() {
					window.open(delivery_marker.url);
				});
			}
		});

		geocoder.geocode({
			address: '<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['invoice']->address1,'\'');?>
,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['invoice']->postcode,'\'');?>
,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['invoice']->city,'\'');
if ((isset($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name)) && $_smarty_tpl->tpl_vars['addresses']->value['invoice']->id_state) {?>,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name,'\'');
}?>,<?php echo addcslashes($_smarty_tpl->tpl_vars['addresses']->value['invoice']->country,'\'');?>
'
			}, function(results, status) {
			if (status === google.maps.GeocoderStatus.OK)
			{
				invoice_map = new google.maps.Map(document.getElementById('map-invoice-canvas'), {
					zoom: 10,
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					center: results[0].geometry.location
				});
				invoice_marker = new google.maps.Marker({
					map: invoice_map,
					position: results[0].geometry.location,
					url: 'http://maps.google.com?q=<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['invoice']->address1);?>
,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['invoice']->postcode);?>
,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['invoice']->city);
if ((isset($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name)) && $_smarty_tpl->tpl_vars['addresses']->value['invoice']->id_state) {?>,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['deliveryState']->name);
}?>,<?php echo urlencode($_smarty_tpl->tpl_vars['addresses']->value['invoice']->country);?>
'
				});
				google.maps.event.addListener(invoice_marker, 'click', function() {
					window.open(invoice_marker.url);
				});
			}
		});

		var date = new Date();
		var hours = date.getHours();
		if (hours < 10)
			hours = "0" + hours;
		var mins = date.getMinutes();
		if (mins < 10)
			mins = "0" + mins;
		var secs = date.getSeconds();
		if (secs < 10)
			secs = "0" + secs;

		$('.datepicker').datetimepicker({
			prevText: '',
			nextText: '',
			dateFormat: 'yy-mm-dd ' + hours + ':' + mins + ':' + secs
		});
	});

	// Fix wrong maps center when map is hidden
	$('#tabAddresses').click(function(){
		x = delivery_map.getZoom();
		c = delivery_map.getCenter();
		google.maps.event.trigger(delivery_map, 'resize');
		delivery_map.setZoom(x);
		delivery_map.setCenter(c);

		x = invoice_map.getZoom();
		c = invoice_map.getCenter();
		google.maps.event.trigger(invoice_map, 'resize');
		invoice_map.setZoom(x);
		invoice_map.setCenter(c);
	});
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block "override_tpl"} */
}
