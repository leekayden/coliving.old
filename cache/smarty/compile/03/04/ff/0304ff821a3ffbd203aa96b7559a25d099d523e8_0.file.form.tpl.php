<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14a0af83_09442181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0304ff821a3ffbd203aa96b7559a25d099d523e8' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:helpers/form/form_group.tpl' => 1,
  ),
),false)) {
function content_639e8c14a0af83_09442181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ((isset($_smarty_tpl->tpl_vars['fields']->value['title']))) {?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && count($_smarty_tpl->tpl_vars['tabs']->value)) {
echo '<script'; ?>
 type="text/javascript">
	var helper_tabs = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['tabs']->value ));?>
;
	var unique_field_id = '';
<?php echo '</script'; ?>
>
<?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_340258687639e8c148db4e2_27849047', "defaultForm");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1266282146639e8c14a01d88_27369324', "after");
?>


<?php if ((isset($_smarty_tpl->tpl_vars['tinymce']->value)) && $_smarty_tpl->tpl_vars['tinymce']->value) {
echo '<script'; ?>
 type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes((defined('_THEME_CSS_DIR_') ? constant('_THEME_CSS_DIR_') : null));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1907694903639e8c14a048f6_24837207', "autoload_tinyMCE");
?>

	});
<?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['firstCall']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var module_dir = '<?php echo (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null);?>
';
		var id_language = <?php echo intval($_smarty_tpl->tpl_vars['defaultFormLanguage']->value);?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value) {?>1<?php } else { ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state']))) {?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Now','js'=>1),$_smarty_tpl ) );?>
',
				closeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done','js'=>1),$_smarty_tpl ) );?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose Time','js'=>1),$_smarty_tpl ) );?>
',
				timeText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time','js'=>1),$_smarty_tpl ) );?>
',
				hourText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hour','js'=>1),$_smarty_tpl ) );?>
',
				minuteText: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Minute','js'=>1),$_smarty_tpl ) );?>
',
			});
			<?php if ((isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value))) {?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminStates'),$_smarty_tpl ) );?>
';
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1718606800639e8c14a0a3e8_66463272', "script");
?>

	<?php echo '</script'; ?>
>
<?php }
}
/* {block "legend"} */
class Block_277254094639e8c148ea496_22868433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="panel-heading">
							<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['image'])) && (isset($_smarty_tpl->tpl_vars['field']->value['title']))) {?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					<?php
}
}
/* {/block "legend"} */
/* {block "label"} */
class Block_1538042144639e8c148f31b1_90326072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?>
									<label class="control-label col-lg-3<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required'] && $_smarty_tpl->tpl_vars['input']->value['type'] != 'radio') {?> required<?php }?>">
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)) {?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value['text']);?>

														<?php } else { ?>
															<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['hint']->value);?>

														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php } else { ?>
													<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['input']->value['hint']);?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_251590186639e8c148fa040_17501290 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text' || $_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
									<div class="form-group">
									<?php }?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
										<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
													
														<?php echo '<script'; ?>
 type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag','js'=>1),$_smarty_tpl ) );?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														<?php echo '</script'; ?>
>
													
												<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
												<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
												<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
												<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
												</span>
												<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
													value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<?php echo '<script'; ?>
 type="text/javascript">
									$(document).ready(function(){
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
										countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"));
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									});
									<?php echo '</script'; ?>
>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
									</div>
									<?php }?>
									<?php } else { ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?>
											
											<?php echo '<script'; ?>
 type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add tag'),$_smarty_tpl ) );?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											<?php echo '</script'; ?>
>
											
										<?php }?>
										<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
										<div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span></span>
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['prefix']))) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
											value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
											class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>

										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {?>
										</div>
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										<?php echo '<script'; ?>
 type="text/javascript">
										$(document).ready(function(){
											countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
										});
										<?php echo '</script'; ?>
>
										<?php }?>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textbutton') {?>
									<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar']))) {?>
										<div class="input-group">
											<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
											value="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['string_format'])) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);
}?>"
											class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'tags') {?> tagify<?php }?>"
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['suffix']))) {
echo $_smarty_tpl->tpl_vars['input']->value['suffix'];
}?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];
}
if ((isset($_smarty_tpl->tpl_vars['input']->value['button']['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];
}?>"
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['button']['attributes'], 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8') != 'class') {?>
													 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
									<?php echo '<script'; ?>
 type="text/javascript">
										$(document).ready(function() {
											countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
										});
									<?php echo '</script'; ?>
>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'swap') {?>
									<div class="form-group">
										<div class="col-lg-9">
											<div class="form-control-static row">
												<div class="col-xs-6">
													<select <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);
}?>" id="availableSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_available[]" multiple="multiple">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (!in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</select>
													<a href="#" id="addSwap" class="btn btn-default btn-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
 <i class="icon-arrow-right"></i></a>
												</div>
												<div class="col-xs-6">
													<select <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);
}?>" id="selectedSwap" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
_selected[]" multiple="multiple">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
														<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']},$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
															<?php }?>
														<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
															<option value="">-</option>
														<?php } else { ?>
															<?php if (in_array($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>
																<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>
															<?php }?>
														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</select>
													<a href="#" id="removeSwap" class="btn btn-default btn-block"><i class="icon-arrow-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove'),$_smarty_tpl ) );?>
</a>
												</div>
											</div>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])) && !$_smarty_tpl->tpl_vars['input']->value['options']['query'] && (isset($_smarty_tpl->tpl_vars['input']->value['empty_message']))) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['required'] = false;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
										<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['input']) ? $_smarty_tpl->tpl_vars['input']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['desc'] = null;
$_smarty_tpl->_assignInScope('input', $_tmp_array);?>
									<?php } else { ?>
										<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
"
												class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);
}?> fixed-width-xl"
												id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['id'], ENT_QUOTES, 'utf-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);
}?>"
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple'])) && $_smarty_tpl->tpl_vars['input']->value['multiple']) {?> multiple="multiple"<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?> size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?> onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['default']))) {?>
												<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'], ENT_QUOTES, 'utf-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'], ENT_QUOTES, 'utf-8', true);?>
</option>
											<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']))) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query'], 'optiongroup');
$_smarty_tpl->tpl_vars['optiongroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->do_else = false;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
																<?php } else { ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</optgroup>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php } else { ?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																		selected="selected"
																	<?php }?>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
														<option value="">-</option>
													<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
																<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																		selected="selected"
																	<?php }?>
																<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<?php } else { ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</select>
									<?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'radio') {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
										<div class="radio <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
											<label><input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/><?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>
</label>
										</div>
										<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['p'])) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch') {?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
										<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled'])) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>/>
										<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No'),$_smarty_tpl ) );
}?></label>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<a class="slide-button btn"></a>
									</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textarea') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?><div class="input-group"><?php }?>
									<?php $_smarty_tpl->_assignInScope('use_textarea_autosize', true);?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['lang'])) && $_smarty_tpl->tpl_vars['input']->value['lang']) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
											<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?> style="display:none;"<?php }?>>
												<div class="col-lg-9">
											<?php }?>
													<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
														<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
															<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
														</span>
													<?php }?>
													<textarea<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
											<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
												</div>
												<div class="col-lg-2">
													<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
														<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
														<li>
															<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
														</li>
														<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
													</ul>
												</div>
											</div>
											<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<?php echo '<script'; ?>
 type="text/javascript">
											$(document).ready(function(){
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
												countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter"));
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											});
											<?php echo '</script'; ?>
>
										<?php }?>
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<span id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
}?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
</span>
											</span>
										<?php }?>
										<textarea<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['readonly'])) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['cols']))) {?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['rows']))) {?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])) && $_smarty_tpl->tpl_vars['input']->value['autoload_rte']) {?>rte autoload_rte<?php } else { ?>textarea-autosize<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
										<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?>
											<?php echo '<script'; ?>
 type="text/javascript">
											$(document).ready(function(){
												countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_counter"));
											});
											<?php echo '</script'; ?>
>
										<?php }?>
									<?php }?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?></div><?php }?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']))) {?>
										<a class="btn btn-default show_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'hide') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if (strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])) && $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'] > 0) {?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
										<?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]));?>
										<div class="checkbox<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['expand'])) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['value']->value['val']))) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['val'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?> checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
										</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'change-password') {?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Change password...'),$_smarty_tpl ) );?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current password'),$_smarty_tpl ) );?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required" autocomplete="off">
														</div>
													</div>
												</div>
												<hr />
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password should be at least 8 characters long.'),$_smarty_tpl ) );?>
">
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New password'),$_smarty_tpl ) );?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" value="" required="required" autocomplete="off"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm password'),$_smarty_tpl ) );?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" value="" autocomplete="off"/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate password'),$_smarty_tpl ) );?>

														</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<p class="checkbox">
															<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail">
																<input name="passwd_send_email" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail" type="checkbox" checked="checked">
																<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send me this new password by Email'),$_smarty_tpl ) );?>

															</label>
														</p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php echo '<script'; ?>
>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');

											var feedback = [
												{ badge: 'text-danger', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Invalid",'js'=>1),$_smarty_tpl ) );?>
' },
												{ badge: 'text-warning', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Okay",'js'=>1),$_smarty_tpl ) );?>
' },
												{ badge: 'text-success', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Good",'js'=>1),$_smarty_tpl ) );?>
' },
												{ badge: 'text-success', text: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Fabulous",'js'=>1),$_smarty_tpl ) );?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl ) );?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									<?php echo '</script'; ?>
>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'password') {?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"
											value=""
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?>autocomplete="off"<?php }?>
											<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['required'])) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?> />
									</div>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'birthday') {?>
								<div class="form-group">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'select', false, 'key');
$_smarty_tpl->tpl_vars['select']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['select']->value) {
$_smarty_tpl->tpl_vars['select']->do_else = false;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value == 'months') {?>
																								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl ) );?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php } else { ?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['select']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php }?>
										</select>
									</div>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'group') {?>
									<?php $_smarty_tpl->_assignInScope('groups', $_smarty_tpl->tpl_vars['input']->value['values']);?>
									<?php $_smarty_tpl->_subTemplateRender('file:helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'shop') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'categories') {?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'categories_select') {?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'asso_shop' && (isset($_smarty_tpl->tpl_vars['asso_shop']->value)) && $_smarty_tpl->tpl_vars['asso_shop']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'color') {?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'date') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
												type="text"
												data-hex="true"
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'datetime') {?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['id']))) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
												type="text"
												data-hex="true"
												<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php } else { ?> class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'free') {?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'html') {?>
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['html_content']))) {?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['html_content'];?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

									<?php }?>
								<?php }?>
								<?php
}
}
/* {/block "input"} */
/* {block "description"} */
class Block_234352369639e8c149df987_54619712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['desc'])) && !empty($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])) {?>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['desc'], 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php } else { ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											<?php } else { ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								<?php
}
}
/* {/block "description"} */
/* {block "field"} */
class Block_718161419639e8c148f8952_00273677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

								<div class="col-lg-<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['col']))) {
echo intval($_smarty_tpl->tpl_vars['input']->value['col']);
} else { ?>9<?php }
if (!(isset($_smarty_tpl->tpl_vars['input']->value['label']))) {?> col-lg-offset-3<?php }?>">
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_251590186639e8c148fa040_17501290', "input", $this->tplIndex);
?>
								<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_234352369639e8c149df987_54619712', "description", $this->tplIndex);
?>

								</div>
							<?php
}
}
/* {/block "field"} */
/* {block "input_row"} */
class Block_696387297639e8c148ef2a2_46935912 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="form-group<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['form_group_class']))) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];
}
if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'hidden') {?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'id_state') {?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value) {?> style="display:none;"<?php }
}
if ((isset($_smarty_tpl->tpl_vars['tabs']->value)) && (isset($_smarty_tpl->tpl_vars['input']->value['tab']))) {?> data-tab-id="<?php echo $_smarty_tpl->tpl_vars['input']->value['tab'];?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'hidden') {?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php } else { ?>
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1538042144639e8c148f31b1_90326072', "label", $this->tplIndex);
?>


							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718161419639e8c148f8952_00273677', "field", $this->tplIndex);
?>
						<?php }?>
						</div>
						<?php
}
}
/* {/block "input_row"} */
/* {block "other_input"} */
class Block_193933778639e8c149ea619_51493553 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "other_input"} */
/* {block "footer"} */
class Block_546272062639e8c149ead25_33368129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'form_submit_btn', null, null);
echo smarty_function_counter(array('name'=>'form_submit_btn'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) || (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
					<div class="panel-footer">
						<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) && !empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])) {?>
						<button type="submit" value="1"	id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'form_submit_btn')-1));
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];
} else {
echo $_smarty_tpl->tpl_vars['submit_action']->value;
}
if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])) && $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']) {?>AndStay<?php }?>" class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];
} else { ?>btn btn-default pull-right<?php }?>">
							<i class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];
} else { ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)) && $_smarty_tpl->tpl_vars['show_cancel_button']->value) {?>
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['back_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="btn btn-default" onclick="window.history.back();">
							<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

						</a>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']))) {?>
						<button
							type="reset"
							id="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];
} else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class']))) {
echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];
} else { ?>btn btn-default<?php }?>"
							>
							<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if ((isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'], 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['href'])) && trim($_smarty_tpl->tpl_vars['btn']->value['href']) != '') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php } else { ?>
								<button type="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['type']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['type'];
} else { ?>button<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['id']))) {?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];
}?>" name="<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['name']))) {
echo $_smarty_tpl->tpl_vars['btn']->value['name'];
} else { ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['js'])) && $_smarty_tpl->tpl_vars['btn']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if ((isset($_smarty_tpl->tpl_vars['btn']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }
echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				<?php }?>
			<?php
}
}
/* {/block "footer"} */
/* {block "fieldset"} */
class Block_499888817639e8c148e6e93_26126345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'fieldset_name', null, null);
echo smarty_function_counter(array('name'=>'fieldset_name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count'));
}
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'fieldset_name')-1));
}?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form'], 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value == 'legend') {?>
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_277254094639e8c148ea496_22868433', "legend", $this->tplIndex);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'description' && $_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'warning' && $_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'success' && $_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'error' && $_smarty_tpl->tpl_vars['field']->value) {?>
					<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'input') {?>
					<div class="form-wrapper">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'input');
$_smarty_tpl->tpl_vars['input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->do_else = false;
?>
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_696387297639e8c148ef2a2_46935912', "input_row", $this->tplIndex);
?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

					<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

					<?php } elseif ((isset($_GET['controller']))) {?>
						<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl ) );?>

					<?php }?>
				</div><!-- /.form-wrapper -->
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'desc') {?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value, 'p', false, 'k');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)) {?>
									<span<?php if ((isset($_smarty_tpl->tpl_vars['p']->value['id']))) {?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if ((isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1]))) {?><br /><?php }?>
								<?php }?>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php } else { ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193933778639e8c149ea619_51493553', "other_input", $this->tplIndex);
?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_546272062639e8c149ead25_33368129', "footer", $this->tplIndex);
?>

		</div>
		<?php
}
}
/* {/block "fieldset"} */
/* {block "other_fieldsets"} */
class Block_1091663803639e8c14a00ee6_42013019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "other_fieldsets"} */
/* {block "defaultForm"} */
class Block_340258687639e8c148db4e2_27849047 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_340258687639e8c148db4e2_27849047',
  ),
  'fieldset' => 
  array (
    0 => 'Block_499888817639e8c148e6e93_26126345',
  ),
  'legend' => 
  array (
    0 => 'Block_277254094639e8c148ea496_22868433',
  ),
  'input_row' => 
  array (
    0 => 'Block_696387297639e8c148ef2a2_46935912',
  ),
  'label' => 
  array (
    0 => 'Block_1538042144639e8c148f31b1_90326072',
  ),
  'field' => 
  array (
    0 => 'Block_718161419639e8c148f8952_00273677',
  ),
  'input' => 
  array (
    0 => 'Block_251590186639e8c148fa040_17501290',
  ),
  'description' => 
  array (
    0 => 'Block_234352369639e8c149df987_54619712',
  ),
  'other_input' => 
  array (
    0 => 'Block_193933778639e8c149ea619_51493553',
  ),
  'footer' => 
  array (
    0 => 'Block_546272062639e8c149ead25_33368129',
  ),
  'other_fieldsets' => 
  array (
    0 => 'Block_1091663803639e8c14a00ee6_42013019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?>

<?php if ((isset($_smarty_tpl->tpl_vars['identifier_bk']->value)) && $_smarty_tpl->tpl_vars['identifier_bk']->value == $_smarty_tpl->tpl_vars['identifier']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'identifier_count', null, null);
echo smarty_function_counter(array('name'=>'identifier_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_assignInScope('identifier_bk', $_smarty_tpl->tpl_vars['identifier']->value ,false ,2);
if ((isset($_smarty_tpl->tpl_vars['table_bk']->value)) && $_smarty_tpl->tpl_vars['table_bk']->value == $_smarty_tpl->tpl_vars['table']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'table_count', null, null);
echo smarty_function_counter(array('name'=>'table_count'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->_assignInScope('table_bk', $_smarty_tpl->tpl_vars['table']->value ,false ,2);?>
<form id="<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'], ENT_QUOTES, 'UTF-8', true);
} else {
if ($_smarty_tpl->tpl_vars['table']->value == null) {?>configuration_form<?php } else {
echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'table_count'));
}
}?>" class="defaultForm form-horizontal<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value)) && $_smarty_tpl->tpl_vars['name_controller']->value) {?> <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;
}?>"<?php if ((isset($_smarty_tpl->tpl_vars['current']->value)) && $_smarty_tpl->tpl_vars['current']->value) {?> action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);
if ((isset($_smarty_tpl->tpl_vars['token']->value)) && $_smarty_tpl->tpl_vars['token']->value) {?>&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);
}?>"<?php }?> method="post" enctype="multipart/form-data"<?php if ((isset($_smarty_tpl->tpl_vars['style']->value))) {?> style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;
if ((($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count') !== null )) && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count')) {?>_<?php echo intval($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'identifier_count'));
}?>" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)) {?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->do_else = false;
?>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_499888817639e8c148e6e93_26126345', "fieldset", $this->tplIndex);
?>

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1091663803639e8c14a00ee6_42013019', "other_fieldsets", $this->tplIndex);
?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form>
<?php
}
}
/* {/block "defaultForm"} */
/* {block "after"} */
class Block_1266282146639e8c14a01d88_27369324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1266282146639e8c14a01d88_27369324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
/* {block "autoload_tinyMCE"} */
class Block_1907694903639e8c14a048f6_24837207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'autoload_tinyMCE' => 
  array (
    0 => 'Block_1907694903639e8c14a048f6_24837207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			tinySetup({
				editor_selector :"autoload_rte"
			});
		<?php
}
}
/* {/block "autoload_tinyMCE"} */
/* {block "script"} */
class Block_1718606800639e8c14a0a3e8_66463272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1718606800639e8c14a0a3e8_66463272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
