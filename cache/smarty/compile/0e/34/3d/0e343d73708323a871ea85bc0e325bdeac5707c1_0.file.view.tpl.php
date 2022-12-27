<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:47:01
  from 'C:\xampp2\htdocs\coliving\eden-admin\themes\default\template\controllers\dashboard\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae94537fc39_99632748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e343d73708323a871ea85bc0e325bdeac5707c1' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\eden-admin\\themes\\default\\template\\controllers\\dashboard\\helpers\\view\\view.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae94537fc39_99632748 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var dashboard_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminDashboard');?>
';
	var adminstats_ajax_url = '<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminStats');?>
';
	var no_results_translation = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No result','js'=>1),$_smarty_tpl ) );?>
';
	var dashboard_use_push = '<?php echo intval($_smarty_tpl->tpl_vars['dashboard_use_push']->value);?>
';
	var read_more = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','js'=>1),$_smarty_tpl ) );?>
';
<?php echo '</script'; ?>
>

<div id="dashboard">
	<?php echo $_smarty_tpl->tpl_vars['hookDashboardTop']->value;?>

	<div class="row">
		<div class="col-lg-12">
<?php if ($_smarty_tpl->tpl_vars['warning']->value) {?>
			<div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</div>
<?php }?>
			<div id="calendar" class="panel">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" id="calendar_form" name="calendar_form" class="form-inline">
					<div class="btn-group">
						<button type="button" name="submitDateDay" class="btn btn-default submitDateDay<?php if ((!(isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) || !$_smarty_tpl->tpl_vars['preselect_date_range']->value) || ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'day')) {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateMonth" class="btn btn-default submitDateMonth <?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'month') {?>active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateYear" class="btn btn-default submitDateYear<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>

						</button>
						<button type="button" name="submitDateDayPrev" class="btn btn-default submitDateDayPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-day') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateMonthPrev" class="btn btn-default submitDateMonthPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-month') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month'),$_smarty_tpl ) );?>
-1
						</button>
						<button type="button" name="submitDateYearPrev" class="btn btn-default submitDateYearPrev<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value)) && $_smarty_tpl->tpl_vars['preselect_date_range']->value == 'prev-year') {?> active<?php }?>">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year'),$_smarty_tpl ) );?>
-1
						</button>
					</div>
					<input type="hidden" name="datepickerFrom" id="datepickerFrom" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
					<input type="hidden" name="datepickerTo" id="datepickerTo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="form-control">
					<input type="hidden" name="preselectDateRange" id="preselectDateRange" value="<?php if ((isset($_smarty_tpl->tpl_vars['preselect_date_range']->value))) {
echo $_smarty_tpl->tpl_vars['preselect_date_range']->value;
}?>" class="form-control">
					<div class="form-group pull-right">
						<button id="datepickerExpand" class="btn btn-default" type="button">
							<i class="icon-calendar-empty"></i>
							<span class="hidden-xs">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-from-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_from']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>

								<strong class="text-info" id="datepicker-to-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_to']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
								<strong class="text-info" id="datepicker-diff-info"></strong>
							</span>
							<i class="icon-caret-down"></i>
						</button>
						<?php echo $_smarty_tpl->tpl_vars['calendar']->value;?>

					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-lg-3" id="hookDashboardZoneOne">
			<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneOne']->value;?>

		</div>
		<div class="col-md-8 col-lg-9" id="hookDashboardZoneTwo">
			<div class='row'>
				<?php echo $_smarty_tpl->tpl_vars['hookDashboardZoneTwo']->value;?>

			</div>
		</div>
	</div>
</div>
<?php }
}
