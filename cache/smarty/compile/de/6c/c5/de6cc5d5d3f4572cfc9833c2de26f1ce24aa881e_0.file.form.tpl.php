<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\cms\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c111f5203_05888650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de6cc5d5d3f4572cfc9833c2de26f1ce24aa881e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\cms\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c111f5203_05888650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168121207639e8c111ed035_05998508', "input");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1224142267639e8c111f0843_81373408', "script");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_846484743639e8c111f16e0_61177290', "leadin");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1674366454639e8c111f2c48_31725469', "input");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_1168121207639e8c111ed035_05998508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1168121207639e8c111ed035_05998508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == "link_rewrite") {?>
		<?php echo '<script'; ?>
 type="text/javascript">
		<?php if ((isset($_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value)) && $_smarty_tpl->tpl_vars['PS_ALLOW_ACCENTED_CHARS_URL']->value) {?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 1;
		<?php } else { ?>
			var PS_ALLOW_ACCENTED_CHARS_URL = 0;
		<?php }?>
		<?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "script"} */
class Block_1224142267639e8c111f0843_81373408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_1224142267639e8c111f0843_81373408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		$('#active_on').bind('click', function(){
			toggleDraftWarning(false);
		});
		$('#active_off').bind('click', function(){
			toggleDraftWarning(true);
		});		
	});
<?php
}
}
/* {/block "script"} */
/* {block "leadin"} */
class Block_846484743639e8c111f16e0_61177290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_846484743639e8c111f16e0_61177290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div style="<?php if ($_smarty_tpl->tpl_vars['active']->value) {?>display:none<?php }?>">
		<p class="alert alert-warning">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your CMS page will be saved as a draft'),$_smarty_tpl ) );?>

		</p>
	</div>
<?php
}
}
/* {/block "leadin"} */
/* {block "input"} */
class Block_1674366454639e8c111f2c48_31725469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1674366454639e8c111f2c48_31725469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select_category') {?>
		<select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['input']->value['options']['html'];?>

		</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
