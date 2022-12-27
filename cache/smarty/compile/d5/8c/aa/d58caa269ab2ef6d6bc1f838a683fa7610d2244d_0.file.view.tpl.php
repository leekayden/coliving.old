<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\carrier_wizard\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10bea737_83000309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58caa269ab2ef6d6bc1f838a683fa7610d2244d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\carrier_wizard\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10bea737_83000309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_351978615639e8c10bda8a4_42534427', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_351978615639e8c10bda8a4_42534427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_351978615639e8c10bda8a4_42534427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
	var labelNext = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['next']);?>
';
	var labelPrevious = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['previous']);?>
';
	var	labelFinish = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['finish']);?>
';
	var	labelDelete = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','js'=>1),$_smarty_tpl ) );?>
';
	var	labelValidate = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Validate','js'=>1),$_smarty_tpl ) );?>
';
	var validate_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['validate_url']->value);?>
';
	var carrierlist_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['carrierlist_url']->value);?>
';
	var nbr_steps = <?php echo count($_smarty_tpl->tpl_vars['wizard_steps']->value['steps']);?>
;
	var enableAllSteps = <?php if (intval($_smarty_tpl->tpl_vars['enableAllSteps']->value) == 1) {?>true<?php } else { ?>false<?php }?>;
	var need_to_validate = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please validate the last range before create a new one.','js'=>1),$_smarty_tpl ) );?>
';
	var delete_range_confirm = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure to delete this range ?','js'=>1),$_smarty_tpl ) );?>
';
	var currency_sign = '<?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
';
	var PS_WEIGHT_UNIT = '<?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
';
	var invalid_range = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This range is not valid','js'=>1),$_smarty_tpl ) );?>
';
	var overlapping_range = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ranges are overlapping','js'=>1),$_smarty_tpl ) );?>
';
	var range_is_overlapping = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ranges are overlapping','js'=>1),$_smarty_tpl ) );?>
';
	var select_at_least_one_zone = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select at least one zone','js'=>1),$_smarty_tpl ) );?>
';
	var multistore_enable = '<?php echo $_smarty_tpl->tpl_vars['multistore_enable']->value;?>
';
<?php echo '</script'; ?>
>

<div class="row">
	<div class="col-sm-2">
		<?php echo $_smarty_tpl->tpl_vars['logo_content']->value;?>

	</div>
	<div class="col-sm-10">
		<div id="carrier_wizard" class="panel swMain">
			<ul class="steps nbr_steps_<?php echo count($_smarty_tpl->tpl_vars['wizard_steps']->value['steps']);?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wizard_steps']->value['steps'], 'step', false, 'step_nbr');
$_smarty_tpl->tpl_vars['step']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step_nbr']->value => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->do_else = false;
?>
				<li>
					<a href="#step-<?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
">
						<span class="stepNumber"><?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
</span>
						<span class="stepDesc">
							<?php echo $_smarty_tpl->tpl_vars['step']->value['title'];?>
<br />
							<?php if ((isset($_smarty_tpl->tpl_vars['step']->value['desc']))) {?><small><?php echo $_smarty_tpl->tpl_vars['step']->value['desc'];?>
</small><?php }?>
						</span>
						<span class="chevron"></span>
					</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wizard_contents']->value['contents'], 'content', false, 'step_nbr');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['step_nbr']->value => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
				<div id="step-<?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
" class="step_container"> 	
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				</div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
