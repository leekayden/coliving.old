<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\customers\helpers\list\list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c113ca3d6_53460957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e44313ae35453cad4d9f32e5132ee1329658d5a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\customers\\helpers\\list\\list_header.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c113ca3d6_53460957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1051954577639e8c113bcf52_85421101', 'override_header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59492476639e8c113c1970_19592679', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_1051954577639e8c113bcf52_85421101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_1051954577639e8c113bcf52_85421101',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#customer', window.parent.document).val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new_customer']->value->email, ENT_QUOTES, 'UTF-8', true);?>
');
		parent.setupCustomer(<?php echo intval($_smarty_tpl->tpl_vars['new_customer']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
/* {block 'leadin'} */
class Block_59492476639e8c113c1970_19592679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_59492476639e8c113c1970_19592679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['delete_customer']->value)) && $_smarty_tpl->tpl_vars['delete_customer']->value) {?>
		<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['REQUEST_URI']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<div class="alert alert-warning">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How do you want to delete the selected customers?'),$_smarty_tpl ) );?>
</h4>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are two ways of deleting a customer. Please choose your preferred method.'),$_smarty_tpl ) );?>
</p>
				<br>
				<ul class="listForm list-unstyled">
					<li>
						<label for="deleteMode_real" class="control-label">
							<input type="radio" name="deleteMode" value="real" id="deleteMode_real" />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want my customers to be able to register again with the same email address. All data will be removed from the database.'),$_smarty_tpl ) );?>

						</label>
					</li>
					<li>
						<label for="deleteMode_deleted" class="control-label">
							<input type="radio" name="deleteMode" value="deleted" id="deleteMode_deleted" />
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I do not want my customer(s) to register again with the same email address. All selected customer(s) will be removed from this list but their corresponding data will be kept in the database.'),$_smarty_tpl ) );?>

						</label>
					</li>
				</ul>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POST']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
							<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<input type="submit" class="btn btn-default" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
" />
			</div>
		</form>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$('table[name=\'list_table\']').hide();
			});
		<?php echo '</script'; ?>
>
	<?php }
}
}
/* {/block 'leadin'} */
}
