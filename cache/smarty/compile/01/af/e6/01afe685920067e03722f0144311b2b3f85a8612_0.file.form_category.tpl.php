<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:12
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\helpers\form\form_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c14a26118_77338402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01afe685920067e03722f0144311b2b3f85a8612' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\helpers\\form\\form_category.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c14a26118_77338402 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['categories']->value) && (isset($_smarty_tpl->tpl_vars['categories']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var inputName = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['input_name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var selectedCat = <?php echo intval(implode($_smarty_tpl->tpl_vars['categories']->value['selected_cat']));?>
;
		var selectedLabel = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['selected'],'\'');?>
';
		var home = '<?php echo addcslashes($_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'],'\'');?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var use_context = <?php if ((isset($_smarty_tpl->tpl_vars['categories']->value['use_context']))) {?>1<?php } else { ?>0<?php }?>;
	<?php echo '</script'; ?>
>
<div class="panel">
	<div class="category-filter panel-heading">
		<a href="#" id="collapse_all" class="btn btn-link"><i class="icon-collapse-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Collapse All'];?>
</a>
	 	<a href="#" id="expand_all" class="btn btn-link"><i class="icon-expand-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Expand All'];?>
</a> 
		<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
		<a href="#" id="check_all" class="btn btn-link"><i class="icon-check-sign"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Check All'];?>
</a>
		<a href="#" id="uncheck_all" class="btn btn-link"><i class="icon-check-empty"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Uncheck All'];?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_search']) {?>
			<span>
				<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['search'];?>
:&nbsp;
				<form method="post" id="filternameForm">
					<input type="text" name="search_cat" id="search_cat"/>
				</form>
			</span>
		<?php }?>
	</div>
	<?php $_smarty_tpl->_assignInScope('home_is_selected', false);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['selected_cat'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['cat']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value['id_category'] != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value['id_category'],$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<ul id="categories-treeview" class="filetree">
		<li id="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
" class="hasChildren">
			<span class="folder">
				<?php if ($_smarty_tpl->tpl_vars['categories']->value['top_category']->id != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
					<input type="<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>checkbox<?php } else { ?>radio<?php }?>"
							name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
"
							value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
"
							<?php if ($_smarty_tpl->tpl_vars['home_is_selected']->value) {?>checked="checked"<?php }?>
							onclick="clickOnCategoryBox($(this));"/>
						<span class="category_label"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'];?>
</span>
				<?php } else { ?>
					&nbsp;
				<?php }?>
			</span>
			<ul>
				<li><span class="placeholder">&nbsp;</span></li>
		  	</ul>
		</li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		searchCategory();
	<?php echo '</script'; ?>
>
	<?php }?>
</div>
<?php }
}
}
