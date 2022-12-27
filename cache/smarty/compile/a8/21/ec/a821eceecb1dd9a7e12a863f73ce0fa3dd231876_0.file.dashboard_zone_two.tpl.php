<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:46:59
  from 'C:\xampp2\htdocs\coliving\modules\dashoccupancy\views\templates\hook\dashboard_zone_two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae943d85a84_85963961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a821eceecb1dd9a7e12a863f73ce0fa3dd231876' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\dashoccupancy\\views\\templates\\hook\\dashboard_zone_two.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae943d85a84_85963961 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-5 col-lg-5">
	<section id="dashoccupancy" class="panel widget allow_push">
		<header class="panel-heading">
			<i class="icon-bar-chart"></i> 
			<span>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Occupancy','mod'=>'dashoccupancy'),$_smarty_tpl ) );?>

				&nbsp;<small class='text-muted' id='dashoccupancy_date_range'></small>
			</span>
			<span class="panel-heading-action">
				<a class="list-toolbar-btn" href="javascript:void(0);" title="Refresh" 
				onclick="refreshDashboard('dashoccupancy'); return false;">
					<i class="process-icon-refresh"></i>
				</a>
			</span>
		</header>
		<div class="row text-center avil-chart-head">
			<div class="col-md-4 col-xs-4">
				<div class="row">
					<div class="col-md-11 label-tooltip col-lg-11 avail-pie-label-container" style="background: #A569DF;"  data-toggle="tooltip" data-original-title="The total number of booked rooms among all the rooms.">
						<div class="">
							<p class="avail-pie-text">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Occupied','mod'=>'dashoccupancy'),$_smarty_tpl ) );?>

							</p>
							<div class="avail-pie-value-container">
								<p class="avail-pie-value" id="pie_occupied_text">
									<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['occupiedRooms']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['totalRooms']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4">
				<div class="row">
					<div class="col-md-11 col-lg-11 avail-pie-label-container label-tooltip" style="background: #56CE56;" data-toggle="tooltip" data-original-title="The total number of available rooms for booking.">
						<div class="">
							<p class="avail-pie-text">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available','mod'=>'dashoccupancy'),$_smarty_tpl ) );?>

							</p>
							<div class="avail-pie-value-container">
								<p class="avail-pie-value" id="pie_avail_text">
									<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['availableRooms']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4">
				<div class="row">
					<div class="col-md-11 col-lg-11 avail-pie-label-container label-tooltip" style="background: #FF655C;" data-toggle="tooltip" data-original-title="Rooms not available for booking.">
						<div class="">
							<p class="avail-pie-text">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inactive','mod'=>'dashoccupancy'),$_smarty_tpl ) );?>

							</p>
							<div class="avail-pie-value-container">
								<p class="avail-pie-value" id="pie_inactive_text">
									<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['inactiveRooms']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="avil-chart-svg" id="availablePieChart">
			<svg></svg>
		</div>
	</section>
</div>

<?php echo '<script'; ?>
 type='text/javascript'>
	date_occupancy_range = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_occupancy_range']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	date_occupancy_avail_format   = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_occupancy_avail_format']->value, ENT_QUOTES, 'UTF-8', true);?>
';
<?php echo '</script'; ?>
>
<?php }
}
