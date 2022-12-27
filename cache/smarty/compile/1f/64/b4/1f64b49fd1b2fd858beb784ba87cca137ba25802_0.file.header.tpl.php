<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10cde169_79205039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f64b49fd1b2fd858beb784ba87cca137ba25802' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10cde169_79205039 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>><![endif]-->
<html<?php if ((isset($_smarty_tpl->tpl_vars['language_code']->value)) && $_smarty_tpl->tpl_vars['language_code']->value) {?> lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
	<head>
		<meta charset="utf-8" />
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
		<?php if ((isset($_smarty_tpl->tpl_vars['meta_description']->value)) && $_smarty_tpl->tpl_vars['meta_description']->value) {?>
			<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['meta_keywords']->value)) && $_smarty_tpl->tpl_vars['meta_keywords']->value) {?>
			<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
		<?php }?>
		<meta name="generator" content="PrestaShop" />
		<meta name="robots" content="<?php if ((isset($_smarty_tpl->tpl_vars['nobots']->value))) {?>no<?php }?>index,<?php if ((isset($_smarty_tpl->tpl_vars['nofollow']->value)) && $_smarty_tpl->tpl_vars['nofollow']->value) {?>no<?php }?>follow" />
		<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['img_update_time']->value;?>
" />
		<?php if ((isset($_smarty_tpl->tpl_vars['css_files']->value))) {?>
			<?php
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
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['js_defer']->value)) && !$_smarty_tpl->tpl_vars['js_defer']->value && (isset($_smarty_tpl->tpl_vars['js_files']->value)) && (isset($_smarty_tpl->tpl_vars['js_def']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo '</script'; ?>
>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

		<!-- <link rel="stylesheet" href="http<?php if (Tools::usingSecureMode()) {?>s<?php }?>://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" /> -->

		<!--[if IE 8]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->

		<!-- by webkul -->
		<!-- <link href='https://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'> -->
		<!-- <link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'> -->
		<link href='//fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	</head>
	<body<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['page_name']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page_name']->value, ENT_QUOTES, 'UTF-8', true);
}
if ((isset($_smarty_tpl->tpl_vars['body_classes']->value)) && count($_smarty_tpl->tpl_vars['body_classes']->value)) {?> <?php echo implode(' ',$_smarty_tpl->tpl_vars['body_classes']->value);
}
if ($_smarty_tpl->tpl_vars['hide_left_column']->value) {?> hide-left-column<?php } else { ?> show-left-column<?php }
if ($_smarty_tpl->tpl_vars['hide_right_column']->value) {?> hide-right-column<?php } else { ?> hide-right-column<?php }
if ((isset($_smarty_tpl->tpl_vars['content_only']->value)) && $_smarty_tpl->tpl_vars['content_only']->value) {?> content_only<?php }?> lang_<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
	<?php if (!(isset($_smarty_tpl->tpl_vars['content_only']->value)) || !$_smarty_tpl->tpl_vars['content_only']->value) {?>
		<?php if ((isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) && $_smarty_tpl->tpl_vars['restricted_country_mode']->value) {?>
			<div id="restricted-country">
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You cannot place a new order from your country.'),$_smarty_tpl ) );
if ((isset($_smarty_tpl->tpl_vars['geolocation_country']->value)) && $_smarty_tpl->tpl_vars['geolocation_country']->value) {?> <span class="bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['geolocation_country']->value, ENT_QUOTES, 'UTF-8', true);?>
</span><?php }?></p>
			</div>
		<?php }?>
		<div id="page" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
			<div class="header-container" style="<?php if ($_smarty_tpl->tpl_vars['page_name']->value == 'index') {?>height: 100%;<?php }?>">
				<header id="header" style='<?php if ($_smarty_tpl->tpl_vars['page_name']->value == "index") {?>background-image:url("<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_IMG_') ? constant('_PS_IMG_') : null))."hotel_header_image.jpg");?>
"); height: 100%;<?php } else { ?>background-color:#252525;<?php }?>' >
					<div class="banner">
						<div class="container">
							<div class="row">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBanner"),$_smarty_tpl ) );?>

							</div>
						</div>
					</div>
					<div class="nav">
						<div class="container">
							<div class="row">
								<nav><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayNav"),$_smarty_tpl ) );?>
</nav>
							</div>
						</div>
					</div>
					<div>
						<div class="container">
							<div class="row">
								<div id="header_logo" class="col-xs-4">
									<a href="<?php if ((isset($_smarty_tpl->tpl_vars['force_ssl']->value)) && $_smarty_tpl->tpl_vars['force_ssl']->value) {
echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;
} else {
echo $_smarty_tpl->tpl_vars['base_dir']->value;
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<img class="logo img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ((isset($_smarty_tpl->tpl_vars['logo_image_width']->value)) && $_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['logo_image_height']->value)) && $_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
									</a>
								</div>
								<?php if ((isset($_smarty_tpl->tpl_vars['HOOK_TOP']->value))) {
echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;
}?>
							</div>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearchHotelPanel'),$_smarty_tpl ) );?>

						</div>
					</div>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterHookTop'),$_smarty_tpl ) );?>

				</header>
			</div>
			<div class="columns-container">
				<div id="columns" class="container">
					<?php if ($_smarty_tpl->tpl_vars['show_breadcrump']->value) {?>
						<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					<?php }?>
					<div id="slider_row" class="row">
						<div id="top_column" class="center_column col-xs-12 col-sm-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayTopColumn"),$_smarty_tpl ) );?>
</div>
					</div>
					<div class="row">
						<?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && !empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
						<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['left_column_size']->value)) && (isset($_smarty_tpl->tpl_vars['right_column_size']->value))) {
$_smarty_tpl->_assignInScope('cols', (12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value));
} else {
$_smarty_tpl->_assignInScope('cols', 12);
}?>
						<div id="center_column" class="center_column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
">
	<?php }
}
}
