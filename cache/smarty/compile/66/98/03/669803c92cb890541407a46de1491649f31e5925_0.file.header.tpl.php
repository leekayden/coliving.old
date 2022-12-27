<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:46:33
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\login\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae929a6dec9_75202558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '669803c92cb890541407a46de1491649f31e5925' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\login\\header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae929a6dec9_75202558 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"> <![endif]-->
<html lang="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
">
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico" />
		<link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
app_icon.png" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="robots" content="NOFOLLOW, NOINDEX">
		<title>
			<?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['meta_title']->value != '') {
if ((isset($_smarty_tpl->tpl_vars['navigationPipe']->value))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['navigationPipe']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>&gt;<?php }?> <?php echo $_smarty_tpl->tpl_vars['meta_title']->value;
}?> (PrestaShop&trade;)
		</title>
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
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['js_files']->value, 'js_uri');
$_smarty_tpl->tpl_vars['js_uri']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->do_else = false;
?>
			<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_uri']->value;?>
"><?php echo '</script'; ?>
>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php echo '<script'; ?>
 type="text/javascript" src="../js/admin/login.js?v=<?php echo htmlspecialchars((defined('_PS_VERSION_') ? constant('_PS_VERSION_') : null), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo '</script'; ?>
>

		<?php if (((isset($_smarty_tpl->tpl_vars['js_def']->value)) && count($_smarty_tpl->tpl_vars['js_def']->value) || (isset($_smarty_tpl->tpl_vars['js_files']->value)) && count($_smarty_tpl->tpl_vars['js_files']->value))) {?>
			<?php $_smarty_tpl->_subTemplateRender(((defined('_PS_ALL_THEMES_DIR_') ? constant('_PS_ALL_THEMES_DIR_') : null)).("javascript.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		<?php }?>
	</head>
	<body class="ps_back-office bootstrap">
		<div id="login">
			<div id="content">
<?php }
}
