<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\stores\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13dcb9a5_97757041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb8966cdf923f23be046e9f5d52e0568d6acbe5' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\stores\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13dcb9a5_97757041 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2017606117639e8c13dc1ac5_19421595', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_309467214639e8c13dc2488_89801226', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295838419639e8c13dc80a1_82819970', "other_input");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_2017606117639e8c13dc1ac5_19421595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2017606117639e8c13dc1ac5_19421595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#latitude, #longitude').keyup(function() {
			$(this).val($(this).val().replace(/,/g, '.'));
		});
	});
<?php
}
}
/* {/block 'script'} */
/* {block "input"} */
class Block_309467214639e8c13dc2488_89801226 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_309467214639e8c13dc2488_89801226',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'latitude') {?>
	<div class="row">
		<div class="col-lg-3">
			<input type="text"
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="latitude"
				id="latitude"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
		</div>
		<div class="col-lg-1">
			<div class="form-control-static text-center"> / </div>
		</div>
		<div class="col-lg-3">
			<input type="text"
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['size']))) {?>size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
				<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['maxlength']))) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
				name="longitude"
				id="longitude"
				value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value['longitude'], ENT_QUOTES, 'UTF-8', true);?>
" />
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
/* {block "other_input"} */
class Block_295838419639e8c13dc80a1_82819970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_input' => 
  array (
    0 => 'Block_295838419639e8c13dc80a1_82819970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'hours') {?>
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hours:'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'e.g. 10:00AM - 9:30PM'),$_smarty_tpl ) );?>
</p></div>
			</div>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value['days'], 'value', false, 'k');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
			<div class="form-group">
				<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</label>
				<div class="col-lg-9"><input type="text" size="25" name="hours_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1]))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value['hours'][$_smarty_tpl->tpl_vars['k']->value-1], ENT_QUOTES, 'UTF-8', true);
}?>" /></div>
			</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php }
}
}
/* {/block "other_input"} */
}
