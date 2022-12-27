<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:55:12
  from 'C:\xampp2\htdocs\coliving\modules\hotelreservationsystem\views\templates\admin\add_hotel\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaeb30d28de2_07489715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a78f14c9ac30cd575064cf6ae441eebfab67bf90' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\hotelreservationsystem\\views\\templates\\admin\\add_hotel\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../_partials/htl-form-fields-flag.tpl' => 4,
  ),
),false)) {
function content_63aaeb30d28de2_07489715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="panel">
	<div class="panel-heading">
		<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
			<i class='icon-pencil'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<i class='icon-plus'></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add New Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

		<?php }?>
	</div>

	<form id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_form" class="defaultForm <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['name_controller']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 form-horizontal" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['submit_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>&token=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" enctype="multipart/form-data" <?php if ((isset($_smarty_tpl->tpl_vars['style']->value))) {?>style="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['style']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
			<div class="col-lg-12">
				<label class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Language','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
				<input type="hidden" name="choosedLangId" id="choosedLangId" value="<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['id_lang'];?>
">
				<button type="button" id="multi_lang_btn" class="btn btn-default dropdown-toggle wk_language_toggle" data-toggle="dropdown">
					<?php echo $_smarty_tpl->tpl_vars['currentLang']->value['name'];?>

					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu wk_language_menu" style="left:14%;top:32px;">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						<li>
							<a href="javascript:void(0)" onclick="showLangField('<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);">
								<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

							</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
				<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change language for updating information in multiple language.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</p>
				<hr>
			</div>
		<?php }?>

		<div class="tabs wk-tabs-panel">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#hotel-information" data-toggle="tab">
						<i class="icon-info-sign"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li>
					<a href="#hotel-images" data-toggle="tab">
						<i class="icon-image"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Images','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li>
					<a href="#hotel-refund-policies" data-toggle="tab">
						<i class="icon-file"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refund Policies','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

					</a>
				</li>
			</ul>
			<div class="tab-content panel collapse in">
				<div class="tab-pane active" id="hotel-information">
					<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
						<input id="id-hotel" type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" name="id" />
					<?php }?>
					<div class="form-group">
						<label class="control-label col-lg-3">
							<span>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable Hotel','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

							</span>
						</label>
						<div class="col-lg-9 ">
							<span class="switch prestashop-switch fixed-width-lg">
								<input type="radio" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value)) && $_smarty_tpl->tpl_vars['hotel_info']->value['active'] == 1) {?> checked="checked" <?php } else { ?>checked="checked"<?php }?> value="1" id="ENABLE_HOTEL_on" name="ENABLE_HOTEL">
								<label for="ENABLE_HOTEL_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );?>
</label>
								<input <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value)) && $_smarty_tpl->tpl_vars['hotel_info']->value['active'] == 0) {?> checked="checked" <?php }?> type="radio" value="0" id="ENABLE_HOTEL_off" name="ENABLE_HOTEL">
								<label for="ENABLE_HOTEL_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );?>
</label>
								<a class="slide-button btn"></a>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required" for="hotel_name" >
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Name :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

							<?php $_smarty_tpl->_subTemplateRender("file:../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
						</label>
						<div class="col-lg-6">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('hotel_name', "hotel_name_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']));?>
								<input type="text"
								id="hotel_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								name="hotel_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								value="<?php if ((isset($_POST[$_smarty_tpl->tpl_vars['hotel_name']->value]))) {
echo mb_convert_encoding(htmlspecialchars($_POST[$_smarty_tpl->tpl_vars['hotel_name']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable1 = ob_get_clean();
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['hotel_name'][$_prefixVariable1], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>"
								class="form-control wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								maxlength="128"
								<?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?> />
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Short Description :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

							<?php $_smarty_tpl->_subTemplateRender("file:../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</label>
						<div class="col-lg-6">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('short_desc_name', "short_description_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']));?>
								<div id="short_desc_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="short_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="short_description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if ((isset($_POST[$_smarty_tpl->tpl_vars['short_desc_name']->value]))) {
echo $_POST[$_smarty_tpl->tpl_vars['short_desc_name']->value];
} elseif ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable2 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['hotel_info']->value['short_description'][$_prefixVariable2];
}?></textarea>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

							<?php $_smarty_tpl->_subTemplateRender("file:../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</label>
						<div class="col-lg-6">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('description', "description_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']));?>
								<div id="description_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="description_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if ((isset($_POST[$_smarty_tpl->tpl_vars['description']->value]))) {
echo $_POST[$_smarty_tpl->tpl_vars['description']->value];
} elseif ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable3 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['hotel_info']->value['description'][$_prefixVariable3];
}?></textarea>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<input type="text" name="phone" id="phone" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['phone'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="icon-envelope-o"></i>
								</span>
								<input class="reg_sel_input form-control-static" type="text" name="email" id="hotel_email"  <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo $_smarty_tpl->tpl_vars['hotel_info']->value['email'];?>
"<?php }?>/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<textarea name="address" rows="4" cols="35" ><?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['address'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating :'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_rating" id="hotel_rating" value="">
									<option value="" selected="selected">No Star</option>
									<option value="1" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating'] == 1) {?>selected<?php }
}?>>*</option>
									<option value="2" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating'] == 2) {?>selected<?php }
}?>>**</option>
									<option value="3" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating'] == 3) {?>selected<?php }
}?>>***</option>
									<option value="4" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating'] == 4) {?>selected<?php }
}?>>****</option>
									<option value="5" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['rating'] == 5) {?>selected<?php }
}?>>*****</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group check_in_div" style="position:relative">
						<label class="col-sm-3 control-label required" for="check_in_time">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check In :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

						</label>
						<div class="col-sm-2">
							<input autocomplete="off" type="text" class="form-control" id="check_in_time" name="check_in" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['check_in'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group check_out_div" style="position:relative">
						<label class="col-sm-3 control-label required" for="check_out_time">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check Out :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

						</label>
						<div class="col-sm-2">
							<input autocomplete="off" type="text" class="form-control" id="check_out_time" name="check_out" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['check_out'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-9">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_country" id="hotel_country" value="">
									<option value="0" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose your Country','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
 </option>
									<?php if ($_smarty_tpl->tpl_vars['country_var']->value) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['country_var']->value, 'countr');
$_smarty_tpl->tpl_vars['countr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['countr']->value) {
$_smarty_tpl->tpl_vars['countr']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['countr']->value['id_country'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['country_id'] == ((string)$_smarty_tpl->tpl_vars['countr']->value['id_country'])) {?>selected<?php }
}?>> <?php echo $_smarty_tpl->tpl_vars['countr']->value['name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								</select>
							</div>
							<div class="help-block"><em>** <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If Hotel\'s country is not present in country list then import that country from','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLocalization'), ENT_QUOTES, 'UTF-8', true);?>
"> <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Localization','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</strong> </a><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'tab.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</em></div>
						</div>
					</div>
					<div class="form-group hotel_state_dv" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value)) && !$_smarty_tpl->tpl_vars['state_var']->value) {?>style="display:none;"<?php }?>>
						<label class="control-label col-sm-3 required hotel_state_lbl" for="hotel_state" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value)) && !$_smarty_tpl->tpl_vars['state_var']->value) {?>style="display:none;"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<div style="width: 195px;">
								<select class="form-control" name="hotel_state" id="hotel_state">
								<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
									<?php if ($_smarty_tpl->tpl_vars['state_var']->value) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['state_var']->value, 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?> <?php if ($_smarty_tpl->tpl_vars['hotel_info']->value['state_id'] == ((string)$_smarty_tpl->tpl_vars['state']->value['id'])) {?>selected<?php }
}?>> <?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								<?php } else { ?>
									<option value="0" selected="selected"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Country First','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</option>
								<?php }?>
								</select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_city"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<input class="form-control" type="" data-validate="" id="hotel_city" name="hotel_city" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['city'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 required" for="hotel_postal_code"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip Code :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-6">
							<input class="form-control" type="" data-validate="" id="hotel_postal_code" name="hotel_postal_code" <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['zipcode'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?> />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Policies :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

							<?php $_smarty_tpl->_subTemplateRender("file:../../../_partials/htl-form-fields-flag.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</label>
						<div class="col-lg-6">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('policies', "policies_".((string)$_smarty_tpl->tpl_vars['language']->value['id_lang']));?>
								<div id="policies_div_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="wk_text_field_all wk_text_field_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['currentLang']->value['id_lang'] != $_smarty_tpl->tpl_vars['language']->value['id_lang']) {?>style="display:none;"<?php }?>>
									<textarea
									name="policies_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									id="policies_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
									cols="2" rows="3"
									class="wk_tinymce form-control"><?php if ((isset($_POST[$_smarty_tpl->tpl_vars['policies']->value]))) {
echo $_POST[$_smarty_tpl->tpl_vars['policies']->value];
} elseif ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['hotel_info']->value['policies'][$_prefixVariable4];
}?></textarea>
								</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['enabledDisplayMap']->value)) && $_smarty_tpl->tpl_vars['enabledDisplayMap']->value) {?>
						<div class="form-group">
							<label class="col-sm-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Map :','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
							<div class="col-sm-6" id="googleMapContainer">
								<input type="hidden" id="loclatitude" name="loclatitude" value="<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['latitude'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>" />
								<input type="hidden" id="loclongitude" name="loclongitude" value="<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['longitude'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');
}?>" />
								<input type="hidden" id="locformatedAddr" name="locformatedAddr" value="<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
echo $_smarty_tpl->tpl_vars['hotel_info']->value['map_formated_address'];
}?>" />
								<input type="hidden" id="googleInputField" name="googleInputField" value="<?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {
echo $_smarty_tpl->tpl_vars['hotel_info']->value['map_input_text'];
}?>" />
								<input id="pac-input" class="controls" type="text" placeholder="Enter a location">
								<div id="map"></div>
							</div>
						</div>
					<?php }?>
				</div>
				<div class="tab-pane" id="hotel-images">
					<?php if ((isset($_smarty_tpl->tpl_vars['hotel_info']->value['id'])) && $_smarty_tpl->tpl_vars['hotel_info']->value['id']) {?>
						<div class="form-group row">
							<label for="hotel_images" class="col-sm-3 control-label padding-top-0">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload images','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
&nbsp;:&nbsp;&nbsp;
							</label>
							<div class="col-sm-5">
								<input class="form-control-static" type="file" id="hotel_images" name="hotel_images[]" multiple>
							</div>
						</div>
						<hr>
												<h4><i class="icon-image"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Images','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span></h4>
						<div class="row">
							<div class="col-sm-12">
								<div class="table-responsive">
									<table class="table" id="hotel-image-table">
										<thead>
											<tr>
												<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Id','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cover','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Action','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
											</tr>
										</thead>
										<tbody>
											<?php if ((isset($_smarty_tpl->tpl_vars['hotelImages']->value)) && $_smarty_tpl->tpl_vars['hotelImages']->value) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelImages']->value, 'image', false, NULL, 'hotelImage', array (
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
													<tr class="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>cover-image-tr<?php }?>">
														<td class="text-center"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
														<td class="text-center">
															<a class="htl-img-preview" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
">
																<img class="img-thumbnail" width="100" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image_link'], ENT_QUOTES, 'UTF-8', true);?>
"/>
															</a>
														</td>
														<td class="text-center <?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>cover-image-td<?php }?>">
															<a href="#" class="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>text-success<?php } else { ?>text-danger<?php }?> changer-cover-image" data-id-hotel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-is-cover="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>1<?php } else { ?>0<?php }?>" data-id-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
																<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>
																	<i class="icon-check"></i>
																<?php } else { ?>
																	<i class="icon-times"></i>
																<?php }?>
															</a>
														</td>
														<td class="text-center">
															<button type="button" class="btn btn-default delete-hotel-image" data-id-hotel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotel_info']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-is-cover="<?php if ($_smarty_tpl->tpl_vars['image']->value['cover'] == 1) {?>1<?php } else { ?>0<?php }?>" data-id-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="icon-trash"></i></button>
														</td>
													</tr>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php } else { ?>
												<tr class="list-empty-tr">
													<td class="list-empty" colspan="5">
														<div class="list-empty-msg">
															<i class="icon-warning-sign list-empty-icon"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Image Found','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

														</div>
													</td>
												</tr>
											<?php }?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the hotel information before saving the hotel images.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

						</div>
					<?php }?>
				</div>
				<div class="tab-pane" id="hotel-refund-policies">
					<?php if ((isset($_smarty_tpl->tpl_vars['hotel_info']->value['id'])) && $_smarty_tpl->tpl_vars['hotel_info']->value['id']) {?>
						<div class="form-group">
							<label for="active_refund" class="control-label col-sm-5">
								<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable, if you want to enable refund for this hotel.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable refund','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</span>
							</label>
							<div class="col-sm-7">
								<span class="switch prestashop-switch fixed-width-lg">
									<input type="radio" value="1" id="active_refund_on" name="active_refund"
									<?php if ((isset($_POST['active_refund']))) {
if ($_POST['active_refund']) {?>checked="checked"<?php }
} elseif ((isset($_smarty_tpl->tpl_vars['hotel_info']->value)) && $_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>checked="checked"<?php }?>>

									<label for="active_refund_on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>

									<input type="radio" value="0" id="active_refund_off" name="active_refund"
									<?php if ((isset($_POST['active_refund']))) {
if (!$_POST['active_refund']) {?>checked="checked"<?php }
} elseif (!(isset($_smarty_tpl->tpl_vars['hotel_info']->value))) {?>checked="checked"<?php } elseif ((isset($_smarty_tpl->tpl_vars['hotel_info']->value)) && !$_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>checked="checked"<?php }?>>

									<label for="active_refund_off"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</label>
									<a class="slide-button btn"></a>
								</span>
							</div>
						</div>
						<div class="refund_rules_container" <?php if ((isset($_POST['active_refund']))) {
if (!$_POST['active_refund']) {?>style="display:none;"<?php }
} elseif (!(isset($_smarty_tpl->tpl_vars['hotel_info']->value['active_refund'])) || !$_smarty_tpl->tpl_vars['hotel_info']->value['active_refund']) {?>style="display:none;"<?php }?>>
							<?php if ((isset($_smarty_tpl->tpl_vars['allRefundRules']->value)) && $_smarty_tpl->tpl_vars['allRefundRules']->value) {?>
								<hr>
								<div class="table-responsive">
									<table class="table wk-htl-datatable">
										<thead>
											<tr>
												<th></th>
												<th></th>
												<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full payment charges','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Advance payment charges','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
												<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Days before cancelation','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</th>
											</tr>
										</thead>
										<tbody id="slides">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allRefundRules']->value, 'refundRule');
$_smarty_tpl->tpl_vars['refundRule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['refundRule']->value) {
$_smarty_tpl->tpl_vars['refundRule']->do_else = false;
?>
												<tr id="slides_<?php echo $_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'];?>
">
													<td>
														<i class="icon-arrows "></i>
													</td>
													<td>
														<p class="checkbox">
															<label><input name="htl_refund_rules[]" type="checkbox" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['hotelRefundRules']->value)) && (in_array($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'],$_smarty_tpl->tpl_vars['hotelRefundRules']->value))) {?>checked<?php }?> /></label>
														</p>
													</td>
													<td>
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'], ENT_QUOTES, 'UTF-8', true);?>
 <a target="blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRules'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_refund_rule=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['id_refund_rule'], ENT_QUOTES, 'UTF-8', true);?>
&amp;updatehtl_order_refund_rules"><i class="icon-external-link-sign"></i></a>
													</td>
													<td>
														<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

													</td>
													<td>
														<?php if ($_smarty_tpl->tpl_vars['refundRule']->value['payment_type'] == $_smarty_tpl->tpl_vars['WK_REFUND_RULE_PAYMENT_TYPE_PERCENTAGE']->value) {?>
															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_full_pay'], ENT_QUOTES, 'UTF-8', true);?>
 %
														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_full_pay'],'currency'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl ) );?>

														<?php }?>
													</td>
													<td>
														<?php if ($_smarty_tpl->tpl_vars['refundRule']->value['payment_type'] == $_smarty_tpl->tpl_vars['WK_REFUND_RULE_PAYMENT_TYPE_PERCENTAGE']->value) {?>
															<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_adv_pay'], ENT_QUOTES, 'UTF-8', true);?>
 %
														<?php } else { ?>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['refundRule']->value['deduction_value_adv_pay'],'currency'=>$_smarty_tpl->tpl_vars['defaultCurrency']->value),$_smarty_tpl ) );?>

														<?php }?>
													</td>
													<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['refundRule']->value['days'], ENT_QUOTES, 'UTF-8', true);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
</td>
												</tr>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</tbody>
									</table>
								</div>
							<?php } else { ?>
								<div class="alert alert-warning">
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No refund rules are created yet.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can create refund rules by visiting '),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminOrderRefundRules');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'create refund rules'),$_smarty_tpl ) );?>
</a>
								</div>
							<?php }?>
						</div>
					<?php } else { ?>
						<div class="alert alert-warning">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the hotel information before saving the hotel images.','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

						</div>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel'), ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
				<i class="process-icon-cancel"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

			</a>
			<button type="submit" name="submitAddhotel_branch_info" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

			</button>
			<button type="submit" name="submitAdd<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['table']->value, ENT_QUOTES, 'UTF-8', true);?>
AndStay" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay','mod'=>'hotelreservationsystem'),$_smarty_tpl ) );?>

			</button>
		</div>
	</form>
</div>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('adminHotelCtrlUrl'=>$_smarty_tpl->tpl_vars['link']->value->getAdminlink('AdminAddHotel')),$_smarty_tpl ) );
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'imgUploadSuccessMsg'));
$_block_repeat=true;
echo $_block_plugin1->addJsDefL(array('name'=>'imgUploadSuccessMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Successfully Uploaded','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin1->addJsDefL(array('name'=>'imgUploadSuccessMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'imgUploadErrorMsg'));
$_block_repeat=true;
echo $_block_plugin2->addJsDefL(array('name'=>'imgUploadErrorMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Something went wrong while uploading images. Please try again later !!','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin2->addJsDefL(array('name'=>'imgUploadErrorMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'coverImgSuccessMsg'));
$_block_repeat=true;
echo $_block_plugin3->addJsDefL(array('name'=>'coverImgSuccessMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cover image changed successfully','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin3->addJsDefL(array('name'=>'coverImgSuccessMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'coverImgErrorMsg'));
$_block_repeat=true;
echo $_block_plugin4->addJsDefL(array('name'=>'coverImgErrorMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error while changing cover image','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin4->addJsDefL(array('name'=>'coverImgErrorMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'deleteImgSuccessMsg'));
$_block_repeat=true;
echo $_block_plugin5->addJsDefL(array('name'=>'deleteImgSuccessMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image deleted successfully','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin5->addJsDefL(array('name'=>'deleteImgSuccessMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'deleteImgErrorMsg'));
$_block_repeat=true;
echo $_block_plugin6->addJsDefL(array('name'=>'deleteImgErrorMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Something went wrong while deleteing image. Please try again later !!','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin6->addJsDefL(array('name'=>'deleteImgErrorMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('enabledDisplayMap'=>$_smarty_tpl->tpl_vars['enabledDisplayMap']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('defaultCountry'=>$_smarty_tpl->tpl_vars['defaultCountry']->value),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('statebycountryurl'=>$_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAddHotel')),$_smarty_tpl ) );
$_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'htlImgDeleteSuccessMsg'));
$_block_repeat=true;
echo $_block_plugin7->addJsDefL(array('name'=>'htlImgDeleteSuccessMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image removed successfully.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin7->addJsDefL(array('name'=>'htlImgDeleteSuccessMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'addJsDefL'))) {
throw new SmartyException('block tag \'addJsDefL\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('addJsDefL', array('name'=>'htlImgDeleteErrMsg'));
$_block_repeat=true;
echo $_block_plugin8->addJsDefL(array('name'=>'htlImgDeleteErrMsg'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred while deleting hotel image.','js'=>1,'mod'=>'hotelreservationsystem'),$_smarty_tpl ) );
$_block_repeat=false;
echo $_block_plugin8->addJsDefL(array('name'=>'htlImgDeleteErrMsg'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106097500563aaeb30d222f8_59917670', 'script');
}
/* {block "autoload_tinyMCE"} */
class Block_185952296863aaeb30d24df8_15289783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			tinySetup({
				editor_selector :"wk_tinymce",
				width : 700
			});
		<?php
}
}
/* {/block "autoload_tinyMCE"} */
/* {block 'script'} */
class Block_106097500563aaeb30d222f8_59917670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_106097500563aaeb30d222f8_59917670',
  ),
  'autoload_tinyMCE' => 
  array (
    0 => 'Block_185952296863aaeb30d24df8_15289783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// for tiny mce setup
	var iso = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iso']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var pathCSS = "<?php echo mb_convert_encoding(htmlspecialchars((defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	var ad = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ad']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
	$(document).ready(function(){
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185952296863aaeb30d24df8_15289783', "autoload_tinyMCE", $this->tplIndex);
?>


	});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
