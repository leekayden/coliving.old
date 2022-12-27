<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\translations\helpers\view\translation_mails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c143f7f26_61663117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fe3bb09435d80425fb412b7f6aa45743e7895d3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\translations\\helpers\\view\\translation_mails.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c143f7f26_61663117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1806666351639e8c143e2845_57120124', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1806666351639e8c143e2845_57120124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1806666351639e8c143e2845_57120124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

	<?php if ($_smarty_tpl->tpl_vars['mod_security_warning']->value) {?>
	<div class="alert alert-warning">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apache mod_security is activated on your server. This could result in some Bad Request errors'),$_smarty_tpl ) );?>

	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
		<div class="alert alert-warning">
			<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type'] == 'suhosin') {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:'),$_smarty_tpl ) );?>


				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.post.max_vars.'),$_smarty_tpl ) );?>
<br/>
				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.request.max_vars.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase the Suhosin limit to'),$_smarty_tpl ) );?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:'),$_smarty_tpl ) );?>
<br/>
				<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for max_input_vars.'),$_smarty_tpl ) );?>
<br/>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase this limit to'),$_smarty_tpl ) );?>

			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s at least, or you will have to edit the translation files.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit']),$_smarty_tpl ) );?>

		</div>
	<?php } else { ?>
		<form method="post" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_submit']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-horizontal">
			<div class="panel">
				<input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" />
				<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" />
				<input type="hidden" name="theme" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
" />
				<?php echo '<script'; ?>
 type="text/javascript">
					$(document).ready(function(){
						$('a.useSpecialSyntax').click(function(){
							var syntax = $(this).find('img').attr('alt');
							$('#BoxUseSpecialSyntax .syntax span').html(syntax+".");
						});
					});
				<?php echo '</script'; ?>
>
				<div id="BoxUseSpecialSyntax">
					<div class="alert alert-warning">
						<p>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some of these expressions use this special syntax: %s.','sprintf'=>'%d'),$_smarty_tpl ) );?>

							<br />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You MUST use this syntax in your translations. Here are several examples:'),$_smarty_tpl ) );?>

						</p>
						<ul>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are [1]%d[/1] products','tags'=>array('<strong>')),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"%s" will be replaced by a number.','sprintf'=>'%d'),$_smarty_tpl ) );?>
</li>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of pages in [1]%s[/1]','tags'=>array('<strong>')),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'"%s" will be replaced by a string.','sprintf'=>'%s'),$_smarty_tpl ) );?>
</li>
							<li>"<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature: [1]%1$s[/1] ([1]%2$d[/1] values)','tags'=>array('<strong>')),$_smarty_tpl ) );?>
": <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The numbers enable you to reorder the variables when necessary.'),$_smarty_tpl ) );?>
</li>
						</ul>
					</div>
				</div>
				<div id="translation_mails-control-actions" class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo $_smarty_tpl->tpl_vars['cancel_url']->value;?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

					</a>
										<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right">
						<i class="process-icon-save"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

					</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right">
						<i class="process-icon-save"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
			<div class="panel">
				<h3>
					<i class="icon-envelope"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Core emails'),$_smarty_tpl ) );?>

					<span class="badge">
						<i class="icon-folder"></i>
						mails/<?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value);?>
/
					</span>
				</h3>
				<?php echo $_smarty_tpl->tpl_vars['mail_content']->value;?>

				
				<?php echo '<script'; ?>
 type="text/javascript">
				//<![CDATA[
					$(document).ready(function () {
						$('.mails_field').on('shown.bs.collapse', function () {
							// get active email
							var active_email = $(this).find('.email-collapse.in');
							// get iframe container for active email
							var frame = active_email.find('.email-html-frame');
							// get source url for active email
							var src = frame.data('email-src');
							// get rte container for active email
							var rte_mail_selector = active_email.find('textarea.rte-mail').data('rte');
							// create special config
							var rte_mail_config = {};
							rte_mail_config['editor_selector'] = 'rte-mail-' + rte_mail_selector;
							rte_mail_config['height'] = '500px';
							// We want the default plugins + 'fullpage' plugin for HTML emails
							rte_mail_config['plugins'] = "colorpicker link image paste pagebreak table contextmenu filemanager table code media autoresize textcolor anchor fullpage";
							// move controls to active panel
							$('#translation_mails-control-actions').appendTo($(this).find('.panel-collapse.in'));
							// when user first open email
							if (frame.find('iframe.email-frame').length == 0) {
								// load iframe
								frame.append('<iframe class="email-frame" />');
								$.ajax({
									url:'ajax.php',
									type: 'POST',
									dataType: 'html',
									data: {
										getEmailHTML : true,
										email : src
									},
									success: function(result)
									{
										var doc = frame.find('iframe')[0].contentWindow.document;
										doc.open();
										doc.write(result);
										doc.close();
										tinySetup(rte_mail_config);
										// init tinyMCE with special config
									}
								});

							}
						});
					})
				//]]>
				<?php echo '</script'; ?>
>
				
			</div>
			<div class="panel">
				<h3>
					<i class="icon-puzzle-piece"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module emails'),$_smarty_tpl ) );?>

					<span class="badge">
						<i class="icon-folder"></i>
						modules/name_of_module/mails/<?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value);?>
/
					</span>
				</h3>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_mails']->value, 'mails', false, 'module_name');
$_smarty_tpl->tpl_vars['mails']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_name']->value => $_smarty_tpl->tpl_vars['mails']->value) {
$_smarty_tpl->tpl_vars['mails']->do_else = false;
?>
					<?php echo $_smarty_tpl->tpl_vars['mails']->value['display'];?>

				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</form>
	<?php }
}
}
/* {/block "override_tpl"} */
}
