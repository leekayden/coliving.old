<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14662d23_64427098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbf752bc2189ca4f0fc724b889e821615e4961c2' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:nav.tpl' => 1,
  ),
),false)) {
function content_639e8c14662d23_64427098 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6 " lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html lang="fr" class="no-js ie9" lang="en"> <![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico" />
	<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
app_icon.png" />

	<meta name="robots" content="NOFOLLOW, NOINDEX">
	<title><?php if ($_smarty_tpl->tpl_vars['meta_title']->value != '') {
echo $_smarty_tpl->tpl_vars['meta_title']->value;?>
 • <?php }
echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</title>
	<?php if (!(isset($_smarty_tpl->tpl_vars['display_header_javascript']->value)) || $_smarty_tpl->tpl_vars['display_header_javascript']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var help_class_name = '<?php echo addcslashes($_smarty_tpl->tpl_vars['controller_name']->value,'\'');?>
';
		var iso_user = '<?php echo addcslashes($_smarty_tpl->tpl_vars['iso_user']->value,'\'');?>
';
		var full_language_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['full_language_code']->value,'\'');?>
';
		var country_iso_code = '<?php echo addcslashes($_smarty_tpl->tpl_vars['country_iso_code']->value,'\'');?>
';
		var _PS_VERSION_ = '<?php echo addcslashes((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null),'\'');?>
';
		var roundMode = <?php echo intval($_smarty_tpl->tpl_vars['round_mode']->value);?>
;
<?php if ((isset($_smarty_tpl->tpl_vars['shop_context']->value))) {?>
	<?php if ($_smarty_tpl->tpl_vars['shop_context']->value == Shop::CONTEXT_ALL) {?>
		var youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for all your shops.','js'=>1),$_smarty_tpl ) );?>
';
	<?php } elseif ($_smarty_tpl->tpl_vars['shop_context']->value == Shop::CONTEXT_GROUP) {?>
		var youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for all shops in this shop group:','js'=>1),$_smarty_tpl ) );?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
	<?php } else { ?>
		var youEditFieldFor = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This field will be modified for this shop:','js'=>1),$_smarty_tpl ) );?>
 <b><?php echo addcslashes($_smarty_tpl->tpl_vars['shop_name']->value,'\'');?>
</b>';
	<?php }
} else { ?>
		var youEditFieldFor = '';
<?php }?>
		var autorefresh_notifications = '<?php echo addcslashes($_smarty_tpl->tpl_vars['autorefresh_notifications']->value,'\'');?>
';
		var new_order_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new order has been placed on your shop.','js'=>1),$_smarty_tpl ) );?>
';
		var order_number_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order number:','js'=>1),$_smarty_tpl ) );?>
 ';
		var total_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total:','js'=>1),$_smarty_tpl ) );?>
 ';
		var from_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From:','js'=>1),$_smarty_tpl ) );?>
 ';
		var see_order_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View this order','js'=>1),$_smarty_tpl ) );?>
';
		var new_customer_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new customer registered on your shop.','js'=>1),$_smarty_tpl ) );?>
';
		var customer_name_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer name:','js'=>1),$_smarty_tpl ) );?>
 ';
		var new_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A new message was posted on your shop.','js'=>1),$_smarty_tpl ) );?>
';
		var see_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read this message','js'=>1),$_smarty_tpl ) );?>
';
		var token = '<?php echo addslashes($_smarty_tpl->tpl_vars['token']->value);?>
';
		var token_admin_orders = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
';
		var token_admin_customers = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
';
		var token_admin_customer_threads = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
';
		var currentIndex = '<?php echo addcslashes($_smarty_tpl->tpl_vars['currentIndex']->value,'\'');?>
';
		var employee_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminEmployees'),$_smarty_tpl ) );?>
';
		var choose_language_translate = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose language','js'=>1),$_smarty_tpl ) );?>
';
		var default_language = '<?php echo intval($_smarty_tpl->tpl_vars['default_language']->value);?>
';
		var admin_modules_link = '<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModules"));?>
';
		var tab_modules_list = '<?php if ((isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)) && $_smarty_tpl->tpl_vars['tab_modules_list']->value) {
echo addslashes($_smarty_tpl->tpl_vars['tab_modules_list']->value);
}?>';
		var update_success_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful','js'=>1),$_smarty_tpl ) );?>
';
		var errorLogin = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.','js'=>1),$_smarty_tpl ) );?>
';
		var search_product_msg = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a product','js'=>1),$_smarty_tpl ) );?>
';
	<?php echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['css_files']->value))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value, 'media', false, 'css_uri');
$_smarty_tpl->tpl_vars['media']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uri']->value => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['css_uri']->value == 'lteIE9') {?>
		<!--[if lte IE 9]>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['css_files']->value[$_smarty_tpl->tpl_vars['css_uri']->value], 'mediaie9', false, 'css_uriie9');
$_smarty_tpl->tpl_vars['mediaie9']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['css_uriie9']->value => $_smarty_tpl->tpl_vars['mediaie9']->value) {
$_smarty_tpl->tpl_vars['mediaie9']->do_else = false;
?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uriie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mediaie9']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<![endif]-->
	<?php } else { ?>
		<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['css_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['media']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
	<?php if (((isset($_smarty_tpl->tpl_vars['js_def']->value)) && count($_smarty_tpl->tpl_vars['js_def']->value) || (isset($_smarty_tpl->tpl_vars['js_files']->value)) && count($_smarty_tpl->tpl_vars['js_files']->value))) {?>
		<?php $_smarty_tpl->_subTemplateRender(((defined('_PS_ALL_THEMES_DIR_') ? constant('_PS_ALL_THEMES_DIR_') : null)).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value))) {?>
		<?php echo $_smarty_tpl->tpl_vars['displayBackOfficeHeader']->value;?>

	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['brightness']->value))) {?>
	<!--
		// @todo: multishop color
		<style type="text/css">
			div#header_infos, div#header_infos a#header_shopname, div#header_infos a#header_logout, div#header_infos a#header_foaccess {color:<?php echo $_smarty_tpl->tpl_vars['brightness']->value;?>
}
		</style>
	-->
	<?php }?>
</head>

<?php if ($_smarty_tpl->tpl_vars['display_header']->value) {?>
	<body class="ps_back-office<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?> page-sidebar<?php if ($_smarty_tpl->tpl_vars['collapse_menu']->value) {?> page-sidebar-closed<?php }
} else { ?> page-topbar<?php }?> <?php echo strtolower(htmlspecialchars($_GET['controller'], ENT_QUOTES, 'UTF-8', true));?>
">
		<header id="header" class="bootstrap">
		<nav id="header_infos" role="navigation">
			<div class="navbar-header">
				<button id="header_nav_toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
					<i class="icon-reorder"></i>
				</button>
				<a id="header_shopversion" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_tab_link']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<span id="shop_version"><?php echo $_smarty_tpl->tpl_vars['qloapps_version']->value;?>
</span>
				</a>
								<?php if ((isset($_smarty_tpl->tpl_vars['is_multishop']->value)) && $_smarty_tpl->tpl_vars['is_multishop']->value && $_smarty_tpl->tpl_vars['shop_list']->value && ((isset($_smarty_tpl->tpl_vars['multishop_context']->value)) && $_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_GROUP || $_smarty_tpl->tpl_vars['multishop_context']->value&Shop::CONTEXT_SHOP)) {?>
					<ul id="header_shop">
						<li class="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['shop_list']->value;?>

						</li>
					</ul>
				<?php } else { ?>
					<a id="header_shopname" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_tab_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</a>
				<?php }?>
				<ul id="header_notifs_icon_wrapper">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['show_new_orders']->value;
$_prefixVariable20 = ob_get_clean();
if ($_prefixVariable20 == 1) {?>
					<li id="orders_notif" class="dropdown" data-type="order">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-shopping-cart"></i>
							<span id="orders_notif_number_wrapper" class="notifs_badge hide">
								<span id="orders_notif_value">0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="orders_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Orders'),$_smarty_tpl ) );?>
</h3>
								</div>
								<div id="list_orders_notif" class="list_notif">
									<span class="no_notifs">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new orders have been placed on your shop.'),$_smarty_tpl ) );?>

									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminOrders&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminOrders'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all orders'),$_smarty_tpl ) );?>
</a>
								</div>
							</section>
						</div>
					</li>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['show_new_customers']->value;
$_prefixVariable21 = ob_get_clean();
if ($_prefixVariable21 == 1) {?>
					<li id="customers_notif" class="dropdown" data-type="customer">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-user"></i>
							<span id="customers_notif_number_wrapper" class="notifs_badge hide">
								<span id="customers_notif_value">0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="customers_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Registrations'),$_smarty_tpl ) );?>
</h3>
								</div>
								<div id="list_customers_notif" class="list_notif">
									<span class="no_notifs">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new customers have registered on your shop.'),$_smarty_tpl ) );?>

									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminCustomers&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomers'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all customers'),$_smarty_tpl ) );?>
</a>
								</div>
							</section>
						</div>
					</li>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['show_new_messages']->value;
$_prefixVariable22 = ob_get_clean();
if ($_prefixVariable22 == 1) {?>
					<li id="customer_messages_notif" class="dropdown" data-type="customer_message">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-envelope"></i>
							<span id="customer_messages_notif_number_wrapper" class="notifs_badge hide">
								<span id="customer_messages_notif_value" >0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="customer_messages_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Messages'),$_smarty_tpl ) );?>
</h3>
								</div>
								<div id="list_customer_messages_notif" class="list_notif">
									<span class="no_notifs">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No new messages have been posted on your shop.'),$_smarty_tpl ) );?>

									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminCustomerThreads&amp;token=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminCustomerThreads'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all messages'),$_smarty_tpl ) );?>
</a>
								</div>
							</section>
						</div>
					</li>
<?php }?>
				</ul>
<?php if (count($_smarty_tpl->tpl_vars['quick_access']->value) >= 0) {?>
				<ul id="header_quick">
					<li class="dropdown">
						<a href="javascript:void(0)" id="quick_select" class="dropdown-toggle" data-toggle="dropdown"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Access'),$_smarty_tpl ) );?>
 <i class="icon-caret-down"></i></a>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quick_access']->value, 'quick');
$_smarty_tpl->tpl_vars['quick']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['quick']->value) {
$_smarty_tpl->tpl_vars['quick']->do_else = false;
?>
								<li <?php ob_start();
echo $_smarty_tpl->tpl_vars['quick']->value['link'];
$_prefixVariable23 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['link']->value->matchQuickLink($_prefixVariable23)) {
$_smarty_tpl->_assignInScope('matchQuickLink', $_smarty_tpl->tpl_vars['quick']->value['id_quick_access']);?>class="active"<?php }?>>
									<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['quick']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['quick']->value['new_window']) {?> class="_blank"<?php }?>>
										<?php if ((isset($_smarty_tpl->tpl_vars['quick']->value['icon']))) {?>
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['quick']->value['icon'];?>
 icon-fw"></i>
										<?php } else { ?>
											<i class="icon-chevron-right icon-fw"></i>
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['quick']->value['name'];?>

									</a>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<li class="divider"></li>
							<?php if ((isset($_smarty_tpl->tpl_vars['matchQuickLink']->value))) {?>
								<li>
									<a href="javascript:void(0);" class="ajax-quick-link" data-method="remove" data-quicklink-id="<?php echo $_smarty_tpl->tpl_vars['matchQuickLink']->value;?>
">
										<i class="icon-minus-circle"></i>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from QuickAccess'),$_smarty_tpl ) );?>

									</a>
								</li>
							<?php }?>
							<li <?php if ((isset($_smarty_tpl->tpl_vars['matchQuickLink']->value))) {?>class="hide"<?php }?>>
								<a href="javascript:void(0);" class="ajax-quick-link" data-method="add">
									<i class="icon-plus-circle"></i>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add current page to QuickAccess'),$_smarty_tpl ) );?>

								</a>
							</li>
						</ul>
					</li>
				</ul>
				<?php $_smarty_tpl->_assignInScope('quick_access_current_link_name', explode(" - ",$_smarty_tpl->tpl_vars['quick_access_current_link_name']->value));?>
				<?php echo '<script'; ?>
>
					$(function() {
						$('.ajax-quick-link').on('click', function(e){
							e.preventDefault();

							var method = $(this).data('method');

							if(method == 'add')
								var name = prompt('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please name this shortcut:','js'=>1),$_smarty_tpl ) );?>
', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['quick_access_current_link_name']->value[0],32 ));?>
');

							if(method == 'add' && name || method == 'remove')
							{
								$.ajax({
									type: 'POST',
									headers: { "cache-control": "no-cache" },
									async: false,
									url: "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminQuickAccesses');?>
" + "&action=GetUrl" + "&rand=<?php echo rand(1,200);?>
" + "&ajax=1" + "&method=" + method + ( $(this).data('quicklink-id') ? "&id_quick_access=" + $(this).data('quicklink-id') : ""),
									data: {
										"url": "<?php echo $_smarty_tpl->tpl_vars['link']->value->getQuickLink($_SERVER['REQUEST_URI']);?>
",
										"name": name,
										"icon": "<?php echo $_smarty_tpl->tpl_vars['quick_access_current_link_icon']->value;?>
"
									},
									dataType: "json",
									success: function(data) {
										var quicklink_list ='';
										$.each(data, function(index,value){
											if (typeof data[index]['name'] !== 'undefined')
												quicklink_list += '<li><a href="' + data[index]['link'] + '&token=' + data[index]['token'] + '"><i class="icon-chevron-right"></i> ' + data[index]['name'] + '</a></li>';
										});

										if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
											$.each(data, function(index, value)
											{
												if (typeof data[index] == 'string')
													$.growl.error({ title: "", message: data[index]});
											});
										else if (quicklink_list)
										{
											$("#header_quick ul.dropdown-menu").html(quicklink_list);
											showSuccessMessage(update_success_msg);
										}
									}
								});
							}
						});
					});
				<?php echo '</script'; ?>
>
<?php }?>
				<ul id="header_employee_box">
					<li class="hidden-sm hidden-xs">
						<a target="_blank" href="https://qloapps.com/addons/" class="toolbar_btn" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore Qloapps Addons'),$_smarty_tpl ) );?>
">
							<i class="icon-chain-broken"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Explore Qloapps Addons'),$_smarty_tpl ) );?>

						</a>
					</li>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['base_url']->value;
$_prefixVariable24 = ob_get_clean();
if ($_prefixVariable24) {?>
					<li>
						<a href="<?php if ((isset($_smarty_tpl->tpl_vars['base_url_tc']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_url_tc']->value, ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['base_url']->value, ENT_QUOTES, 'UTF-8', true);
}?>" id="header_foaccess" class="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my shop'),$_smarty_tpl ) );?>
">
							<span class="string-long"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My site'),$_smarty_tpl ) );?>
</span>
							<span class="string-short"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Site'),$_smarty_tpl ) );?>
</span>
						</a>
						<?php if ((isset($_smarty_tpl->tpl_vars['maintenance_mode']->value)) && $_smarty_tpl->tpl_vars['maintenance_mode']->value == true) {?>
							<span class="maintenance-mode">
								&mdash;
								<span class="label-tooltip" data-toggle="tooltip" data-placement="bottom" data-html="true"
								title="<p class='text-left text-nowrap'><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your site is in maintenance.'),$_smarty_tpl ) );?>
</strong></p><p class='text-left'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your visitors and customers cannot access your shop while in maintenance mode.%s To manage the maintenance settings, go to Preferences > Maintenance.','sprintf'=>'<br />'),$_smarty_tpl ) );?>
</p>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maintenance mode'),$_smarty_tpl ) );?>
</span>
							</span>
						<?php }?>
					</li>
<?php }?>
					<li id="employee_infos" class="dropdown">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee" class="employee_name dropdown-toggle" data-toggle="dropdown">
							<span class="employee_avatar_small">
								<?php if ((isset($_smarty_tpl->tpl_vars['employee']->value))) {?>
								<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" width="32" height="32" />
								<?php }?>
							</span>
							<span class="string-long"><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</span>
							<span class="string-short"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Me'),$_smarty_tpl ) );?>
</span>
							<i class="caret"></i>
						</a>
						<ul id="employee_links" class="dropdown-menu">
							<li>
								<span class="employee_avatar">
									<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee']->value->getImage();?>
" width="96" height="96" />
								</span>
							</li>
							<li class="text-center text-nowrap"><?php echo $_smarty_tpl->tpl_vars['employee']->value->firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['employee']->value->lastname;?>
</li>
							<li class="divider"></li>
							<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'), ENT_QUOTES, 'UTF-8', true);?>
&amp;id_employee=<?php echo intval($_smarty_tpl->tpl_vars['employee']->value->id);?>
&amp;updateemployee"><i class="icon-wrench"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My preferences'),$_smarty_tpl ) );?>
</a></li>
							<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>
							<li><a href="https://www.prestashop.com/cloud/" class="_blank"><i class="icon-wrench"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My PrestaShop account'),$_smarty_tpl ) );?>
</a></li>
							<?php }?>
							<li class="divider"></li>
							<li><a id="header_logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['login_link']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;logout"><i class="icon-signout"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out'),$_smarty_tpl ) );?>
</a></li>
						</ul>
					</li>
				</ul>

				<span id="ajax_running">
					<i class="icon-refresh icon-spin icon-fw"></i>
				</span>

	<?php if ((isset($_smarty_tpl->tpl_vars['displayBackOfficeTop']->value))) {
echo $_smarty_tpl->tpl_vars['displayBackOfficeTop']->value;
}?>
			</div>
		</nav>	</header>

	<div id="main">
		<?php $_smarty_tpl->_subTemplateRender('file:nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<div id="content" class="<?php if (!$_smarty_tpl->tpl_vars['bootstrap']->value) {?>nobootstrap<?php } else { ?>bootstrap<?php }?>">
			<?php if ((isset($_smarty_tpl->tpl_vars['page_header_toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['page_header_toolbar']->value;
}?>
			<?php if ((isset($_smarty_tpl->tpl_vars['modal_module_list']->value))) {
echo $_smarty_tpl->tpl_vars['modal_module_list']->value;
}?>

<?php if ($_smarty_tpl->tpl_vars['install_dir_exists']->value) {?>
			<div class="alert alert-warning">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For security reasons, you must also delete the /install folder.'),$_smarty_tpl ) );?>

			</div>
<?php }?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminAfterHeader'),$_smarty_tpl ) );?>




<?php } else { ?>
	<body<?php if ((isset($_smarty_tpl->tpl_vars['lite_display']->value)) && $_smarty_tpl->tpl_vars['lite_display']->value) {?> class="ps_back-office display-modal"<?php }?>>
		<div id="main">
			<div id="content" class="<?php if (!$_smarty_tpl->tpl_vars['bootstrap']->value) {?>nobootstrap<?php } else { ?>bootstrap<?php }?>">
<?php }
}
}
