<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:09
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\countries\helpers\list\list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1132a2c3_87136679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3073b8ccd47d81881d0b3c5975dc187b1baac8' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\countries\\helpers\\list\\list_footer.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1132a2c3_87136679 (Smarty_Internal_Template $_smarty_tpl) {
?>			</table>
			<div class="row">
				<div class="col-lg-8">
				<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value) {?>
					<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value) > 1) {?>
						<div class="form-group bulk-actions">
							<div class="col-lg-6">
								<select id="select_submitBulk" name="select_submitBulk">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bulk_actions']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
										<?php if ($_smarty_tpl->tpl_vars['params']->value['text'] == 'divider') {?>
											<option value="" disabled="disabled" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
">--</option>
										<?php } else { ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['confirm']))) {?> data-confirm="<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</option>
										<?php }?>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>
							<div class="col-lg-6">
								<input type="submit" class="btn btn-default" name="submitBulk" id="submitBulk" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply'),$_smarty_tpl ) );?>
" />
							</div>
						</div>
					<?php } else { ?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bulk_actions']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
						<div class="form-group bulk-actions">
							<div class="col-lg-6">
							<?php if ($_smarty_tpl->tpl_vars['key']->value == 'affectzone') {?>
								<select id="zone_to_affect" name="zone_to_affect">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['zones']->value, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							<?php }?>
							</div>
							<div class="col-lg-6">
								<input type="submit" class="btn btn-default" name="submitBulk<?php echo $_smarty_tpl->tpl_vars['key']->value;
echo $_smarty_tpl->tpl_vars['table']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['params']->value['confirm']))) {?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
');"<?php }?> />
							</div>
						</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				<?php }?>
				</div>
				<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['list_total']->value > 20) {?>
				<div class="col-lg-4">
										<div class="pagination">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display'),$_smarty_tpl ) );?>
 
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['selected_pagination']->value;?>

							<i class="icon-caret-down"></i>
						</button>
						<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
							<li>
								<a href="javascript:void(0);" class="pagination-items-page" data-items="<?php echo intval($_smarty_tpl->tpl_vars['value']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
							</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						/ <?php echo $_smarty_tpl->tpl_vars['list_total']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result(s)'),$_smarty_tpl ) );?>

						<input type="hidden" id="pagination-items-page" name="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_pagination" value="<?php echo intval($_smarty_tpl->tpl_vars['selected_pagination']->value);?>
" />
					</div>
					<?php echo '<script'; ?>
 type="text/javascript">
						$('.pagination-items-page').on('click',function(e){
							e.preventDefault();
							$('#pagination-items-page').val($(this).data("items")).closest("form").submit();
						});
					<?php echo '</script'; ?>
>
					<ul class="pagination pull-right">
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>class="disabled"<?php }?>>
							<a href="javascript:void(0);" class="pagination-link" data-page="1">
								<i class="icon-double-angle-left"></i>
							</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>class="disabled"<?php }?>>
							<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">
								<i class="icon-angle-left"></i>
							</a>
						</li>
						<?php $_smarty_tpl->_assignInScope('p', 0);?>
						<?php
 while ($_smarty_tpl->tpl_vars['p']->value++ < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['p']->value < $_smarty_tpl->tpl_vars['page']->value-2) {?>
								<li class="disabled">
									<a href="javascript:void(0);">&hellip;</a>
								</li>
								<?php $_smarty_tpl->_assignInScope('p', $_smarty_tpl->tpl_vars['page']->value-3);?>
							<?php } elseif ($_smarty_tpl->tpl_vars['p']->value > $_smarty_tpl->tpl_vars['page']->value+2) {?>
								<li class="disabled">
									<a href="javascript:void(0);">&hellip;</a>
								</li>
								<?php $_smarty_tpl->_assignInScope('p', $_smarty_tpl->tpl_vars['total_pages']->value);?>
							<?php } else { ?>
								<li <?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?>>
									<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
								</li>
							<?php }?>
						<?php }?>

						<li <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="disabled"<?php }?>>
							<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">
								<i class="icon-angle-right"></i>
							</a>
						</li>
						<li <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="disabled"<?php }?>>
							<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
">
								<i class="icon-double-angle-right"></i>
							</a>
						</li>
					</ul>
					<?php echo '<script'; ?>
 type="text/javascript">
						$('.pagination-link').on('click',function(e){
							e.preventDefault();
							$('#submitFilter'+'<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
').val($(this).data("page")).closest("form").submit();
						});
					<?php echo '</script'; ?>
>
				</div>
				<?php }?>
			</div>
<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
</div>
</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value) > 1) {?>
			$('#submitBulk').click(function(){
				if ($('#select_submitBulk option:selected').data('confirm') !== undefined)
					return confirm($('#select_submitBulk option:selected').data('confirm'));
				else
					return true;
			});
			$('#select_submitBulk').change(function() {
				if ($(this).val() == 'affectzone')
					loadZones();
				else if (loaded)
					$('#zone_to_affect').fadeOut('slow');
			});
		<?php }?>
	});
	var loaded = false;
	function loadZones()
	{
		if (!loaded)
		{
			$.ajax({
				type: 'POST',
				headers: { "cache-control": "no-cache" },
				url: 'ajax.php?rand=' + new Date().getTime(),
				data: 'getZones=true&token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
',
				async : true,
				cache: false,
				dataType: 'json',
				success: function(data) {
					var html = $(data.data);
					html.hide();
					$('#select_submitBulk').after(html);
					html.fadeIn('slow');
				}
			});
			loaded = true;
		}
		else
		{
			$('#zone_to_affect').fadeIn('slow');
		}
	}
<?php echo '</script'; ?>
>
<?php }
}
