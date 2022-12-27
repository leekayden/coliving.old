<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\translations\helpers\view\translation_modules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14445434_93159197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3b3560b326c34adb3530b45e37a43cf7de124d5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\translations\\helpers\\view\\translation_modules.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c14445434_93159197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1073308328639e8c144250f1_47960258', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_1073308328639e8c144250f1_47960258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_1073308328639e8c144250f1_47960258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

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
		<div class="alert alert-info">
			<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click on the title of a section to open its fieldsets.'),$_smarty_tpl ) );?>

			</p>
		</div>
		<div class="panel">
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expressions to translate:'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['count']->value),$_smarty_tpl ) );?>
</span></p>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total missing expressions:'),$_smarty_tpl ) );?>
 <span class="badge"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d','sprintf'=>$_smarty_tpl->tpl_vars['missing_translations']->value),$_smarty_tpl ) );?>
</p>
		</div>

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
				<div class="panel-footer">
					<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default">
						<i class="process-icon-cancel"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

					</a>
					<?php echo $_smarty_tpl->tpl_vars['toggle_button']->value;?>

					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
					<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
				</div>
			</div>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules_translations']->value, 'theme', false, 'theme_name');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_name']->value => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['theme_name']->value) {?><h2>&gt;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Theme:'),$_smarty_tpl ) );?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</h2><?php }?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value, 'module', false, 'module_name');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module_name']->value => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
					<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module:'),$_smarty_tpl ) );?>
 <a name="<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
</a></h2>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module']->value, 'newLang', false, 'template_name');
$_smarty_tpl->tpl_vars['newLang']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template_name']->value => $_smarty_tpl->tpl_vars['newLang']->value) {
$_smarty_tpl->tpl_vars['newLang']->do_else = false;
?>
						<?php if (!empty($_smarty_tpl->tpl_vars['newLang']->value)) {?>
							<?php $_smarty_tpl->_assignInScope('occurrences', 0);?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newLang']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {
$_smarty_tpl->_assignInScope('occurrences', $_smarty_tpl->tpl_vars['occurrences']->value+1);
}?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php if ($_smarty_tpl->tpl_vars['occurrences']->value > 0) {?>
								<?php $_smarty_tpl->_assignInScope('missing_translations_module', $_smarty_tpl->tpl_vars['occurrences']->value);?>
							<?php } else { ?>
								<?php $_smarty_tpl->_assignInScope('missing_translations_module', 0);?>
							<?php }?>
							<div class="panel">
								<h3 onclick="$('#<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
').slideToggle();"><?php if ($_smarty_tpl->tpl_vars['theme_name']->value) {
echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['template_name']->value;?>

									<span class="badge"><?php echo count($_smarty_tpl->tpl_vars['newLang']->value);?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'expressions'),$_smarty_tpl ) );?>
 <span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['missing_translations_module']->value;?>
</span>
								</h3>
								<div name="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
_div" id="<?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
_<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['template_name']->value,'.','_');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['missing_translations_module']->value) {?>block<?php } else { ?>none<?php }?>">
									<table class="table">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newLang']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
											<tr>
												<td width="40%"><?php echo stripslashes($_smarty_tpl->tpl_vars['key']->value);?>
</td>
												<td>=</td>
												<td>
																										<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "name", null);
echo strtolower($_smarty_tpl->tpl_vars['module_name']->value);
if ($_smarty_tpl->tpl_vars['theme_name']->value) {?>_<?php echo strtolower($_smarty_tpl->tpl_vars['theme_name']->value);
}?>_<?php echo strtolower($_smarty_tpl->tpl_vars['template_name']->value);?>
_<?php echo md5($_smarty_tpl->tpl_vars['key']->value);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
													<?php if (strlen($_smarty_tpl->tpl_vars['key']->value) < $_smarty_tpl->tpl_vars['textarea_sized']->value) {?>
														<input type="text"
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
"
															value="<?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
"' />
													<?php } else { ?>
														<textarea rows="<?php echo intval((strlen($_smarty_tpl->tpl_vars['key']->value)/$_smarty_tpl->tpl_vars['textarea_sized']->value));?>
"
															style="width: 450px<?php if (empty($_smarty_tpl->tpl_vars['value']->value['trad'])) {?>;background:#FBB<?php }?>"
															name="<?php echo md5($_smarty_tpl->tpl_vars['name']->value);?>
"><?php echo stripslashes(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['value']->value['trad'],'#"#','&quot;'));?>
</textarea>
													<?php }?>
												</td>
												<td>
													<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['use_sprintf'])) && $_smarty_tpl->tpl_vars['value']->value['use_sprintf']) {?>
														<a class="useSpecialSyntax" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This expression uses a special syntax:'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
">
															<img src="<?php echo (defined('_PS_IMG_') ? constant('_PS_IMG_') : null);?>
admin/error.png" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['use_sprintf'];?>
" />
														</a>
													<?php }?>
												</td>
											</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</table>
								</div>
								<div class="panel-footer">
									<a name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cancel_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
									<button type="submit" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" name="submitTranslations<?php echo ucfirst($_smarty_tpl->tpl_vars['type']->value);?>
AndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
								</div>
							</div>
						<?php }?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>

<?php
}
}
/* {/block "override_tpl"} */
}
