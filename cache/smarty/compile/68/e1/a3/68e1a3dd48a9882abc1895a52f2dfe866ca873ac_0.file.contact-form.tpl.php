<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\contact-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10aea8a4_08397947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68e1a3dd48a9882abc1895a52f2dfe866ca873ac' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\contact-form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10aea8a4_08397947 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['confirmation']->value))) {?>
	<p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message has been successfully sent to our team.'),$_smarty_tpl ) );?>
</p>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>

				</span>
			</a>
		</li>
	</ul>
<?php } elseif ((isset($_smarty_tpl->tpl_vars['alreadySent']->value))) {?>
	<p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message has already been sent.'),$_smarty_tpl ) );?>
</p>
	<ul class="footer_links clearfix">
		<li>
			<a class="btn btn-default button button-small" href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>">
				<span>
					<i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home'),$_smarty_tpl ) );?>

				</span>
			</a>
		</li>
	</ul>
<?php } else { ?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<div class="margin-top-50 htl-contact-page">
		<div class="row">
			<p class="contact-header col-sm-offset-2 col-sm-8"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact Us'),$_smarty_tpl ) );?>
</p>
			<p class="contact-desc col-sm-offset-2 col-sm-8"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text.'),$_smarty_tpl ) );?>
</p>
		</div>
		<div class="row margin-top-50">
			<?php if (((isset($_smarty_tpl->tpl_vars['gblHtlAddress']->value)) && $_smarty_tpl->tpl_vars['gblHtlAddress']->value) && ((isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)) && $_smarty_tpl->tpl_vars['gblHtlPhone']->value) && ((isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)) && $_smarty_tpl->tpl_vars['gblHtlEmail']->value)) {?>
				<div class="col-sm-6">
					<div class="htl-global-address-div col-md-8 col-sm-12">
						<?php if ((isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)) && $_smarty_tpl->tpl_vars['gblHtlPhone']->value) {?>
							<div>
								<p class="global-address-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Main Branch'),$_smarty_tpl ) );?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlAddress']->value;?>

								</p>
							</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)) && $_smarty_tpl->tpl_vars['gblHtlPhone']->value) {?>
							<div>
								<p class="global-address-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone'),$_smarty_tpl ) );?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlPhone']->value;?>

								</p>
							</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)) && $_smarty_tpl->tpl_vars['gblHtlEmail']->value) {?>
							<div>
								<p class="global-address-header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail Us'),$_smarty_tpl ) );?>
</p>
								<p class="global-address-value">
									<?php echo $_smarty_tpl->tpl_vars['gblHtlEmail']->value;?>

								</p>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }?>
			<div class="col-sm-6 <?php if (!((isset($_smarty_tpl->tpl_vars['gblHtlAddress']->value)) && $_smarty_tpl->tpl_vars['gblHtlAddress']->value) && !((isset($_smarty_tpl->tpl_vars['gblHtlPhone']->value)) && $_smarty_tpl->tpl_vars['gblHtlPhone']->value) && !((isset($_smarty_tpl->tpl_vars['gblHtlEmail']->value)) && $_smarty_tpl->tpl_vars['gblHtlEmail']->value)) {?> col-sm-offset-3 <?php }?>">
				<form action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post" class="contact-form-box" enctype="multipart/form-data">
					<?php if ((isset($_smarty_tpl->tpl_vars['customerThread']->value['id_contact'])) && $_smarty_tpl->tpl_vars['customerThread']->value['id_contact'] && count($_smarty_tpl->tpl_vars['contacts']->value)) {?>
						<?php $_smarty_tpl->_assignInScope('flag', true);?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['contact']->value['id_contact'] == $_smarty_tpl->tpl_vars['customerThread']->value['id_contact']) {?>
								<input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
								<input type="hidden" name="id_contact" value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
" />
								<?php $_smarty_tpl->_assignInScope('flag', false);?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if ($_smarty_tpl->tpl_vars['flag']->value && (isset($_smarty_tpl->tpl_vars['contacts']->value[0]['id_contact']))) {?>
							<input type="text" class="form-control" id="contact_name" name="contact_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contacts']->value[0]['name'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
							<input type="hidden" name="id_contact" value="<?php echo intval($_smarty_tpl->tpl_vars['contacts']->value[0]['id_contact']);?>
" />
						<?php }?>
					<?php } else { ?>
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="message" class="control-label">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject'),$_smarty_tpl ) );?>

								</label>
								<div class="dropdown">
		                            <button class="form-control contact_type_input" type="button" data-toggle="dropdown">
										<span id="contact_type" class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose'),$_smarty_tpl ) );?>
</span>
										<input type="hidden" id="id_contact" name="id_contact" value="0">
										<span class="arrow_span">
		                                    <i class="icon icon-angle-down"></i>
		                                </span>
		                            </button>
		                            <ul class="dropdown-menu contact_type_ul">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
											<li  value="<?php echo intval($_smarty_tpl->tpl_vars['contact']->value['id_contact']);?>
"<?php if ((isset($_REQUEST['id_contact'])) && $_REQUEST['id_contact'] == $_smarty_tpl->tpl_vars['contact']->value['id_contact']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

											</li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		                                <?php if ((isset($_smarty_tpl->tpl_vars['all_hotels_info']->value)) && $_smarty_tpl->tpl_vars['all_hotels_info']->value) {?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_hotels_info']->value, 'htl_v', false, 'htl_k');
$_smarty_tpl->tpl_vars['htl_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['htl_k']->value => $_smarty_tpl->tpl_vars['htl_v']->value) {
$_smarty_tpl->tpl_vars['htl_v']->do_else = false;
?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php }?>
		                            </ul>
		                        </div>
							</div>
						</div>
					<?php }?>
					<div class="form-group row">
						<div class="col-sm-12">
							<label for="price" class="control-label">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>

							</label>
							<?php if ((isset($_smarty_tpl->tpl_vars['customerThread']->value['email']))) {?>
								<input class="form-control contact_input" type="email" id="email" name="from" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerThread']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="readonly" />
							<?php } else { ?>
								<input class="form-control contact_input validate" type="email" id="email" name="from" data-validate="isEmail" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
							<?php }?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<label for="message" class="control-label">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message/Query'),$_smarty_tpl ) );?>

							</label>
							<textarea class="form-control contact_textarea" id="message" name="message"><?php if ((isset($_smarty_tpl->tpl_vars['message']->value))) {
echo stripslashes(htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true));
}?></textarea>
						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['fileupload']->value == 1) {?>
						<div class="form-group row">
							<div class="col-sm-12">
								<label for="fileUpload" class="control-label">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attach File'),$_smarty_tpl ) );?>

								</label>
								<input type="hidden" name="MAX_FILE_SIZE" value="<?php if ((isset($_smarty_tpl->tpl_vars['max_upload_size']->value)) && $_smarty_tpl->tpl_vars['max_upload_size']->value) {
echo intval($_smarty_tpl->tpl_vars['max_upload_size']->value);
} else { ?>2000000<?php }?>" />
								<input type="file" name="fileUpload" id="fileUpload" class="form-control" />
							</div>
						</div>
					<?php }?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','moduleName'=>'contactform'),$_smarty_tpl ) );?>

					<div class="form-group">
						<input type="text" name="url" value="" class="hidden" />
						<input type="hidden" name="contactKey" value="<?php echo $_smarty_tpl->tpl_vars['contactKey']->value;?>
" />
						<button class="btn button button-medium contact_btn" type="submit" name="submitMessage" id="submitMessage" ><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send Message'),$_smarty_tpl ) );?>
</span></button>
					</div>
				</form>
			</div>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['hotelsInfo']->value)) && $_smarty_tpl->tpl_vars['hotelsInfo']->value) {?>
			<div class="row hotels-container">
				<div class="col-sm-12 hotel-header">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Hotels'),$_smarty_tpl ) );?>
</span>
				</div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelsInfo']->value, 'hotel');
$_smarty_tpl->tpl_vars['hotel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotel']->value) {
$_smarty_tpl->tpl_vars['hotel']->do_else = false;
?>
					<div class="col-sm-6 margin-bottom-50">
						<div class="hotel-city-container">
							<span class="htl-map-icon"></span><span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['city'];?>
</span>
						</div>
						<div class="hotel-address-container">
							<div class="col-xs-4">
								<img class="htl-img" style="width:100%" src="<?php echo $_smarty_tpl->tpl_vars['hotel']->value['image_url'];?>
">
							</div>
							<div class="col-xs-8">
								<p class="hotel-name"><span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['hotel_name'];?>
</span></p>
								<p class="hotel-branch-info-value"><?php echo $_smarty_tpl->tpl_vars['hotel']->value['address'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['city'];?>
, <?php ob_start();
echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable5) {
echo $_smarty_tpl->tpl_vars['hotel']->value['state_name'];?>
,<?php }?> <?php echo $_smarty_tpl->tpl_vars['hotel']->value['country_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['hotel']->value['zipcode'];?>
</p>
								<?php if ($_smarty_tpl->tpl_vars['hotel']->value['latitude'] != 0 || $_smarty_tpl->tpl_vars['hotel']->value['longitude'] != 0) {?>
									<p class="hotel-branch-info-value">
										<a class="btn htl-map-direction-btn" href="http://maps.google.com/maps?daddr=(<?php echo $_smarty_tpl->tpl_vars['hotel']->value['latitude'];?>
,<?php echo $_smarty_tpl->tpl_vars['hotel']->value['longitude'];?>
)" target="_blank">
											<span class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View on map'),$_smarty_tpl ) );?>
</span>
										</a>
									</p>
								<?php }?>
								<p class="hotel-branch-info-value">
									<span class="htl-address-icon htl-phone-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['phone'];?>

								</p>
								<p class="hotel-branch-info-value">
									<span class="htl-address-icon htl-email-icon"></span><?php echo $_smarty_tpl->tpl_vars['hotel']->value['email'];?>

								</p>
							</div>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['hotelLocationArray']->value))) {?>
			<div class="row">
				<div class="col-xs-12 col-sm-12" id="googleMapWrapper">
					<div id="map"></div>
				</div>
			</div>
		<?php }?>
		<div style="clear:both;"></div>
	</div>
<?php }?>

<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'contact_fileDefaultHtml'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'contact_fileDefaultHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No file selected','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'contact_fileDefaultHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'contact_fileButtonHtml'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'contact_fileButtonHtml'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose File','js'=>1),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'contact_fileButtonHtml'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ((isset($_smarty_tpl->tpl_vars['hotelLocationArray']->value))) {?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('hotelLocationArray'=>$_smarty_tpl->tpl_vars['hotelLocationArray']->value),$_smarty_tpl ) );?>

<?php } else { ?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('hotelLocationArray'=>0),$_smarty_tpl ) );?>

<?php }
}
}
