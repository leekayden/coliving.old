<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10887e70_98886352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a2ea9ab1fb85ba79ea23be7c8026908861d4f70' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\authentication.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10887e70_98886352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );
} else { ?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );?>
</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your account'),$_smarty_tpl ) );?>

	<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<h1 class="page-heading"><?php if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Authentication'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );
}?></h1>
<?php if ((isset($_smarty_tpl->tpl_vars['back']->value)) && preg_match("/^http/",$_smarty_tpl->tpl_vars['back']->value)) {
$_smarty_tpl->_assignInScope('current_step', 'login');
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./order-steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_assignInScope('stateExist', false);
$_smarty_tpl->_assignInScope('postCodeExist', false);
$_smarty_tpl->_assignInScope('dniExist', false);
if (!(isset($_smarty_tpl->tpl_vars['email_create']->value))) {?>
	<!--<?php if ((isset($_smarty_tpl->tpl_vars['authentification_error']->value))) {?>
	<div class="alert alert-danger">
		<?php ob_start();
echo count($_smarty_tpl->tpl_vars['authentification_error']->value);
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 1) {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There\'s at least one error'),$_smarty_tpl ) );?>
 :</p>
			<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %s errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['account_error']->value))),$_smarty_tpl ) );?>
 :</p>
		<?php }?>
		<ol>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['authentification_error']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	</div>
	<?php }?>-->
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="create-account_form" class="box">
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>
</h3>
				<div class="form_content clearfix">
					<p class="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter your email address to create an account.'),$_smarty_tpl ) );?>
</p>
					<div class="alert alert-danger" id="create_account_error" style="display:none"></div>
					<div class="form-group">
						<label for="email_create" class=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
						<input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="<?php if ((isset($_POST['email_create']))) {
echo stripslashes($_POST['email_create']);
}?>" />
					</div>
					<div class="submit">
						<?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
						<button class="btn button button-medium" type="submit" id="SubmitCreate" name="SubmitCreate">
							<span>
								<i class="icon-user left"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>

							</span>
						</button>
						<input type="hidden" class="hidden" name="SubmitCreate" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account'),$_smarty_tpl ) );?>
" />
					</div>
				</div>
			</form>
		</div>
		<div class="col-xs-12 col-sm-6">
			<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="login_form" class="box">
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Already registered?'),$_smarty_tpl ) );?>
</h3>
				<div class="form_content clearfix">
					<div class="form-group">
						<label class="" for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
</label>
						<input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" value="<?php if ((isset($_POST['email']))) {
echo stripslashes($_POST['email']);
}?>" />
					</div>
					<div class="form-group">
						<label class="" for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
</label>
						<input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="passwd" value="" />
					</div>
					<p class="lost_password form-group"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('password'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recover your forgotten password'),$_smarty_tpl ) );?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?'),$_smarty_tpl ) );?>
</a></p>
					<p class="submit">
						<?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
						<button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn button button-medium">
							<span>
								<i class="icon-lock left"></i>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

							</span>
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['inOrderProcess']->value)) && $_smarty_tpl->tpl_vars['inOrderProcess']->value && $_smarty_tpl->tpl_vars['PS_GUEST_CHECKOUT_ENABLED']->value) {?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,NULL,"back=".((string)$_smarty_tpl->tpl_vars['back']->value)), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="new_account_form" class="std clearfix">
			<div class="box">
				<div id="opc_account_form" style="display: block; ">
					<h3 class="page-heading bottom-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instant checkout'),$_smarty_tpl ) );?>
</h3>
					<!-- Account -->
					<div class="required form-group">
						<label for="guest_email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
						<input type="text" class="is_required validate form-control" data-validate="isEmail" id="guest_email" name="guest_email" value="<?php if ((isset($_POST['guest_email']))) {
echo $_POST['guest_email'];
}?>" />
					</div>
					<div class="cleafix gender-line">
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title'),$_smarty_tpl ) );?>
</label>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
							<div class="radio-inline">
								<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top">
									<input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
"<?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?> checked="checked"<?php }?> />
									<?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

								</label>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<div class="required form-group">
						<label for="firstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
						<input type="text" class="is_required validate form-control" data-validate="isName" id="firstname" name="firstname" value="<?php if ((isset($_POST['firstname']))) {
echo $_POST['firstname'];
}?>" />
					</div>
					<div class="required form-group">
						<label for="lastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
						<input type="text" class="is_required validate form-control" data-validate="isName" id="lastname" name="lastname" value="<?php if ((isset($_POST['lastname']))) {
echo $_POST['lastname'];
}?>" />
					</div>
					<div class="form-group date-select">
						<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date of Birth'),$_smarty_tpl ) );?>
</label>
						<div class="row">
							<div class="col-xs-4">
								<select id="days" name="days" class="form-control">
									<option value="">-</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value == $_smarty_tpl->tpl_vars['day']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
&nbsp;&nbsp;</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
															</div>
							<div class="col-xs-4">
								<select id="months" name="months" class="form-control">
									<option value="">-</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'k');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value == $_smarty_tpl->tpl_vars['k']->value)) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl ) );?>
&nbsp;</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="col-xs-4">
								<select id="years" name="years" class="form-control">
									<option value="">-</option>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value == $_smarty_tpl->tpl_vars['year']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&nbsp;&nbsp;</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						</div>
					</div>
					<?php if ((isset($_smarty_tpl->tpl_vars['newsletter']->value)) && $_smarty_tpl->tpl_vars['newsletter']->value) {?>
						<div class="checkbox">
							<label for="newsletter">
							<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if ((isset($_POST['newsletter'])) && $_POST['newsletter'] == '1') {?>checked="checked"<?php }?> />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter!'),$_smarty_tpl ) );?>
</label>
						</div>
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['optin']->value)) && $_smarty_tpl->tpl_vars['optin']->value) {?>
						<div class="checkbox">
							<label for="optin">
							<input type="checkbox" name="optin" id="optin" value="1" <?php if ((isset($_POST['optin'])) && $_POST['optin'] == '1') {?>checked="checked"<?php }?> />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive special offers from our partners!'),$_smarty_tpl ) );?>
</label>
						</div>
					<?php }?>
					<h3 class="page-heading bottom-indent top-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery address'),$_smarty_tpl ) );?>
</h3>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlv_all_fields']->value, 'field_name');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['field_name']->value == "company") {?>
							<div class="form-group">
								<label for="company"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
								<input type="text" class="form-control" id="company" name="company" value="<?php if ((isset($_POST['company']))) {
echo $_POST['company'];
}?>" />
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "vat_number") {?>
							<div id="vat_number" style="display:none;">
								<div class="form-group">
									<label for="vat-number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT number'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
									<input id="vat-number" type="text" class="form-control" name="vat_number" value="<?php if ((isset($_POST['vat_number']))) {
echo $_POST['vat_number'];
}?>" />
								</div>
							</div>
							<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "dni") {?>
							<?php $_smarty_tpl->_assignInScope('dniExist', true);?>
							<div class="required dni form-group">
								<label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<input type="text" name="dni" id="dni" value="<?php if ((isset($_POST['dni']))) {
echo $_POST['dni'];
}?>" />
								<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address1") {?>
							<div class="required form-group">
								<label for="address1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<input type="text" class="form-control" name="address1" id="address1" value="<?php if ((isset($_POST['address1']))) {
echo $_POST['address1'];
}?>" />
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address2") {?>
							<div class="form-group is_customer_param">
								<label for="address2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address (Line 2)'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
								<input type="text" class="form-control" name="address2" id="address2" value="<?php if ((isset($_POST['address2']))) {
echo $_POST['address2'];
}?>" />
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "postcode") {?>
							<?php $_smarty_tpl->_assignInScope('postCodeExist', true);?>
							<div class="required postcode form-group">
								<label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_POST['postcode']))) {
echo $_POST['postcode'];
}?>"/>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "city") {?>
							<div class="required form-group">
								<label for="city"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<input type="text" class="form-control" name="city" id="city" value="<?php if ((isset($_POST['city']))) {
echo $_POST['city'];
}?>" />
							</div>
							<!-- if customer hasn't update his layout address, country has to be verified but it's deprecated -->
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "Country:name" || $_smarty_tpl->tpl_vars['field_name']->value == "country") {?>
							<div class="required select form-group">
								<label for="id_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<select name="id_country" id="id_country" class="form-control">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (((isset($_POST['id_country'])) && $_POST['id_country'] == $_smarty_tpl->tpl_vars['v']->value['id_country']) || (!(isset($_POST['id_country'])) && $_smarty_tpl->tpl_vars['sl_country']->value == $_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "State:name") {?>
							<?php $_smarty_tpl->_assignInScope('stateExist', true);?>
							<div class="required id_state select form-group">
								<label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<select name="id_state" id="id_state" class="form-control">
									<option value="">-</option>
								</select>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php if ($_smarty_tpl->tpl_vars['stateExist']->value == false) {?>
						<div class="required id_state select unvisible form-group">
							<label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_state" id="id_state" class="form-control">
								<option value="">-</option>
							</select>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value == false) {?>
						<div class="required postcode unvisible form-group">
							<label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_POST['postcode']))) {
echo $_POST['postcode'];
}?>"/>
						</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['dniExist']->value == false) {?>
						<div class="required form-group dni">
							<label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="text form-control" name="dni" id="dni" value="<?php if ((isset($_POST['dni'])) && $_POST['dni']) {
echo $_POST['dni'];
}?>" />
							<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
						</div>
					<?php }?>
					<div class="<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
						<label for="phone_mobile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
						<input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="<?php if ((isset($_POST['phone_mobile']))) {
echo $_POST['phone_mobile'];
}?>" />
					</div>
					<input type="hidden" name="alias" id="alias" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My address'),$_smarty_tpl ) );?>
" />
					<input type="hidden" name="is_new_customer" id="is_new_customer" value="0" />
					<div class="checkbox">
						<label for="invoice_address">
						<input type="checkbox" name="invoice_address" id="invoice_address"<?php if (((isset($_POST['invoice_address'])) && $_POST['invoice_address']) || ((isset($_POST['invoice_address'])) && $_POST['invoice_address'])) {?> checked="checked"<?php }?> autocomplete="off"/>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use another address for invoice'),$_smarty_tpl ) );?>
</label>
					</div>
					<div id="opc_invoice_address"  class="unvisible">
						<?php $_smarty_tpl->_assignInScope('stateExist', false);?>
						<?php $_smarty_tpl->_assignInScope('postCodeExist', false);?>
						<?php $_smarty_tpl->_assignInScope('dniExist', false);?>
						<h3 class="page-subheading top-indent"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice address'),$_smarty_tpl ) );?>
</h3>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['inv_all_fields']->value, 'field_name');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
						<?php if ($_smarty_tpl->tpl_vars['field_name']->value == "company") {?>
						<div class="form-group">
							<label for="company_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
							<input type="text" class="text form-control" id="company_invoice" name="company_invoice" value="<?php if ((isset($_POST['company_invoice'])) && $_POST['company_invoice']) {
echo $_POST['company_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "vat_number") {?>
						<div id="vat_number_block_invoice" style="display:none;">
							<div class="form-group">
								<label for="vat_number_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT number'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
								<input type="text" class="form-control" id="vat_number_invoice" name="vat_number_invoice" value="<?php if ((isset($_POST['vat_number_invoice'])) && $_POST['vat_number_invoice']) {
echo $_POST['vat_number_invoice'];
}?>" />
							</div>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "dni") {?>
						<?php $_smarty_tpl->_assignInScope('dniExist', true);?>
						<div class="required form-group dni_invoice">
							<label for="dni_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="text form-control" name="dni_invoice" id="dni_invoice" value="<?php if ((isset($_POST['dni_invoice'])) && $_POST['dni_invoice']) {
echo $_POST['dni_invoice'];
}?>" />
							<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "firstname") {?>
						<div class="required form-group">
							<label for="firstname_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" id="firstname_invoice" name="firstname_invoice" value="<?php if ((isset($_POST['firstname_invoice'])) && $_POST['firstname_invoice']) {
echo $_POST['firstname_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "lastname") {?>
						<div class="required form-group">
							<label for="lastname_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" id="lastname_invoice" name="lastname_invoice" value="<?php if ((isset($_POST['lastname_invoice'])) && $_POST['lastname_invoice']) {
echo $_POST['lastname_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address1") {?>
						<div class="required form-group">
							<label for="address1_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" name="address1_invoice" id="address1_invoice" value="<?php if ((isset($_POST['address1_invoice'])) && $_POST['address1_invoice']) {
echo $_POST['address1_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address2") {?>
						<div class="form-group is_customer_param">
							<label for="address2_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address (Line 2)'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
							<input type="text" class="form-control" name="address2_invoice" id="address2_invoice" value="<?php if ((isset($_POST['address2_invoice'])) && $_POST['address2_invoice']) {
echo $_POST['address2_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "postcode") {?>
						<?php $_smarty_tpl->_assignInScope('postCodeExist', true);?>
						<div class="required postcode_invoice form-group">
							<label for="postcode_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="validate form-control" name="postcode_invoice" id="postcode_invoice" data-validate="isPostCode" value="<?php if ((isset($_POST['postcode_invoice'])) && $_POST['postcode_invoice']) {
echo $_POST['postcode_invoice'];
}?>"/>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "city") {?>
						<div class="required form-group">
							<label for="city_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" name="city_invoice" id="city_invoice" value="<?php if ((isset($_POST['city_invoice'])) && $_POST['city_invoice']) {
echo $_POST['city_invoice'];
}?>" />
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "country" || $_smarty_tpl->tpl_vars['field_name']->value == "Country:name") {?>
						<div class="required form-group">
							<label for="id_country_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_country_invoice" id="id_country_invoice" class="form-control">
								<option value="">-</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (((isset($_POST['id_country_invoice'])) && $_POST['id_country_invoice'] == $_smarty_tpl->tpl_vars['v']->value['id_country']) || (!(isset($_POST['id_country_invoice'])) && $_smarty_tpl->tpl_vars['sl_country']->value == $_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "state" || $_smarty_tpl->tpl_vars['field_name']->value == 'State:name') {?>
						<?php $_smarty_tpl->_assignInScope('stateExist', true);?>
						<div class="required id_state_invoice form-group" style="display:none;">
							<label for="id_state_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_state_invoice" id="id_state_invoice" class="form-control">
								<option value="">-</option>
							</select>
						</div>
						<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php if (!$_smarty_tpl->tpl_vars['postCodeExist']->value) {?>
						<div class="required postcode_invoice form-group unvisible">
							<label for="postcode_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" name="postcode_invoice" id="postcode_invoice" value="<?php if ((isset($_POST['postcode_invoice'])) && $_POST['postcode_invoice']) {
echo $_POST['postcode_invoice'];
}?>"/>
						</div>
						<?php }?>
						<?php if (!$_smarty_tpl->tpl_vars['stateExist']->value) {?>
						<div class="required id_state_invoice form-group unvisible">
							<label for="id_state_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_state_invoice" id="id_state_invoice" class="form-control">
								<option value="">-</option>
							</select>
						</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['dniExist']->value == false) {?>
							<div class="required form-group dni_invoice">
								<label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
								<input type="text" class="text form-control" name="dni_invoice" id="dni_invoice" value="<?php if ((isset($_POST['dni_invoice'])) && $_POST['dni_invoice']) {
echo $_POST['dni_invoice'];
}?>" />
								<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
							</div>
						<?php }?>
						<div class="form-group is_customer_param">
							<label for="other_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional information'),$_smarty_tpl ) );?>
</label>
							<textarea class="form-control" name="other_invoice" id="other_invoice" cols="26" rows="3"></textarea>
						</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
							<p class="inline-infos required is_customer_param"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must register at least one phone number.'),$_smarty_tpl ) );?>
</p>
						<?php }?>
						<div class="form-group is_customer_param">
							<label for="phone_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home phone'),$_smarty_tpl ) );?>
</label>
							<input type="text" class="form-control" name="phone_invoice" id="phone_invoice" value="<?php if ((isset($_POST['phone_invoice'])) && $_POST['phone_invoice']) {
echo $_POST['phone_invoice'];
}?>" />
						</div>
						<div class="<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
							<label for="phone_mobile_invoice"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>*</sup><?php }?></label>
							<input type="text" class="form-control" name="phone_mobile_invoice" id="phone_mobile_invoice" value="<?php if ((isset($_POST['phone_mobile_invoice'])) && $_POST['phone_mobile_invoice']) {
echo $_POST['phone_mobile_invoice'];
}?>" />
						</div>
						<input type="hidden" name="alias_invoice" id="alias_invoice" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Invoice address'),$_smarty_tpl ) );?>
" />
					</div>
					<!-- END Account -->
				</div>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

			</div>
			<p class="cart_navigation required submit clearfix">
				<span><sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>
</span>
				<input type="hidden" name="display_guest_checkout" value="1" />
				<button type="submit" class="button btn btn-default button-medium" name="submitGuestAccount" id="submitGuestAccount">
					<span>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout'),$_smarty_tpl ) );?>

						<i class="icon-chevron-right right"></i>
					</span>
				</button>
			</p>
		</form>
	<?php }
} else { ?>
	<!--<?php if ((isset($_smarty_tpl->tpl_vars['account_error']->value))) {?>
	<div class="error">
		<?php ob_start();
echo count($_smarty_tpl->tpl_vars['account_error']->value);
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == 1) {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There\'s at least one error'),$_smarty_tpl ) );?>
 :</p>
			<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %s errors','sprintf'=>array(count($_smarty_tpl->tpl_vars['account_error']->value))),$_smarty_tpl ) );?>
 :</p>
		<?php }?>
		<ol>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['account_error']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	</div>
	<?php }?>-->
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="account-creation_form" class="std box">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_TOP']->value;?>

		<div class="account_creation">
			<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information'),$_smarty_tpl ) );?>
</h3>
			<div class="clearfix">
				<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title'),$_smarty_tpl ) );?>
</label>
				<br />
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
$_smarty_tpl->tpl_vars['gender']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->do_else = false;
?>
					<div class="radio-inline">
						<label for="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" class="top">
							<input checked="" type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />
						<?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>

						</label>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="required form-group">
				<label for="customer_firstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
				<input onkeyup="$('#firstname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_firstname" name="customer_firstname" value="<?php if ((isset($_POST['customer_firstname']))) {
echo $_POST['customer_firstname'];
}?>" />
			</div>
			<div class="required form-group">
				<label for="customer_lastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
				<input onkeyup="$('#lastname').val(this.value);" type="text" class="is_required validate form-control" data-validate="isName" id="customer_lastname" name="customer_lastname" value="<?php if ((isset($_POST['customer_lastname']))) {
echo $_POST['customer_lastname'];
}?>" />
			</div>
			<div class="required form-group">
				<label for="email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
				<input type="email" class="is_required validate form-control" data-validate="isEmail" id="email" name="email" value="<?php if ((isset($_POST['email']))) {
echo $_POST['email'];
}?>" />
			</div>
			<div class="required password form-group">
				<label for="passwd"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
				<input type="password" class="is_required validate form-control" data-validate="isPasswd" name="passwd" id="passwd" />
				<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Five characters minimum)'),$_smarty_tpl ) );?>
</span>
			</div>
			<div class="form-group">
				<label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date of Birth'),$_smarty_tpl ) );?>
</label>
				<div class="row">
					<div class="col-xs-4">
						<select id="days" name="days" class="form-control">
							<option value="">-</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value == $_smarty_tpl->tpl_vars['day']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
&nbsp;&nbsp;</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
											</div>
					<div class="col-xs-4">
						<select id="months" name="months" class="form-control">
							<option value="">-</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'k');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value == $_smarty_tpl->tpl_vars['k']->value)) {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['month']->value),$_smarty_tpl ) );?>
&nbsp;</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
					<div class="col-xs-4">
						<select id="years" name="years" class="form-control">
							<option value="">-</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value == $_smarty_tpl->tpl_vars['year']->value)) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&nbsp;&nbsp;</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>
				</div>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['newsletter']->value)) && $_smarty_tpl->tpl_vars['newsletter']->value) {?>
				<div class="checkbox">
					<input type="checkbox" name="newsletter" id="newsletter" value="1" <?php if ((isset($_POST['newsletter'])) && $_POST['newsletter'] == 1) {?> checked="checked"<?php }?> />
					<label for="newsletter"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter!'),$_smarty_tpl ) );?>
</label>
					<?php if (array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
						<sup> *</sup>
					<?php }?>
				</div>
			<?php }?>
			<?php if ((isset($_smarty_tpl->tpl_vars['optin']->value)) && $_smarty_tpl->tpl_vars['optin']->value) {?>
				<div class="checkbox">
					<input type="checkbox" name="optin" id="optin" value="1" <?php if ((isset($_POST['optin'])) && $_POST['optin'] == 1) {?> checked="checked"<?php }?> />
					<label for="optin"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive special offers from our partners!'),$_smarty_tpl ) );?>
</label>
					<?php if (array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
						<sup> *</sup>
					<?php }?>
				</div>
			<?php }?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
			<div class="account_creation">
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your company information'),$_smarty_tpl ) );?>
</h3>
				<p class="form-group">
					<label for=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="company" name="company" value="<?php if ((isset($_POST['company']))) {
echo $_POST['company'];
}?>" />
				</p>
				<p class="form-group">
					<label for="siret"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SIRET'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="siret" name="siret" value="<?php if ((isset($_POST['siret']))) {
echo $_POST['siret'];
}?>" />
				</p>
				<p class="form-group">
					<label for="ape"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'APE'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="ape" name="ape" value="<?php if ((isset($_POST['ape']))) {
echo $_POST['ape'];
}?>" />
				</p>
				<p class="form-group">
					<label for="website"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="website" name="website" value="<?php if ((isset($_POST['website']))) {
echo $_POST['website'];
}?>" />
				</p>
			</div>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value)) && $_smarty_tpl->tpl_vars['PS_REGISTRATION_PROCESS_TYPE']->value) {?>
			<div class="account_creation">
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your address'),$_smarty_tpl ) );?>
</h3>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dlv_all_fields']->value, 'field_name');
$_smarty_tpl->tpl_vars['field_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_name']->value) {
$_smarty_tpl->tpl_vars['field_name']->do_else = false;
?>
					<?php if ($_smarty_tpl->tpl_vars['field_name']->value == "company") {?>
						<?php if (!$_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
							<p class="form-group">
								<label for="company"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
								<input type="text" class="form-control" id="company" name="company" value="<?php if ((isset($_POST['company']))) {
echo $_POST['company'];
}?>" />
							</p>
						<?php }?>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "vat_number") {?>
						<div id="vat_number" style="display:none;">
							<p class="form-group">
								<label for="vat_number"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'VAT number'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
								<input type="text" class="form-control" id="vat_number" name="vat_number" value="<?php if ((isset($_POST['vat_number']))) {
echo $_POST['vat_number'];
}?>" />
							</p>
						</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "firstname") {?>
						<p class="required form-group">
							<label for="firstname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" id="firstname" name="firstname" value="<?php if ((isset($_POST['firstname']))) {
echo $_POST['firstname'];
}?>" />
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "lastname") {?>
						<p class="required form-group">
							<label for="lastname"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" id="lastname" name="lastname" value="<?php if ((isset($_POST['lastname']))) {
echo $_POST['lastname'];
}?>" />
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address1") {?>
						<p class="required form-group">
							<label for="address1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" name="address1" id="address1" value="<?php if ((isset($_POST['address1']))) {
echo $_POST['address1'];
}?>" />
							<span class="inline-infos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Street address, P.O. Box, Company name, etc.'),$_smarty_tpl ) );?>
</span>
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "address2") {?>
						<p class="form-group is_customer_param">
							<label for="address2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address (Line 2)'),$_smarty_tpl ) );
if (in_array($_smarty_tpl->tpl_vars['field_name']->value,$_smarty_tpl->tpl_vars['required_fields']->value)) {?> <sup>*</sup><?php }?></label>
							<input type="text" class="form-control" name="address2" id="address2" value="<?php if ((isset($_POST['address2']))) {
echo $_POST['address2'];
}?>" />
							<span class="inline-infos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apartment, suite, unit, building, floor, etc...'),$_smarty_tpl ) );?>
</span>
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "postcode") {?>
						<?php $_smarty_tpl->_assignInScope('postCodeExist', true);?>
						<p class="required postcode form-group">
							<label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_POST['postcode']))) {
echo $_POST['postcode'];
}?>"/>
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "city") {?>
						<p class="required form-group">
							<label for="city"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<input type="text" class="form-control" name="city" id="city" value="<?php if ((isset($_POST['city']))) {
echo $_POST['city'];
}?>" />
						</p>
						<!-- if customer hasn't update his layout address, country has to be verified but it's deprecated -->
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "Country:name" || $_smarty_tpl->tpl_vars['field_name']->value == "country") {?>
						<p class="required select form-group">
							<label for="id_country"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_country" id="id_country" class="form-control">
								<option value="">-</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id_country'];?>
"<?php if (((isset($_POST['id_country'])) && $_POST['id_country'] == $_smarty_tpl->tpl_vars['v']->value['id_country']) || (!(isset($_POST['id_country'])) && $_smarty_tpl->tpl_vars['sl_country']->value == $_smarty_tpl->tpl_vars['v']->value['id_country'])) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
						</p>
					<?php } elseif ($_smarty_tpl->tpl_vars['field_name']->value == "State:name" || $_smarty_tpl->tpl_vars['field_name']->value == 'state') {?>
						<?php $_smarty_tpl->_assignInScope('stateExist', true);?>
						<p class="required id_state select form-group">
							<label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
							<select name="id_state" id="id_state" class="form-control">
								<option value="">-</option>
							</select>
						</p>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php if ($_smarty_tpl->tpl_vars['postCodeExist']->value == false) {?>
					<p class="required postcode form-group unvisible">
						<label for="postcode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
						<input type="text" class="validate form-control" name="postcode" id="postcode" data-validate="isPostCode" value="<?php if ((isset($_POST['postcode']))) {
echo $_POST['postcode'];
}?>"/>
					</p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['stateExist']->value == false) {?>
					<p class="required id_state select unvisible form-group">
						<label for="id_state"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
						<select name="id_state" id="id_state" class="form-control">
							<option value="">-</option>
						</select>
					</p>
				<?php }?>
				<p class="textarea form-group">
					<label for="other"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional information'),$_smarty_tpl ) );?>
</label>
					<textarea class="form-control" name="other" id="other" cols="26" rows="3"><?php if ((isset($_POST['other']))) {
echo $_POST['other'];
}?></textarea>
				</p>
				<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>
					<p class="inline-infos"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must register at least one phone number.'),$_smarty_tpl ) );?>
</p>
				<?php }?>
				<p class="form-group">
					<label class="" for="phone"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home phone'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" name="phone" id="phone" value="<?php if ((isset($_POST['phone']))) {
echo $_POST['phone'];
}?>" />
				</p>
				<p class="<?php if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?>required <?php }?>form-group">
					<label for="phone_mobile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile phone'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['one_phone_at_least']->value)) && $_smarty_tpl->tpl_vars['one_phone_at_least']->value) {?> <sup>**</sup><?php }?></label>
					<input type="text" class="form-control" name="phone_mobile" id="phone_mobile" value="<?php if ((isset($_POST['phone_mobile']))) {
echo $_POST['phone_mobile'];
}?>" />
				</p>
				<p class="required form-group" id="address_alias">
					<label for="alias"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Assign an address alias for future reference.'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
					<input type="text" class="form-control" name="alias" id="alias" value="<?php if ((isset($_POST['alias']))) {
echo $_POST['alias'];
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My address'),$_smarty_tpl ) );
}?>" />
				</p>
			</div>
			<div class="account_creation dni">
				<h3 class="page-subheading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax identification'),$_smarty_tpl ) );?>
</h3>
				<p class="required form-group">
					<label for="dni"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification number'),$_smarty_tpl ) );?>
 <sup>*</sup></label>
					<input type="text" class="form-control" name="dni" id="dni" value="<?php if ((isset($_POST['dni']))) {
echo $_POST['dni'];
}?>" />
					<span class="form_info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DNI / NIF / NIE'),$_smarty_tpl ) );?>
</span>
				</p>
			</div>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_CREATE_ACCOUNT_FORM']->value;?>

		<div class="submit clearfix">
			<input type="hidden" name="email_create" value="1" />
			<input type="hidden" name="is_new_customer" value="1" />
			<?php if ((isset($_smarty_tpl->tpl_vars['back']->value))) {?><input type="hidden" class="hidden" name="back" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
			<button type="submit" name="submitAccount" id="submitAccount" class="btn button button-medium">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register'),$_smarty_tpl ) );?>
&nbsp;<i class="icon-chevron-right right"></i></span>
			</button>
			<p class="pull-right required"><span><sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>
</span></p>
		</div>
	</form>
<?php }
if ((isset($_POST['id_state'])) && $_POST['id_state']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>intval($_POST['id_state'])),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['address']->value->id_state)) && $_smarty_tpl->tpl_vars['address']->value->id_state) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>intval($_smarty_tpl->tpl_vars['address']->value->id_state)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedState'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_state_invoice'])) && (isset($_POST['id_state_invoice'])) && $_POST['id_state_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>intval($_POST['id_state_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedStateInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_country'])) && $_POST['id_country']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>intval($_POST['id_country'])),$_smarty_tpl ) );
} elseif ((isset($_smarty_tpl->tpl_vars['address']->value->id_country)) && $_smarty_tpl->tpl_vars['address']->value->id_country) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>intval($_smarty_tpl->tpl_vars['address']->value->id_country)),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountry'=>false),$_smarty_tpl ) );
}
if ((isset($_POST['id_country_invoice'])) && (isset($_POST['id_country_invoice'])) && $_POST['id_country_invoice']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>intval($_POST['id_country_invoice'])),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('idSelectedCountryInvoice'=>false),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['countries']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('countries'=>$_smarty_tpl->tpl_vars['countries']->value),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value)) && $_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('vatnumber_ajax_call'=>$_smarty_tpl->tpl_vars['vatnumber_ajax_call']->value),$_smarty_tpl ) );
}
if ((isset($_smarty_tpl->tpl_vars['email_create']->value)) && $_smarty_tpl->tpl_vars['email_create']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('email_create'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'boolval' ][ 0 ], array( $_smarty_tpl->tpl_vars['email_create']->value ))),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0], array( array('email_create'=>false),$_smarty_tpl ) );
}
}
}
