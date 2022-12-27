<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\occupancy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c13327933_09382439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd68890c2c203b5a8238e1470bd567697139d8e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\occupancy.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c13327933_09382439 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
    <input type="hidden" name="occupancy_loaded" value="1">
	<div id="product-occupancy" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Occupancy" />
		<h3 class="tab"> <i class="icon-users"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Occupancy'),$_smarty_tpl ) );?>
</h3>

        <div class="alert alert-info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set the occupancy of this room type. Enter how much adults and children this room type can accomodate.'),$_smarty_tpl ) );?>

			<br /><br />
			<b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note'),$_smarty_tpl ) );?>
 : <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'These occupancy settings will not affect "ROOM TYPE ADDITIONAL FACILITIES" any way. It will work separately.'),$_smarty_tpl ) );?>
</b>
        </div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="base_adults">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>''),$_smarty_tpl ) );?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Adults'),$_smarty_tpl ) );?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_adults" type="text" name="base_adults" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['adult'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="base_children">
                <span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>''),$_smarty_tpl ) );?>
">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Children'),$_smarty_tpl ) );?>

                </span>
			</label>
			<div class="col-sm-3">
				<input id="base_children" type="text" name="base_children" class="form-control" <?php if ((isset($_smarty_tpl->tpl_vars['roomTypeInfo']->value))) {?>value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['roomTypeInfo']->value['children'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php }?>>
			</div>
		</div>
        <input id="is_occupancy_submit" type="hidden" name="is_occupancy_submit" class="form-control" value="0">

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</a>
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkOccupancySubmit" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkOccupancySubmit"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
<?php }?>

<?php echo '<script'; ?>
>
    $(document).ready(function() {
        $(".checkOccupancySubmit").on("click", function() {
            $("#is_occupancy_submit").val(1);
            return true;
        });
    });
<?php echo '</script'; ?>
><?php }
}
