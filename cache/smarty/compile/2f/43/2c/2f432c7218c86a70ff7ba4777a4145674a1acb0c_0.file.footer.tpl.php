<?php
/* Smarty version 3.1.39, created on 2022-12-27 13:03:04
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aaed088948b9_34088367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f432c7218c86a70ff7ba4777a4145674a1acb0c' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\footer.tpl',
      1 => 1672146183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_63aaed088948b9_34088367 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
	<div id="footer" class="bootstrap hide">

		<div class="col-sm-2 hidden-xs">
			<a href="https://cloudservetechcentral.com" style="color:#337ff1">CTS Services</a>
			-
			<span id="footer-load-time"><i class="icon-time" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load time: '),$_smarty_tpl ) );?>
"></i>
				<?php echo number_format(microtime(true)-$_smarty_tpl->tpl_vars['timer_start']->value,3,'.','');?>
s</span>
		</div>

		<div class="col-sm-2 hidden-xs">
					</div>
		<div class="col-sm-5">
			<div class="footer-contact">
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

</html><?php }
}
