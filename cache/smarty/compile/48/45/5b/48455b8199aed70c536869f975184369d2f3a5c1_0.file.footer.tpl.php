<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:24
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e4443504_93637666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48455b8199aed70c536869f975184369d2f3a5c1' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\footer.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_63aae8e4443504_93637666 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="https://webkul.com" class="_blank">Webkul&trade;</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load time: '),$_smarty_tpl ) );?>
"></i> <?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter _blank" href="https://twitter.com/qloapps" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/qloapps" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://github.com/webkul/hotelcommerce" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google _blank" href="https://plus.google.com/110221570427070809661" title="Google">
				<i class="icon-google-plus"></i>
			</a>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="https://qloapps.com/contact/" class="footer_link _blank">
				<i class="icon-envelope"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://forums.qloapps.com/category/7/bug-report" class="footer_link _blank">
				<i class="icon-bug"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bug Tracker'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://forums.qloapps.com/" class="footer_link _blank">
				<i class="icon-comments"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forum'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://qloapps.com/addons/" class="footer_link _blank">
				<i class="icon-puzzle-piece"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons'),$_smarty_tpl ) );?>

			</a>
			/&nbsp;
			<a href="https://qloapps.com/qlo-reservation-system/" class="footer_link _blank">
				<i class="icon-book"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Training'),$_smarty_tpl ) );?>

			</a>
			<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>
			/&nbsp;
			<a href="http://status.prestashop.com/" class="footer_link _blank">
				<i class="icon-circle status-page-dot"></i>
				<span class="status-page-description"></span>
			</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['iso_is_fr']->value && !$_smarty_tpl->tpl_vars['host_mode']->value) {?>
			<p>Questions • Renseignements • Formations :
				<strong>+33 (0)1.40.18.30.04</strong>
			</p>
			<?php }?>
		</div>
	</div>

	<div class="col-sm-3">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['php_errors']->value))) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['modals']->value))) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }
}
