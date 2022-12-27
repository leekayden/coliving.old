<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\employees\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c11798ca6_58879599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3f7dbab1a9226fbfbd1364adc8bb13e87b6b01' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\employees\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c11798ca6_58879599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_452524831639e8c11784143_69192730', "field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_520567688639e8c11785993_42540239', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_376405910639e8c11794a54_53487113', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_452524831639e8c11784143_69192730 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_452524831639e8c11784143_69192730',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
/* {block "input"} */
class Block_520567688639e8c11785993_42540239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_520567688639e8c11785993_42540239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'default_tab') {?>
	<select id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="chosen fixed-width-xxl">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
			<?php if ((isset($_smarty_tpl->tpl_vars['option']->value['children'])) && count($_smarty_tpl->tpl_vars['option']->value['children'])) {?>
				<optgroup label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"></optgroup>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['children'], 'children');
$_smarty_tpl->tpl_vars['children']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->do_else = false;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['children']->value['id_tab'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['children']->value['id_tab']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['children']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php } else { ?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_tab'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['option']->value['id_tab']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</select>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block 'script'} */
class Block_376405910639e8c11794a54_53487113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_376405910639e8c11794a54_53487113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function(){
		$('select[name=id_profile]').change(function(){
			ifSuperAdmin($(this));

			$.ajax({
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminEmployees'));?>
",
				cache: false,
				data : {
					ajax : '1',
					action : 'getTabByIdProfile',
					id_profile : $(this).val()
				},
				dataType : 'json',
				success : function(resp,textStatus,jqXHR)
				{
					if (resp != false)
					{
						$('select[name=default_tab]').html('');
						$.each(resp, function(key, r){
							if (r.id_parent == 0)
							{
								$('select[name=default_tab]').append('<optgroup label="'+r.name+'"></optgroup>');
								$.each(r.children, function(k, value){
									$('select[name=default_tab]').append('<option value="'+r.id_tab+'">'+value.name+'</option>')
								});
							}
						});
					}
				}
			});
		});
		ifSuperAdmin($('select[name=id_profile]'));
	});

	function ifSuperAdmin(el)
	{
		var val = $(el).val();

		if (!val || val == <?php echo (defined('_PS_ADMIN_PROFILE_') ? constant('_PS_ADMIN_PROFILE_') : null);?>
)
		{
			$('.assoShop input[type=checkbox]').attr('disabled', true);
			$('.assoShop input[type=checkbox]').attr('checked', true);
		}
		else
			$('.assoShop input[type=checkbox]').attr('disabled', false);
	}
<?php
}
}
/* {/block 'script'} */
}
