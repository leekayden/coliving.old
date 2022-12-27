<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\booking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12c4aa46_58788526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a26a55d0b212b6596d770c49848a5781451a2f9' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\booking.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12c4aa46_58788526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ((isset($_smarty_tpl->tpl_vars['product']->value->id)) && (isset($_smarty_tpl->tpl_vars['htl_config']->value))) {?>
	<div id="product-configuration" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Booking"/>
		<h3 class="tab"> <i class="icon-info"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking Information'),$_smarty_tpl ) );?>
</h3>

		<div class="form-group">
			<div class="col-sm-1"></div>
			<label for="from_date" class="control-label col-sm-1 required">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking date starts from'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'From'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="col-sm-2">
				<input type="hidden" id="checkTabClick" value="0" name="checkTabClick">
				<input type="text" name="from_date" class="form-control" id="from_date" value="<?php echo $_smarty_tpl->tpl_vars['date_from']->value;?>
">
			</div>

			<label for="to_date" class="control-label col-sm-1 required">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booking date upto'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To'),$_smarty_tpl ) );?>
</span>
			</label>
			<div class="col-sm-2">
				<input type="text" name="to_date" class="form-control" id="to_date" value="<?php echo $_smarty_tpl->tpl_vars['date_to']->value;?>
">
			</div>
				<input type="hidden" id="product_id" name="id_product" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
">
				<input type="hidden" id="hotel_id" name="id_hotel" value="<?php echo $_smarty_tpl->tpl_vars['rooms_info']->value['id_hotel'];?>
">
				<!-- <input type="hidden" id="num_adults" name="num_adults" value="<?php echo $_smarty_tpl->tpl_vars['rooms_info']->value['adult'];?>
">
				<input type="hidden" id="num_children" name="num_children" value="<?php echo $_smarty_tpl->tpl_vars['rooms_info']->value['children'];?>
"> -->
		</div>

		<div class="form-group">
			<div class="col-sm-1"></div>
			<div class="hotel_date col-sm-6">
				<div class="row margin-leftrgt-0">
					<div class="col-sm-12 htl_date_header">
						<div class="col-sm-4">
							<p class="htl_date_disp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_from']->value,"%d");?>
</p>
							<span class="htl_month_disp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_from']->value,"%b");?>
</span>
						</div>
						<div class="col-sm-2">
							<p class="htl_date_disp">-</p>
						</div>
						<div class="col-sm-3">
							<p class="htl_date_disp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_to']->value,"%d");?>
</p>
							<span class="htl_month_disp"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date_to']->value,"%b");?>
</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-5 htl_room_data_cont">
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 htl_room_cat_data">
								<p class="room_cat_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Rooms'),$_smarty_tpl ) );?>
</p>
								<p class="room_cat_data"><?php echo $_smarty_tpl->tpl_vars['booking_data']->value['stats']['total_rooms'];?>
</p>
							</div>
						</div>
						<hr class="hr_style" />
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 htl_room_cat_data no_border">
								<p class="room_cat_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partially Available'),$_smarty_tpl ) );?>
</p>
								<p class="room_cat_data"><?php echo $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_part_avai'];?>
</p>
							</div>
						</div>
						<hr class="hr_style" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 htl_room_cat_data">
								<p class="room_cat_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Rooms'),$_smarty_tpl ) );?>
</p>
								<p class="room_cat_data"><?php echo $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_avail'];?>
</p>
							</div>
						</div>
						<hr class="hr_style" />
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 htl_room_cat_data no_border">
								<p class="room_cat_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Booked Rooms'),$_smarty_tpl ) );?>
</p>
								<p class="room_cat_data"><?php echo $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_booked'];?>
</p>
							</div>
						</div>
						<hr class="hr_style" />
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-12 htl_room_cat_data">
								<p class="room_cat_header"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unavailable Rooms'),$_smarty_tpl ) );?>
</p>
								<p class="room_cat_data"><?php echo $_smarty_tpl->tpl_vars['booking_data']->value['stats']['num_unavail'];?>
</p>
							</div>
						</div>
						<hr class="hr_style" />
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 indi_cont clearfix">
						<div class="color_indicate bg-green"></div>
						<span class="indi_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available Rooms'),$_smarty_tpl ) );?>
</span>
					</div>
					<div class="col-sm-6 indi_cont clearfix">
						<div class="color_indicate bg-yellow"></div>
						<span class="indi_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partially Available'),$_smarty_tpl ) );?>
</span>
					</div>
					<div class="col-sm-6 indi_cont clearfix">
						<div class="color_indicate bg-red"></div>
						<span class="indi_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unavailable Rooms'),$_smarty_tpl ) );?>
</span>
					</div>
					<div class="col-sm-6 indi_cont clearfix">
						<div class="color_indicate bg-gray"></div>
						<span class="indi_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hold For Maintenance'),$_smarty_tpl ) );?>
</span>
					</div>
				</div>
			</div>
		</div>

		<div class="panel-footer">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default">
				<i class="process-icon-cancel"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>

			</a>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled" id="stayBookingTab">
				<i class="process-icon-loading"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display Bookings'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>

	<div class="panel">
		<h3 class="tab"> <i class="icon-list"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LIST OF HOTEL ROOMS'),$_smarty_tpl ) );?>
</h3>
		<div class="form-group">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</th>
							<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message'),$_smarty_tpl ) );?>
</th>
						</tr>
					</thead>
					<tbody>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['booking_data']->value['rm_data'][0]['data'], 'b_val', false, 'b_key');
$_smarty_tpl->tpl_vars['b_val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['b_key']->value => $_smarty_tpl->tpl_vars['b_val']->value) {
$_smarty_tpl->tpl_vars['b_val']->do_else = false;
?>
							<?php if (($_smarty_tpl->tpl_vars['b_key']->value == 'available') && !empty($_smarty_tpl->tpl_vars['b_val']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b_val']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_num'];?>
</td>
										<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available'),$_smarty_tpl ) );?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_comment'];?>
</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } elseif (($_smarty_tpl->tpl_vars['b_key']->value == 'unavailable') && !empty($_smarty_tpl->tpl_vars['b_val']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b_val']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_num'];?>
</td>
										<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unavailable'),$_smarty_tpl ) );?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_comment'];?>
</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } elseif (($_smarty_tpl->tpl_vars['b_key']->value == 'booked') && !empty($_smarty_tpl->tpl_vars['b_val']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b_val']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_num'];?>
</td>
										<td>
											<?php if ($_smarty_tpl->tpl_vars['data_v']->value['detail'][0]['booking_status'] == 1) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alloted'),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['data_v']->value['detail'][0]['booking_status'] == 2) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-in'),$_smarty_tpl ) );?>

											<?php } elseif ($_smarty_tpl->tpl_vars['data_v']->value['detail'][0]['booking_status'] == 3) {?>
												<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checked-out'),$_smarty_tpl ) );?>

											<?php }?>
										</td>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['detail'][0]['comment'];?>
</td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php } elseif (($_smarty_tpl->tpl_vars['b_key']->value == 'partially_available') && !empty($_smarty_tpl->tpl_vars['b_val']->value)) {?>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['b_val']->value, 'data_v', false, 'data_k');
$_smarty_tpl->tpl_vars['data_v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_k']->value => $_smarty_tpl->tpl_vars['data_v']->value) {
$_smarty_tpl->tpl_vars['data_v']->do_else = false;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['data_v']->value['room_num'];?>
</td>
										<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partially Available'),$_smarty_tpl ) );?>
</td>
										<td><?php if ((isset($_smarty_tpl->tpl_vars['data_v']->value['comment']))) {
echo $_smarty_tpl->tpl_vars['data_v']->value['comment'];
}?></td>
									</tr>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function()
{
	var booking_calendar_data = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['booking_calendar_data']->value ));?>
';
	var check_css_condition_var = '<?php echo $_smarty_tpl->tpl_vars['check_css_condition_var']->value;?>
';
	var check_calendar_var = '<?php echo $_smarty_tpl->tpl_vars['check_calendar_var']->value;?>
';

	$("#from_date").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function(selectedDate) {
            var date_format = selectedDate.split("-");
            var selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(date_format[0], date_format[1] - 1, date_format[2])));
            selectedDate.setDate(selectedDate.getDate() + 1);
            $("#to_date").datepicker("option", "minDate", selectedDate);
        },
    });

    $("#to_date").datepicker({
        dateFormat: 'yy-mm-dd',
        beforeShow: function (input, instance) {
            var datefrom = $('#from_date').val();
            if (typeof datefrom != 'undefined' && datefrom != '') {
                var date_format = datefrom.split("-");
                var selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date(date_format[0], date_format[1] - 1, date_format[2])));
                selectedDate.setDate(selectedDate.getDate()+1);
                $("#to_date").datepicker("option", "minDate", selectedDate);
            } else {
                var date_format = new Date();
                var selectedDate = new Date($.datepicker.formatDate('yy-mm-dd', new Date()));
                selectedDate.setDate(selectedDate.getDate()+1);
                $("#to_date").datepicker("option", "minDate", selectedDate);
            }
        }
    });

	if (booking_calendar_data != 'null' && check_css_condition_var && check_calendar_var)
	{
		if (typeof(booking_calendar_data) != 'undefined')
	    {
	        var calendar_data = JSON.parse(booking_calendar_data);

	        $(".hotel_date").datepicker({
	            defaultDate: new Date(),
	            dateFormat: 'dd-mm-yy',
	            minDate: 0,
	            onChangeMonthYear: function(year, month)
	            {
	                if (check_calendar_var)
	                    $.ajax({
	                        url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'));?>
",
	                        data: {
	                            ajax:true,
	                            action:'ProductRoomsBookingDetailsOnMonthChange',
	                            month:month,
	                            year:year,
	                            id_product:$('#product_id').val(),
	                            id_hotel:$('#hotel_id').val(),
	                            num_adults:$('#num_adults').val(),
	                            num_children:$('#num_children').val(),
	                        },
	                        method:'POST',
	                        async: false,
	                        success: function (result)
	                        {
	                            calendar_data = JSON.parse(result);
	                        },
	                        error: function(XMLHttpRequest, textStatus, errorThrown)
	                        {
	                            alert(textStatus);
	                        }
	                    });
	            },
	            beforeShowDay: function(date)
	            {
	                var currentMonth = date.getMonth() + 1;
	                var currentDate = date.getDate();
	                if (currentMonth < 10)
	                {
	                    currentMonth = '0' + currentMonth;
	                }
	                if (currentDate < 10)
	                {
	                    currentDate = '0' + currentDate;
	                }

	                dmy = date.getFullYear() + "-" + currentMonth + "-" + currentDate;
	                var flag = 0;

	                $.each(calendar_data, function(key, value)
	                {
	                    if (key === dmy)
	                    {
	                        msg = 'Total Available : '+value.stats.num_avail+'&#013;Total Partial Available : '+value.stats.num_part_avai+'&#013;Total Unavailable : '+value.stats.num_unavail+'&#013;Total Booked : '+value.stats.num_booked;
	                        flag = 1;
	                        return 1;
	                    }
	                });
	                if (flag)
	                {
	                    return [true, check_css_condition_var, msg];
	                }
	                else
	                    return [true];
	            }
	        });

	        var count = $("."+check_css_condition_var).length;
	        //$("td."+check_css_condition_var).eq(0).css('border-radius','50% 0 0 50%');
	        $("td."+check_css_condition_var).eq(count-1).css('border-radius','0 50% 50% 0');
	    }
	    else
	    {
	    	$(".hotel_date").datepicker(
	        {
	            defaultDate: new Date(),
	            dateFormat: 'dd-mm-yy',
	            minDate: 0,
	        });
	    }
	}

    $("#stayBookingTab").on("click", function()
    {
    	$("#checkTabClick").val(1);
    });
});

<?php echo '</script'; ?>
><?php }
}
