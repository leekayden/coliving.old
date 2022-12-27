<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\themes\hotel-reservation-theme\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10ec2377_31915603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4c43a4e802c588f53cae9e2e845110463a61b73' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\themes\\hotel-reservation-theme\\maintenance.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10ec2377_31915603 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language_code']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<head>
	<meta charset="utf-8">
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>
<?php if ((isset($_smarty_tpl->tpl_vars['meta_description']->value))) {?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }
if ((isset($_smarty_tpl->tpl_vars['meta_keywords']->value))) {?>
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>
	<meta name="robots" content="<?php if ((isset($_smarty_tpl->tpl_vars['nobots']->value))) {?>no<?php }?>index,follow">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
">
       	<link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet">
       	<link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
</head>
<body>
    	<div class="container">
			<div id="maintenance">
				<div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value) {?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value) {?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" /></div>
	        		<?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

	        		<div id="message">
	             			<h1 class="maintenance-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We\'ll be back soon.'),$_smarty_tpl ) );?>
</h1>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We are currently updating our site and will be back really soon.'),$_smarty_tpl ) );?>

							<br />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks for your patience.'),$_smarty_tpl ) );?>

					</div>
				</div>
	        </div>
		</div>
</body>
</html>
<?php }
}
