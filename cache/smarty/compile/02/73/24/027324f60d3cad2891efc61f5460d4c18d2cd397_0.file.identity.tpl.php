<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\identity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10dd7094_51596647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '027324f60d3cad2891efc61f5460d4c18d2cd397' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\identity.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10dd7094_51596647 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account'),$_smarty_tpl ) );?>

    </a>
    <span class="navigation-pipe">
        <?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>

    </span>
    <span class="navigation_page">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information'),$_smarty_tpl ) );?>

    </span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<div class="box">
    <h1 class="page-subheading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information'),$_smarty_tpl ) );?>

    </h1>

    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['confirmation']->value)) && $_smarty_tpl->tpl_vars['confirmation']->value) {?>
        <p class="alert alert-success">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your personal information has been successfully updated.'),$_smarty_tpl ) );?>

            <?php if ((isset($_smarty_tpl->tpl_vars['pwd_changed']->value))) {?><br /><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your password has been sent to your email:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['email']->value;
}?>
        </p>
    <?php } else { ?>
        <p class="info-title">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please be sure to update your personal information if it has changed.'),$_smarty_tpl ) );?>

        </p>
        <p class="required">
            <sup>*</sup><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required field'),$_smarty_tpl ) );?>

        </p>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
            <fieldset>
                <div class="clearfix">
                    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Social title'),$_smarty_tpl ) );?>
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
                            <input type="radio" name="id_gender" id="id_gender<?php echo $_smarty_tpl->tpl_vars['gender']->value->id;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['gender']->value->id);?>
" <?php if ((isset($_POST['id_gender'])) && $_POST['id_gender'] == $_smarty_tpl->tpl_vars['gender']->value->id) {?>checked="checked"<?php }?> />
                            <?php echo $_smarty_tpl->tpl_vars['gender']->value->name;?>
</label>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="required form-group">
                    <label for="firstname" class="required">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First name'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" data-validate="isName" type="text" id="firstname" name="firstname" value="<?php echo $_POST['firstname'];?>
" />
                </div>
                <div class="required form-group">
                    <label for="lastname" class="required">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last name'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" data-validate="isName" type="text" name="lastname" id="lastname" value="<?php echo $_POST['lastname'];?>
" />
                </div>
                <div class="required form-group">
                    <label for="email" class="required">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'E-mail address'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" data-validate="isEmail" type="email" name="email" id="email" value="<?php echo $_POST['email'];?>
" />
                </div>
                <div class="form-group">
                    <label>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date of Birth'),$_smarty_tpl ) );?>

                    </label>
                    <div class="row">
                        <div class="col-xs-4">
                            <select name="days" id="days" class="form-control">
                                <option value="">-</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_day']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_month']->value == $_smarty_tpl->tpl_vars['k']->value)) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl ) );?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['sl_year']->value == $_smarty_tpl->tpl_vars['v']->value)) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="required form-group">
                    <label for="old_passwd" class="required">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current Password'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="old_passwd" id="old_passwd" />
                </div>
                <div class="password form-group">
                    <label for="passwd">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New Password'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="passwd" id="passwd" />
                </div>
                <div class="password form-group">
                    <label for="confirmation">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirmation'),$_smarty_tpl ) );?>

                    </label>
                    <input class="is_required validate form-control" type="password" data-validate="isPasswd" name="confirmation" id="confirmation" />
                </div>
                <?php if ((isset($_smarty_tpl->tpl_vars['newsletter']->value)) && $_smarty_tpl->tpl_vars['newsletter']->value) {?>
                    <div class="checkbox">
                        <label for="newsletter">
                            <input type="checkbox" id="newsletter" name="newsletter" value="1" <?php if ((isset($_POST['newsletter'])) && $_POST['newsletter'] == 1) {?> checked="checked"<?php }?>/>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for our newsletter!'),$_smarty_tpl ) );?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['required_fields']->value)) && array_key_exists('newsletter',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                              <sup> *</sup>
                            <?php }?>
                        </label>
                    </div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['optin']->value)) && $_smarty_tpl->tpl_vars['optin']->value) {?>
                    <div class="checkbox">
                        <label for="optin">
                            <input type="checkbox" name="optin" id="optin" value="1" <?php if ((isset($_POST['optin'])) && $_POST['optin'] == 1) {?> checked="checked"<?php }?>/>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Receive special offers from our partners!'),$_smarty_tpl ) );?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['required_fields']->value)) && array_key_exists('optin',$_smarty_tpl->tpl_vars['field_required']->value)) {?>
                              <sup> *</sup>
                            <?php }?>
                        </label>
                    </div>
                <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['b2b_enable']->value) {?>
				<h1 class="page-subheading">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your company information'),$_smarty_tpl ) );?>

				</h1>
				<div class="form-group">
					<label for=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="company" name="company" value="<?php if ((isset($_POST['company']))) {
echo $_POST['company'];
}?>" />
				</div>
				<div class="form-group">
					<label for="siret"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SIRET'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="siret" name="siret" value="<?php if ((isset($_POST['siret']))) {
echo $_POST['siret'];
}?>" />
				</div>
				<div class="form-group">
					<label for="ape"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'APE'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="ape" name="ape" value="<?php if ((isset($_POST['ape']))) {
echo $_POST['ape'];
}?>" />
				</div>
				<div class="form-group">
					<label for="website"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website'),$_smarty_tpl ) );?>
</label>
					<input type="text" class="form-control" id="website" name="website" value="<?php if ((isset($_POST['website']))) {
echo $_POST['website'];
}?>" />
				</div>
			<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_IDENTITY_FORM']->value;?>

		<?php }?>
                <div class="form-group">
                    <button type="submit" name="submitIdentity" class="btn btn-default button button-medium">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
<i class="icon-chevron-right right"></i></span>
                    </button>
                </div>
            </fieldset>
        </form> <!-- .std -->
    <?php }?>
</div>
<ul class="footer_links clearfix">
	<li>
        <a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
">
            <span>
                <i class="icon-chevron-left"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to your account'),$_smarty_tpl ) );?>

            </span>
        </a>
    </li>
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
<?php }
}
