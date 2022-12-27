<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12dd3477_17894392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f80073c0b000b7645c8d616c89cfb6b585b12ef' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\features.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12dd3477_17894392 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
<div id="product-features" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Features" />
	<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Assign features to this room type'),$_smarty_tpl ) );?>
</h3>

	<div class="alert alert-info">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can specify a value for each relevant feature regarding this room type. Empty fields will not be displayed.'),$_smarty_tpl ) );?>
<br/>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can either create a specific value, or select among the existing pre-defined values you\'ve previously added.'),$_smarty_tpl ) );?>

	</div>

	<table class="table">
		<thead>
			<tr>
				<th></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature'),$_smarty_tpl ) );?>
</span></th>
				<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Feature Image'),$_smarty_tpl ) );?>
</span></th>
				<!-- <th><span class="title_box"><u><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or'),$_smarty_tpl ) );?>
</u> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customized value'),$_smarty_tpl ) );?>
</span></th> --><!-- by webkul -->
			</tr>
		</thead>

		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_features']->value, 'available_feature');
$_smarty_tpl->tpl_vars['available_feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['available_feature']->value) {
$_smarty_tpl->tpl_vars['available_feature']->do_else = false;
?>

			<tr>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_feature']->value['featureValues'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<td>
					<input type="checkbox" class="checkbox select_hotel_feature" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_check" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
" <?php if ($_smarty_tpl->tpl_vars['available_feature']->value['current_item'] == $_smarty_tpl->tpl_vars['value']->value['id_feature_value']) {?>checked="checked"<?php }?>/>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['available_feature']->value['name'];?>
</td>
				<td>
					<input type="hidden" id="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
">
					<img class="img img-responsive" width="15px" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
img/rf/<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
" title="Room image" />
				</td>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<!--<td>
				 <?php if (sizeof($_smarty_tpl->tpl_vars['available_feature']->value['featureValues'])) {?>
					<select id="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value"
						onchange="$('.custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_').val('');">
						<option value="0">---</option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_feature']->value['featureValues'], 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_feature_value'];?>
"<?php if ($_smarty_tpl->tpl_vars['available_feature']->value['current_item'] == $_smarty_tpl->tpl_vars['value']->value['id_feature_value']) {?>selected="selected"<?php }?> >
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['value'],40 ));?>

						</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				<?php } else { ?>
					<input type="hidden" name="feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value" value="0" />
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'N/A'),$_smarty_tpl ) );?>
 -
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addfeature_value&amp;id_feature=<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
"
					 	class="confirm_leave btn btn-link"><i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add pre-defined values first'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i></a>
					</span>
				<?php }?> --><!-- By Webkul -->
				</td>
				<!-- <td>

				<div class="row lang-0" style='display: none;'>
					<div class="col-lg-9">
						<textarea class="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_ALL textarea-autosize"	name="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_ALL"
								cols="40" style='background-color:#CCF'	rows="1" onkeyup="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>$('.custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').val($(this).val());<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>" ><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['available_feature']->value['val'][1]['value'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>

					</div>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
						<div class="col-lg-3">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ALL'),$_smarty_tpl ) );?>

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
										<a href="javascript:void(0);" onclick="restore_lng($(this),<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
</a>
									</li>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</ul>
						</div>
					<?php }?>
				</div>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
					<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="row translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
						<div class="col-lg-9">
						<?php }?>
						<textarea
								class="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
 textarea-autosize"
								name="custom_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
								cols="40"
								rows="1"
								onkeyup="if (isArrowKey(event)) return ;$('#feature_<?php echo $_smarty_tpl->tpl_vars['available_feature']->value['id_feature'];?>
_value').val(0);" ><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['available_feature']->value['val'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]['value'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
</textarea>

					<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
						</div>
						<div class="col-lg-3">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0);" onclick="all_languages($(this));"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ALL'),$_smarty_tpl ) );?>
</a></li>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
								<li>
									<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
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
				</td> --><!-- By Webkul -->

			</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['available_feature']->do_else) {
?>
			<tr>
				<td colspan="3" style="text-align:center;"><i class="icon-warning-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No features have been defined'),$_smarty_tpl ) );?>
</td>
			</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>

	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminFeatures'), ENT_QUOTES, 'UTF-8', true);?>
&amp;addfeature" class="btn btn-link confirm_leave button">
		<i class="icon-plus-sign"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new feature'),$_smarty_tpl ) );?>
 <i class="icon-external-link-sign"></i>
	</a>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	if (tabs_manager.allow_hide_other_languages)
		hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['default_form_language']->value;?>
);

	$(".textarea-autosize").autosize();

	function all_languages(pos)
	{

<?php if ((isset($_smarty_tpl->tpl_vars['languages']->value)) && is_array($_smarty_tpl->tpl_vars['languages']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			pos.parents('td').find('.lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').addClass('nolang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').removeClass('lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
');
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
		pos.parents('td').find('.translatable-field').hide();
		pos.parents('td').find('.lang-0').show();

	}

	function restore_lng(pos,i)
	{

<?php if ((isset($_smarty_tpl->tpl_vars['languages']->value)) && is_array($_smarty_tpl->tpl_vars['languages']->value)) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, 'k');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			pos.parents('td').find('.nolang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').addClass('lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').removeClass('nolang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
');
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

		pos.parents('td').find('.lang-0').hide();
		hideOtherLanguage(i);
	}
<?php echo '</script'; ?>
>


<?php }
}
}
