<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:46:59
  from 'C:\xampp2\htdocs\coliving\modules\dashactivity\views\templates\hook\dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae943a4b2e9_11183044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd823fe8567c697db91f03504965b040f484f427b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\dashactivity\\views\\templates\\hook\\dashboard_zone_one.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae943a4b2e9_11183044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="dashactivity" class="widget allow_push">
	<div class="panel">
		<div class="panel-heading">
			<i class="icon-time"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Activity overview",'mod'=>"dashactivity"),$_smarty_tpl ) );?>

			<span class="panel-heading-action">
				<a class="list-toolbar-btn" href="#" onclick="toggleDashConfig('dashactivity'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Configure",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
">
					<i class="process-icon-configure"></i>
				</a>
				<a class="list-toolbar-btn" href="#" onclick="refreshDashboard('dashactivity'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Refresh",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
				</a>
			</span>
		</div>
		<section id="dashactivity_config" class="dash_config hide">
			<header><i class="icon-wrench"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Configuration",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</header>
			<?php echo $_smarty_tpl->tpl_vars['dashactivity_config_form']->value;?>

		</section>

		<section class="activity-section dash-live">
			<span class="title">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminStats"), ENT_QUOTES, 'UTF-8', true);?>
&module=statslive" target="_blank">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Online Visitors",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
				</a>
			</span>
			<span class="value">
				<span id="online_visitor"></span>
			</span>
			<div class="sub-title">
				<small class="text-muted">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"in the last %d minutes",'sprintf'=>intval($_smarty_tpl->tpl_vars['DASHACTIVITY_VISITOR_ONLINE']->value),'mod'=>"dashactivity"),$_smarty_tpl ) );?>

				</small>
			</div>
		</section>

		<section class="activity-section dash-live">
			<span class="title">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminCarts"), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Active Booking Carts",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
				</a>
			</span>
			<span class="value">
				<span id="active_shopping_cart"></span>
			</span>
			<div class="sub-title">
				<small class="text-muted">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"in the last %d minutes",'sprintf'=>intval($_smarty_tpl->tpl_vars['DASHACTIVITY_CART_ACTIVE']->value),'mod'=>"dashactivity"),$_smarty_tpl ) );?>

				</small>
			</div>
		</section>

		<section id="dash_pending" class="activity-section">
			<span class="title">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Currently Pending",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
			</span>
			<ul class="stats-list">
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminOrders"), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Bookings",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="pending_orders"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminOrderRefundRequests"), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Refunds",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="return_exchanges"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminCarts"), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Abandoned Carts",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="abandoned_cart"></span>
					</span>
				</li>
			</ul>
		</section>
	</div>

	<div class="panel">
		<div class="panel-heading">
			<i class="icon-time"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Activity overview",'mod'=>"dashactivity"),$_smarty_tpl ) );?>

			<span class="panel-heading-action">
				<a class="list-toolbar-btn" href="#" onclick="refreshDashboard('dashactivity'); return false;" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Refresh",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
">
					<i class="process-icon-refresh"></i>
				</a>
			</span>
		</div>
		<section id="dash_customers" class="activity-section">
			<span class="title">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Customers & Newsletters",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
			</span>
			<div class="sub-title">
				<small class="text-muted" id="customers-newsletters-subtitle"></small>
			</div>
			
			<ul class="stats-list">
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminCustomers"), ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"New Customers",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="new_customers"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminStats"), ENT_QUOTES, 'UTF-8', true);?>
&module=statsnewsletter"
							target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"New Subscriptions",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="new_registrations"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModules"), ENT_QUOTES, 'UTF-8', true);?>
&configure=blocknewsletter&module_name=blocknewsletter"
							target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Total Subscribers",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="total_suscribers"></span>
					</span>
				</li>
			</ul>
		</section>

		<section id="dash_traffic" class="activity-section">
			<span class="title">
				<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Traffic",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
			</span>
			<div class="sub-title">
				<small class="text-muted" id="traffic-subtitle"></small>
			</div>
			<ul class="stats-list">
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminStats"), ENT_QUOTES, 'UTF-8', true);?>
&module=statsforecast"
							target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Visits",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="visits"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminStats"), ENT_QUOTES, 'UTF-8', true);?>
&module=statsvisits"
							target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Unique Visitors",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>
					<span class="item-value">
						<span id="unique_visitors"></span>
					</span>
				</li>
				<li>
					<span class="item-label">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink("AdminModules"), ENT_QUOTES, 'UTF-8', true);?>
&configure=blocknewsletter&module_name=blocknewsletter"
							target="_blank">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Traffic Sources",'mod'=>"dashactivity"),$_smarty_tpl ) );?>
</span>
						</a>
					</span>

					<ul class="data_list_small" id="dash_traffic_source"></ul>
					<div id="dash_traffic_chart2" class="chart with-transitions">
						<svg></svg>
					</div>
				</li>
			</ul>
		</section>
	</div>
</section>
<?php echo '<script'; ?>
 type="text/javascript">
	date_subtitle = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_subtitle']->value, ENT_QUOTES, 'UTF-8', true);?>
";
	date_format = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['date_format']->value, ENT_QUOTES, 'UTF-8', true);?>
";
<?php echo '</script'; ?>
>
<?php }
}
