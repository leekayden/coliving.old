<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\orders\_documents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c128e8ea0_18912335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce47d9a538a5923545f5bbe3ee268aeb693e1c3d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\orders\\_documents.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c128e8ea0_18912335 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="table-responsive">
	<table class="table" id="documents_table">
		<thead>
			<tr>
				<th>
					<span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date'),$_smarty_tpl ) );?>
</span>
				</th>
				<th>
					<span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Document'),$_smarty_tpl ) );?>
</span>
				</th>
				<th>
					<span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Number'),$_smarty_tpl ) );?>
</span>
				</th>
				<th>
					<span class="title_box "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount'),$_smarty_tpl ) );?>
</span>
				</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value->getDocuments(), 'document');
$_smarty_tpl->tpl_vars['document']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['document']->value) {
$_smarty_tpl->tpl_vars['document']->do_else = false;
?>

				<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
					<?php if ((isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
					<tr id="delivery_<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
					<?php } else { ?>
					<tr id="invoice_<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
					<?php }?>
				<?php } elseif (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderSlip') {?>
					<tr id="orderslip_<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
				<?php }?>

						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['document']->value->date_add),$_smarty_tpl ) );?>
</td>
						<td>
							<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
								<?php if ((isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery slip'),$_smarty_tpl ) );?>

								<?php } else { ?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice'),$_smarty_tpl ) );?>

								<?php }?>
							<?php } elseif (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderSlip') {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Credit Slip'),$_smarty_tpl ) );?>

							<?php }?>
						</td>
						<td>
							<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
								<?php if ((isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
									<a class="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See the document'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
								<?php } else { ?>
									<a class="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See the document'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
							   <?php }?>
							<?php } elseif (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderSlip') {?>
								<a class="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See the document'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
">
							<?php }?>
							<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
								<?php if ((isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
									<?php echo Configuration::get('PS_DELIVERY_PREFIX',$_smarty_tpl->tpl_vars['current_id_lang']->value,null,$_smarty_tpl->tpl_vars['order']->value->id_shop);
echo sprintf('%06d',$_smarty_tpl->tpl_vars['document']->value->delivery_number);?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['document']->value->getInvoiceNumberFormatted($_smarty_tpl->tpl_vars['current_id_lang']->value,$_smarty_tpl->tpl_vars['order']->value->id_shop);?>

								<?php }?>
							<?php } elseif (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderSlip') {?>
								<?php echo Configuration::get('PS_CREDIT_SLIP_PREFIX',$_smarty_tpl->tpl_vars['current_id_lang']->value);
echo sprintf('%06d',$_smarty_tpl->tpl_vars['document']->value->id);?>

							<?php }?>
							</a>
						</td>
						<td>
						<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
							<?php if ((isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
								--
							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['document']->value->total_paid_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
&nbsp;
								<?php if ($_smarty_tpl->tpl_vars['document']->value->getTotalPaid()) {?>
									<span>
									<?php if ($_smarty_tpl->tpl_vars['document']->value->getRestPaid() > 0) {?>
										(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['document']->value->getRestPaid(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'not paid'),$_smarty_tpl ) );?>
)
									<?php } elseif ($_smarty_tpl->tpl_vars['document']->value->getRestPaid() < 0) {?>
										(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>-$_smarty_tpl->tpl_vars['document']->value->getRestPaid(),'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'overpaid'),$_smarty_tpl ) );?>
)
									<?php }?>
									</span>
								<?php }?>
							<?php }?>
						<?php } elseif (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderSlip') {?>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['document']->value->total_products_tax_incl+$_smarty_tpl->tpl_vars['document']->value->total_shipping_tax_incl,'currency'=>$_smarty_tpl->tpl_vars['currency']->value->id),$_smarty_tpl ) );?>

						<?php }?>
						</td>
						<td class="text-right document_action">
						<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
							<?php if (!(isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>

								<?php if ($_smarty_tpl->tpl_vars['document']->value->getRestPaid()) {?>
									<a href="#formAddPaymentPanel" class="js-set-payment btn btn-default anchor" data-amount="<?php echo $_smarty_tpl->tpl_vars['document']->value->getRestPaid();?>
" data-id-invoice="<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set payment form'),$_smarty_tpl ) );?>
">
										<i class="icon-money"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter payment'),$_smarty_tpl ) );?>

									</a>
								<?php }?>

								<a href="#" class="btn btn-default" onclick="$('#invoiceNote<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
').show(); return false;" title="<?php if ($_smarty_tpl->tpl_vars['document']->value->note == '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add note'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit note'),$_smarty_tpl ) );
}?>">
									<?php if ($_smarty_tpl->tpl_vars['document']->value->note == '') {?>
										<i class="icon-plus-sign-alt"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add note'),$_smarty_tpl ) );?>

									<?php } else { ?>
										<i class="icon-pencil"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit note'),$_smarty_tpl ) );?>

									<?php }?>
								</a>

							<?php }?>
						<?php }?>
						</td>
					</tr>
				<?php if (get_class($_smarty_tpl->tpl_vars['document']->value) == 'OrderInvoice') {?>
					<?php if (!(isset($_smarty_tpl->tpl_vars['document']->value->is_delivery))) {?>
					<tr id="invoiceNote<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
" style="display:none">
						<td colspan="5">
							<form action="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;viewOrder&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;
if ((isset($_GET['token']))) {?>&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);
}?>" method="post">
								<p>
									<label for="editNote<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
" class="t"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note'),$_smarty_tpl ) );?>
</label>
									<input type="hidden" name="id_order_invoice" value="<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
" />
									<textarea name="note" id="editNote<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
" class="edit-note textarea-autosize"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['document']->value->note, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
								</p>
								<p>
									<button type="submit" name="submitEditNote" class="btn btn-default">
										<i class="icon-save"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

									</button>
									<a class="btn btn-default" href="#" id="cancelNote" onclick="$('#invoiceNote<?php echo $_smarty_tpl->tpl_vars['document']->value->id;?>
').hide();return false;">
										<i class="icon-remove"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

									</a>
								</p>
							</form>
						</td>
					</tr>
					<?php }?>
				<?php }?>
			<?php
}
if ($_smarty_tpl->tpl_vars['document']->do_else) {
?>
				<tr>
					<td colspan="5" class="list-empty">
						<div class="list-empty-msg">
							<i class="icon-warning-sign list-empty-icon"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no available document'),$_smarty_tpl ) );?>

						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['invoice_management_active']->value)) && $_smarty_tpl->tpl_vars['invoice_management_active']->value) {?>
							<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current_index']->value;?>
&amp;viewOrder&amp;submitGenerateInvoice&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;
if ((isset($_GET['token']))) {?>&amp;token=<?php echo htmlspecialchars($_GET['token'], ENT_QUOTES, 'UTF-8', true);
}?>">
								<i class="icon-repeat"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate invoice'),$_smarty_tpl ) );?>

							</a>
						<?php }?>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>
<?php }
}
