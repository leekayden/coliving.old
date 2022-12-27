<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\attribute_generator\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c10942951_52138818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5ee0d15a9ee805a847305c969a4cd7cb9d8ca21' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\attribute_generator\\content.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c10942951_52138818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	var attrs = new Array();
	attrs[0] = new Array(0, '---');

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_js']->value, 'group', false, 'idgrp');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idgrp']->value => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('row', "attrs[".((string)$_smarty_tpl->tpl_vars['idgrp']->value)."] = new Array(0, '---'");?>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value, 'attrname', false, 'idattr');
$_smarty_tpl->tpl_vars['attrname']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['idattr']->value => $_smarty_tpl->tpl_vars['attrname']->value) {
$_smarty_tpl->tpl_vars['attrname']->do_else = false;
?>
			<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['attrname']->value, ENT_QUOTES, 'UTF-8', true);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('row', ((string)$_smarty_tpl->tpl_vars['row']->value).", ".((string)$_smarty_tpl->tpl_vars['idattr']->value).", '".$_prefixVariable1."'");?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

		<?php $_smarty_tpl->_assignInScope('row', ((string)$_smarty_tpl->tpl_vars['row']->value).");");?>
		<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	i18n_tax_exc = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Excluded'),$_smarty_tpl ) );?>
 ';
	i18n_tax_inc = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax Included'),$_smarty_tpl ) );?>
 ';

	var product_tax = '<?php echo $_smarty_tpl->tpl_vars['tax_rates']->value;?>
';
	function calcPrice(element, element_has_tax)
	{
			var element_price = element.val().replace(/,/g, '.');
			var other_element_price = 0;

			if (!isNaN(element_price))
			{
				if (element_has_tax)
					other_element_price = parseFloat(element_price / ((product_tax / 100) + 1)).toFixed(6);
				else
					other_element_price = ps_round(parseFloat(element_price * ((product_tax / 100) + 1)), 2).toFixed(2);
			}

			$('#related_to_'+element.attr('name')).val(other_element_price);
	}

	$(document).ready(function() { $('.price_impact').each(function() { calcPrice($(this), false); }); });
<?php echo '</script'; ?>
>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2094216536639e8c1092ca45_74656481', "leadin");
?>
</div>

<?php if ($_smarty_tpl->tpl_vars['generate']->value) {?><div class="alert alert-success clearfix"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d product(s) successfully created.','sprintf'=>$_smarty_tpl->tpl_vars['combinations_size']->value),$_smarty_tpl ) );?>
</div><?php }?>
<form enctype="multipart/form-data" method="post" id="generator" action="<?php echo $_smarty_tpl->tpl_vars['url_generator']->value;?>
">
	<div class="panel">
		<h3>
			<i class="icon-asterisk"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attributes generator'),$_smarty_tpl ) );?>

		</h3>
		<div class="row">
			<div class="col-lg-3">
				<div class="form-group">
					<select multiple name="attributes[]" id="attribute_group" style="height: 500px">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_groups']->value, 'attribute_group', false, 'k');
$_smarty_tpl->tpl_vars['attribute_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['attribute_group']->value) {
$_smarty_tpl->tpl_vars['attribute_group']->do_else = false;
?>
							<?php if ((isset($_smarty_tpl->tpl_vars['attribute_js']->value[$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group']]))) {?>
								<optgroup name="<?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute_group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_js']->value[$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group']], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
										<option name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" id="attr_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</optgroup>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-default" onclick="del_attr_multiple();"><i class="icon-minus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>
</button>
					<button type="button" class="btn btn-default pull-right" onclick="add_attr_multiple();"><i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>
</button>
				</div>
			</div>
			<div class="col-lg-8 col-lg-offset-1">
				<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The Combinations Generator is a tool that allows you to easily create a series of combinations by selecting the related attributes. For example, if you\'re selling t-shirts in three different sizes and two different colors, the generator will create six combinations for you.'),$_smarty_tpl ) );?>
</div>

				<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You\'re currently generating combinations for the following product:'),$_smarty_tpl ) );?>
 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</b></div>

				<div class="alert alert-info"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step 1: On the left side, select the attributes you want to use (Hold down the "Ctrl" key on your keyboard and validate by clicking on "Add")'),$_smarty_tpl ) );?>
</strong></div>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute_groups']->value, 'attribute_group', false, 'k');
$_smarty_tpl->tpl_vars['attribute_group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['attribute_group']->value) {
$_smarty_tpl->tpl_vars['attribute_group']->do_else = false;
?>
					<?php if ((isset($_smarty_tpl->tpl_vars['attribute_js']->value[$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group']]))) {?>
					<div class="row">
						<table class="table" style="display:none">
							<thead>
								<tr>
									<th id="tab_h1" class="fixed-width-md"><span class="title_box"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute_group']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></th>
									<th id="tab_h2" colspan="2"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact on the product price'),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
)</span></th>
									<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Impact on the product weight'),$_smarty_tpl ) );?>
 (<?php echo $_smarty_tpl->tpl_vars['weight_unit']->value;?>
)</span></th>
								</tr>
							</thead>
							<tbody id="table_<?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
" name="result_table">
							</tbody>
						</table>
					</div>
						<?php if ((isset($_smarty_tpl->tpl_vars['attributes']->value[$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group']]))) {?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attributes']->value[$_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group']], 'attribute', false, 'k');
$_smarty_tpl->tpl_vars['attribute']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->do_else = false;
?>
								<?php echo '<script'; ?>
 type="text/javascript">
									$('#table_<?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
').append(create_attribute_row(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
, '<?php echo addslashes($_smarty_tpl->tpl_vars['attribute']->value['attribute_name']);?>
', <?php echo $_smarty_tpl->tpl_vars['attribute']->value['price'];?>
, <?php echo $_smarty_tpl->tpl_vars['attribute']->value['weight'];?>
));
									toggle(getE('table_' + <?php echo $_smarty_tpl->tpl_vars['attribute_group']->value['id_attribute_group'];?>
).parentNode, true);
								<?php echo '</script'; ?>
>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a default quantity, and reference, for each combination the generator will create for this product.'),$_smarty_tpl ) );?>
</div>
				<table class="table">
					<tbody>
						<tr>
							<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Quantity:'),$_smarty_tpl ) );?>
</td>
							<td><input type="text" name="quantity" value="0" /></td>
						</tr>
						<tr>
							<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Default Reference:'),$_smarty_tpl ) );?>
</td>
							<td><input type="text" name="reference" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_reference']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
						</tr>
					</tbody>
				</table>
				<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please click on "Generate these Combinations"'),$_smarty_tpl ) );?>
</div>
				<button type="submit" class="btn btn-default" name="generate"><i class="icon-random"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate these Combinations'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
</form>
<?php }
/* {block "leadin"} */
class Block_2094216536639e8c1092ca45_74656481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_2094216536639e8c1092ca45_74656481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
