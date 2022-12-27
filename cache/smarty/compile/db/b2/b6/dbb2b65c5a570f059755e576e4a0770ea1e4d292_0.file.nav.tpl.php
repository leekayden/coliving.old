<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\modules\blockuserinfo\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11a091c4_35996963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbb2b65c5a570f059755e576e4a0770ea1e4d292' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\modules\\blockuserinfo\\nav.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11a091c4_35996963 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block user information module NAV  -->
<?php if (!(isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value))) {?>
<div class="nav_menu_padding header_user_info pull-right hidden-xs">
<?php }?>
	<ul class="navbar-nav userlogin_block hidden-xs">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li class="dropdown account_info_cont">
			<button class="btn dropdown-toggle" type="button" id="user_info_acc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<span class="account_user_name hide_xs"><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
</span>
								<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="user_info_acc">
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Accounts','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my orders','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders'),$_smarty_tpl ) );?>
</a></li>
				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,NULL,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout'),$_smarty_tpl ) );?>
</a></li>
			</ul>
		</li>
	<?php } else { ?>
	    <li class="active">
	    	<a class="user_login navigation-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
">
	    		<span class="hide_xs"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl ) );?>
</span>
	    			    	</a>
	    </li>
	<?php }?>
	</ul>
<?php if (!(isset($_smarty_tpl->tpl_vars['ajaxCustomerLogin']->value))) {?>
</div>
<?php }?>
<!-- /Block user information module NAV -->
<?php }
}
