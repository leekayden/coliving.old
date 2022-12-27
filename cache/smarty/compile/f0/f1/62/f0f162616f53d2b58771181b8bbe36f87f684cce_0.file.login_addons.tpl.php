<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:21
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\modules\login_addons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e18328d3_07943823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0f162616f53d2b58771181b8bbe36f87f684cce' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\modules\\login_addons.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e18328d3_07943823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body">
<?php if ($_smarty_tpl->tpl_vars['add_permission']->value == '1') {?>
	<?php if (!(isset($_smarty_tpl->tpl_vars['logged_on_addons']->value)) || !$_smarty_tpl->tpl_vars['logged_on_addons']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value == 'ko' || $_smarty_tpl->tpl_vars['check_openssl']->value == 'ko') {?>
			<div class="alert alert-warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you want to be able to fully use the AdminModules panel and have free modules available, you should enable the following configuration on your server:'),$_smarty_tpl ) );?>

				<br />
				<?php if ($_smarty_tpl->tpl_vars['check_url_fopen']->value == 'ko') {?>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable PHP\'s allow_url_fopen setting'),$_smarty_tpl ) );?>
<br /><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['check_openssl']->value == 'ko') {?>- <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enable PHP\'s OpenSSL extension'),$_smarty_tpl ) );?>
<br /><?php }?>
			</div>
		<?php } else { ?>
			<!--start addons login-->
			<form id="addons_login_form" method="post" >
				<div>
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_register_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img class="img-responsive center-block" src="themes/default/img/prestashop-addons-logo.png" alt="Logo PrestaShop Addons"/></a>
					<h3 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Connect your shop with PrestaShop's marketplace in order to automatically import all your Addons purchases."),$_smarty_tpl ) );?>
</h3>
					<hr />
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Don't have an account?"),$_smarty_tpl ) );?>
</h4>
						<p class='text-justify'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity"),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="col-md-6">
						<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Connect to PrestaShop Addons'),$_smarty_tpl ) );?>
</h4>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-user"></i></span>
								<input id="username_addons" name="username_addons" type="text" value="" autocomplete="off" class="form-control ac_input">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-key"></i></span>
								<input id="password_addons" name="password_addons" type="password" value="" autocomplete="off" class="form-control ac_input">
							</div>
							<a class="btn btn-link pull-right _blank" href="<?php echo $_smarty_tpl->tpl_vars['addons_forgot_password_link']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I forgot my password'),$_smarty_tpl ) );?>
</a>
							<br>
						</div>
					</div>
				</div>

				<div class="row row-padding-top">
					<div class="col-md-6">
						<div class="form-group">
							<a class="btn btn-default btn-block btn-lg _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons_register_link']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Create an Account"),$_smarty_tpl ) );?>

								<i class="icon-external-link"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button id="addons_login_button" class="btn btn-primary btn-block btn-lg" type="submit">
								<i class="icon-unlock"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in'),$_smarty_tpl ) );?>

							</button>
						</div>
					</div>
				</div>

				<div id="addons_loading" class="help-block"></div>

			</form>
			<!--end addons login-->
		<?php }?>
	<?php }
}?>
</div>
<?php }
}
