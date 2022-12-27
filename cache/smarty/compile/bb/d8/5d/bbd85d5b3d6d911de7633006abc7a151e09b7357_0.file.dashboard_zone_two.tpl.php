<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:46:59
  from 'C:\xampp2\htdocs\coliving\modules\dashavailability\views\templates\hook\dashboard_zone_two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae943e9fbe5_77459408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd85d5b3d6d911de7633006abc7a151e09b7357' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\dashavailability\\views\\templates\\hook\\dashboard_zone_two.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae943e9fbe5_77459408 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-7 col-lg-7">
	<section id="dashavailability" class="panel widget allow_push">
		<header class="panel-heading">
			<i class="icon-bar-chart"></i> 
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Availability",'mod'=>"dashavailability"),$_smarty_tpl ) );?>

			<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="javascript:void(0);" title="Refresh" onclick="fetchAvailablityBarData(5)" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Refresh",'mod'=>"dashavailability"),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
				</a>
			</span>
		</header>
		<div class="row avil-chart-head">
				<div class="col-xs-5 col-lg-6">
					<div class="pull-left">
						<button class="avail-bar-date datepicker" type="button" id="avail_datepicker"
						onclick="availDatePicker()">
							<i class="icon-calendar-empty"></i>
							<span class="hidden-xs bar-date">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"From",'mod'=>"dashavailability"),$_smarty_tpl ) );?>

								<strong><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['dateFromBar']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</strong>
							</span>
							<i class="icon-caret-down"></i>
						</button>
						<input type="text" id="bardate" name="datepickerFrom" class="datepicker">
					</div>
				</div>
				<div class="col-xs-2 col-md-2  col-lg-2 pull-left">
					<button id='avail_bar_day_5' class="avail-bar-btn bar-btn-active" onclick="fetchAvailablityBarData(5)">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"5Days",'mod'=>"dashavailability"),$_smarty_tpl ) );?>

					</button>
				</div>
				<div class="col-xs-2 col-md-2  col-lg-2 pull-left">
					<button id='avail_bar_day_15' class="avail-bar-btn bar-btn-active" onclick="fetchAvailablityBarData(15)">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"15Days",'mod'=>"dashavailability"),$_smarty_tpl ) );?>

					</button>
				</div>
				<div class="col-xs-2 col-md-2  col-lg-2 pull-left">
					<button id='avail_bar_day_30' class="avail-bar-btn" onclick="fetchAvailablityBarData(30)">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"30Days",'mod'=>"dashavailability"),$_smarty_tpl ) );?>

					</button>
				</div>
		</div>
		<div class="avil-chart-svg" id="availableBarChart">
			<svg></svg>
		</div>
	</section>
</div><?php }
}
