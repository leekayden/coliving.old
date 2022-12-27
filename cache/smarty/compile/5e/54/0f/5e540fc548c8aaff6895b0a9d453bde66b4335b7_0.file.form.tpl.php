<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\statuses\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13d1b106_79392332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e540fc548c8aaff6895b0a9d453bde66b4335b7' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\statuses\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13d1b106_79392332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560891774639e8c13cf80b6_37558987', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138575720639e8c13cfda64_11777330', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1412855270639e8c13d188e3_30036973', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1355152638639e8c13d1a4c3_04687756', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "label"} */
class Block_1560891774639e8c13cf80b6_37558987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_1560891774639e8c13cf80b6_37558987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		<div id="tpl_<?php echo $_smarty_tpl->tpl_vars['input']->value['template_attr'];?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['input']->value['is_customer_template']) {
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['show_customer_template'])) && $_smarty_tpl->tpl_vars['fields_value']->value['show_customer_template']) {?>block<?php } else { ?>none<?php }
} else {
if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['show_admin_template'])) && $_smarty_tpl->tpl_vars['fields_value']->value['show_admin_template']) {?>block<?php } else { ?>none<?php }
}?>">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_1138575720639e8c13cfda64_11777330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1138575720639e8c13cfda64_11777330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
	<div class="col-lg-9">
		<div class="row">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			<?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
			<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<div class="col-lg-8">
					<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>multiple="multiple" <?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['onchange']))) {?>onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['onchange'];?>
"<?php }?>>
						<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']])) && $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']]) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'][$_smarty_tpl->tpl_vars['language']->value['iso_code']], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
									<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['multiple']))) {?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
											<?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]) {?>selected="selected"<?php }?>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php } else { ?>
										<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']])) {?>selected="selected"<?php }?>
									<?php }?>
									data-preview="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['folder']];?>
"
								><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']], ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</select>
				</div>
				<div class="col-lg-4">
					<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language_flag');
$_smarty_tpl->tpl_vars['language_flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language_flag']->value) {
$_smarty_tpl->tpl_vars['language_flag']->do_else = false;
?>
						<li>
							<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language_flag']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language_flag']->value['name'];?>
</a>
						</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
					<button type="button" class="btn btn-default" onclick="viewTemplates('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_select_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
/', '.html');">
						<i class="icon-eye-open"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preview'),$_smarty_tpl ) );?>

					</button>
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['hint']))) {?>
			<div class="clearfix">&nbsp;</div>
			<div class="col-lg-9">
				<div class="alert alert-info">
				<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hint'], 'hint');
$_smarty_tpl->tpl_vars['hint']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hint']->value) {
$_smarty_tpl->tpl_vars['hint']->do_else = false;
?>
						<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>
<br/>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>

				<?php }?>
				</div>
			</div>
		<?php }?>
		</div>
	</div>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "field"} */
class Block_1412855270639e8c13d188e3_30036973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_1412855270639e8c13d188e3_30036973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == "select_template") {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
/* {block "script"} */
class Block_1355152638639e8c13d1a4c3_04687756 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1355152638639e8c13d1a4c3_04687756',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#send_email_on, #send_email_to_customer_on').click(function() {
			$('#tpl_'+$(this).attr('class')).slideToggle();
		});

		$('#send_email_to_superadmin_on, #send_email_to_employee_on, #send_email_to_hotelier_on').click(function() {
			if ($('#send_email_to_superadmin_on').is(":checked")
				|| $('#send_email_to_employee_on').is(":checked")
				|| $('#send_email_to_hotelier_on').is(":checked")
			) {
				$('#tpl_' + $(this).attr('class')).show(500);
			} else {
				$('#tpl_' + $(this).attr('class')).hide(500);
			}
		});
	});
<?php
}
}
/* {/block "script"} */
}
