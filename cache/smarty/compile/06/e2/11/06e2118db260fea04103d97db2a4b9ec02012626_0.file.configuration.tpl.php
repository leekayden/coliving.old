<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12d50712_95733811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e2118db260fea04103d97db2a4b9ec02012626' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\configuration.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12d50712_95733811 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['product']->value->id))) {?>
	<div id="product-configuration" class="panel product-tab">
		<input type="hidden" name="submitted_tabs[]" value="Configuration" />
		<h3 class="tab"> <i class="icon-AdminAdmin"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration'),$_smarty_tpl ) );?>
</h3>

		<input type="hidden" id="checkConfSubmit" value="0" name="checkConfSubmit">

		<div class="from-group table-responsive-row clearfix">
			<table class="table hotel-room">
				<thead>
					<tr class="nodrag nodrop">
						<th class="col-sm-2 center">
							<label class="control-label">
								<span class="label-tooltip" data-toggle="tooltip" title="" data-original-title="Enter the name of the Room for ex. A-101. Invalid characters <>;=#{}"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Room No.'),$_smarty_tpl ) );?>
</span>
							</label>
						</th>
						<th class="col-sm-2 center">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Floor'),$_smarty_tpl ) );?>
</span>
						</th>
						<th class="col-sm-2">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Status'),$_smarty_tpl ) );?>
</span>
						</th>
						<th class="col-sm-6 center">
							<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Extra Information'),$_smarty_tpl ) );?>
</span>
						</th>
					</tr>
					<?php if ((isset($_smarty_tpl->tpl_vars['htl_room_info']->value)) && $_smarty_tpl->tpl_vars['htl_room_info']->value) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['htl_room_info']->value, 'info', false, 'key');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
							<tr class="room_data_values" id="row_index<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" data-rowKey="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
								<td class="col-sm-1 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['room_num'];?>
" name="room_num[]">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['floor'];?>
" name="room_floor[]">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="room_status[]">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_status']->value, 'room_stauts');
$_smarty_tpl->tpl_vars['room_stauts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];
$_prefixVariable10 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['info']->value['id_status'] == $_prefixVariable10) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td class="center col-sm-6">
									<a class="btn btn-default deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status'] != $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {?>style="display: none;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['info']->value['id_status'] != $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Dates'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Dates'),$_smarty_tpl ) );
}?>
									</a>
									<input type="text" class="form-control room_comment" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['comment'];?>
" name="room_comment[]" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status'] == $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {?>style="display: none;"<?php }?>>
									<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON[]" <?php if ($_smarty_tpl->tpl_vars['info']->value['id_status'] == $_smarty_tpl->tpl_vars['rm_status']->value['STATUS_TEMPORARY_INACTIVE']['id']) {?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['disabled_dates_json'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
								</td>
								<td class="center col-sm-1">
									<a href="#" class="rm_htl_room btn btn-default" data-id-htl-info="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"><i class="icon-trash"></i></a>
									<input type="hidden" name="id_room_info[]" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
">
								</td>
							</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<?php
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 1+1 - (0) : 0-(1)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 0, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration === 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;?>
							<tr class="room_data_values" id="row_index<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-rowKey="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
								<td class="col-sm-2 center">
									<input class="form-control" type="text" name="room_num[]">
								</td>
								<td class="col-sm-2 center">
									<input class="form-control" type="text" name="room_floor[]">
								</td>
								<td class="col-sm-2 center">
									<select class="form-control room_status" name="room_status[]">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rm_status']->value, 'room_stauts');
$_smarty_tpl->tpl_vars['room_stauts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['room_stauts']->value) {
$_smarty_tpl->tpl_vars['room_stauts']->do_else = false;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['room_stauts']->value['status'];?>
</option>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</select>
								</td>
								<td class="center col-sm-6">
									<a class="deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" style="display: none;">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'add Dates'),$_smarty_tpl ) );?>

									</a>
									<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON" value="0">
									<input type="text" class="form-control room_comment" name="room_comment[]">
								</td>
								<?php if ($_smarty_tpl->tpl_vars['k']->value == 1) {?>
									<td class="center col-sm-1">
										<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>
									</td>
								<?php }?>
							</tr>
						<?php }
}
?>
					<?php }?>
				</thead>
			</table>
			<div class="form-group">
				<div class="col-sm-12">
					<button id="add-more-rooms-button" class="btn btn-default" type="button" data-size="s" data-style="expand-right">
						<i class="icon-folder-open"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add More Rooms'),$_smarty_tpl ) );?>

					</button>
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
			<button type="submit" name="submitAddproduct" class="btn btn-default pull-right checkConfigurationClick" disabled="disabled">
				<i class="process-icon-loading"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>

			</button>
			<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right checkConfigurationClick"  disabled="disabled">
				<i class="process-icon-loading"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>

			</button>
		</div>
	</div>
<?php }?>

<div class="modal fade" id="deactiveDatesModal" tabindex="-1" role="dialog" aria-labelledby="deactiveDatesLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close margin-right-10" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"><i class="icon-calendar"></i>&nbsp; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disable dates'),$_smarty_tpl ) );?>
</h4>
			</div>
			<div class="modal-body">
				<div class="from-group table-responsive-row clearfix">
					<table class="table room-disable-dates">
						<thead>
							<tr class="nodrag nodrop">
								<th class="col-sm-1 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date From'),$_smarty_tpl ) );?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date To'),$_smarty_tpl ) );?>
</span>
								</th>
								<th class="col-sm-2 center">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reason'),$_smarty_tpl ) );?>
</span>
								</th>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<div class="form-group">
						<div class="col-sm-12">
							<a href="#" class="add_more_room_disable_dates btn btn-default"><i class="icon icon-plus"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Add More"),$_smarty_tpl ) );?>
</a>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default deactiveDatesModalSubmit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Done'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
</div>

<style>
	.deactiveDatesModal {
		cursor: pointer;
	}

	.hotel-room {
		border: 1px solid #f2f2f2;
		margin-top: 10px;
	}
</style>


<?php echo '<script'; ?>
>
	var prod_link = "<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
";
	var rm_status = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['rm_status']->value ));?>
;
	var currentRoomRow = 0;
	var datesMissing = "<?php echo $_smarty_tpl->tpl_vars['datesMissing']->value;?>
";
	var datesOverlapping = "<?php echo $_smarty_tpl->tpl_vars['datesOverlapping']->value;?>
";

	$(document).ready(function() {
		// Disable dates data filling when model open
		$('#deactiveDatesModal').on('show.bs.modal', function (e) {
			$('.disabledDatesTr').remove();

			var modelTriggerElement = $(e.relatedTarget);
			var html = '';

			var rowKey = modelTriggerElement.closest(".room_data_values").attr('data-rowKey');
			currentRoomRow = rowKey;
			var disableDatesJSON = modelTriggerElement.siblings('input.disableDatesJSON').val();

			if (disableDatesJSON) {
				var disableDatesObj = JSON.parse(disableDatesJSON);
				$.each(disableDatesObj, function(disKey, disabledRange) {
					html += '<tr class="disabledDatesTr">';
						html += '<td class="col-sm-2 center">';
							html += '<input class="disabled_date_from form-control" type="text" value="'+disabledRange.date_from+'" name="disabled_date_from'+rowKey+'[]">';
						html += '</td>';
						html += '<td class="col-sm-2 center">';
							html += '<input class="disabled_date_to form-control" type="text" value="'+disabledRange.date_to+'" name="disabled_date_to'+rowKey+'[]">';
						html += '<td class="center col-sm-6">';
							html += '<input type="text" class="form-control room_disable_reason" value="'+disabledRange.reason+'" name="room_disable_reason'+rowKey+'[]">';
						html += '</td>';
						html += '<td class="center col-sm-1">';
							html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
						html += '</td>';
					html += '</tr>';
				});
			} else {
				html += '<tr class="disabledDatesTr">';
					html += '<td class="col-sm-2 center">';
						html += '<input class="disabled_date_from form-control" type="text" value="" name="disabled_date_from'+rowKey+'[]">';
					html += '</td>';
					html += '<td class="col-sm-2 center">';
						html += '<input class="disabled_date_to form-control" type="text" value="" name="disabled_date_to'+rowKey+'[]">';
					html += '<td class="center col-sm-6">';
						html += '<input type="text" class="form-control room_disable_reason" value="" name="room_disable_reason'+rowKey+'[]">';
					html += '</td>';
					html += '<td class="center col-sm-1">';
						html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
					html += '</td>';
				html += '</tr>';
			}

			$('.room-disable-dates').append(html);
		});

		// Disable dates data save when model open
		$(document).on('click', '.deactiveDatesModalSubmit', function() {
			var disableDates = new Array();
			var error = false;
			$.each($('.disabled_date_from'), function(key, val){
				var date_from =  $(this).val();
				var date_to = $('.disabled_date_to:eq('+key+')').val();
				if (date_from.trim() && date_to.trim()) {
					var obj = {
						'date_from': $(this).val(),
						'date_to': $('.disabled_date_to:eq('+key+')').val(),
						'reason': $('.room_disable_reason:eq('+key+')').val(),
					};
					disableDates.push(obj);
				} else {
					if (!(!date_from.trim() && !date_to.trim())) {
						error = datesMissing;
					}
				}

				$.each(disableDates, function(disKey, disabledRange) {
					if (key != disKey) {
                        if (((date_from < disabledRange.date_from) && (date_to <= disabledRange.date_from)) || ((date_from > disabledRange.date_from) && (date_from >= disabledRange.date_to))) {
                        } else {
                        	error = datesOverlapping;
                        }
                    }
				});
			});

			if (error) {
				alert(error);
				return false;
			} else {
				$('#deactiveDatesModal').modal('hide');
				$("#row_index"+currentRoomRow).find('.disableDatesJSON').val(JSON.stringify(disableDates));
				return true;
			}
		});

		// Add new room detail
		$('#add-more-rooms-button').on('click',function() {
			var lengthRooms = $('.room_data_values').length;
			html = '<tr class="room_data_values" id="row_index'+lengthRooms+'" data-rowKey="'+lengthRooms+'">';
				html += '<td class="col-sm-1 center">';
					html += '<input class="form-control" type="text" name="room_num[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<input class="form-control" type="text" name="room_floor[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<select class="form-control room_status" name="room_status[]">';
						$.each(rm_status, function(key, value)
						{
							html += '<option value="'+value.id+'">'+value.status+'</option>';
						});
					html += '</select>';
				html += '</td>';
				html += '<td class="center col-sm-6">';
					html += '<a class="btn btn-default deactiveDatesModal" data-toggle="modal" data-target="#deactiveDatesModal" style="display: none;">';
						html += "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Dates'),$_smarty_tpl ) );?>
";
					html += '</a>';
					html += '<input type="hidden" class="form-control disableDatesJSON" name="disableDatesJSON[]" value="0">';
					html += '<input type="text" class="form-control room_comment" name="room_comment[]">';
				html += '</td>';
				html += '<td class="center col-sm-1">';
					html += '<a href="#" class="remove-rooms-button btn btn-default"><i class="icon-trash"></i></a>';
				html += '</td>';
			html += '</tr>';

			$('.hotel-room').append(html);
		});

		// delete room
		$('.rm_htl_room').on('click',function(e) {
			e.preventDefault();
			var $current = $(this);
			var id_htl_info = $(this).attr('data-id-htl-info');
			$.ajax({
	            url: prod_link,
	            type: 'POST',
	            dataType: 'text',
	            data: {
	            	ajax:true,
	            	action:'deleteHotelRoom',
	            	id: id_htl_info,
	            },
	            success: function (result) {
	            	if (parseInt(result) == 1) {
		               	showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Removed successfully'),$_smarty_tpl ) );?>
");
						$current.closest(".room_data_values").remove();
	            	} else {
						showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred'),$_smarty_tpl ) );?>
");
					}
	            },
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Some error occurred'),$_smarty_tpl ) );?>
");
				}
	        });
		});

		$(".checkConfigurationClick").on("click", function() {
			$("#checkConfSubmit").val(1);
			return true;
		});

		// New Room Row Remove
		$(document).on('click','.remove-rooms-button',function(e) {
			e.preventDefault();
			$(this).closest(".room_data_values").remove();
		});

		// on changing the room status as disabled for some date range.....
		$(document).on("change", ".room_status", function(){
			var status_val = $(this).val();
			if (status_val == rm_status.STATUS_TEMPORARY_INACTIVE.id) {
				$(this).closest('.room_data_values').find('.room_comment, .deactiveDatesModal').toggle();
			} else {
				$(this).closest('.room_data_values').find('.room_comment').show();
				$(this).closest('.room_data_values').find('.deactiveDatesModal').hide();
			}
		});

		$(document).on("focus", ".disabled_date_from, .disabled_date_to", function () {
			$(".disabled_date_from").datepicker({
		        showOtherMonths: true,
		        dateFormat: 'yy-mm-dd',
		        minDate: 0,
		        //for calender Css
		        onSelect: function(selectedDate) {
		            $(this).closest('tr').find(".disabled_date_to").datepicker("option", "minDate", selectedDate).val('');
		        },
		    });
		    $(".disabled_date_to").datepicker({
		        showOtherMonths: true,
		        dateFormat: 'yy-mm-dd',
		        minDate: 0,
		    });
		});

		$('.add_more_room_disable_dates').on('click',function() {
	    	var rowKey = $(this).closest(".room_data_values").attr('data-rowKey');
			html = '<tr class="disabledDatesTr">';
				html += '<td class="col-sm-2 center">';
					html += '<input class="disabled_date_from form-control" type="text" value="" name="disabled_date_from'+rowKey+'[]">';
				html += '</td>';
				html += '<td class="col-sm-2 center">';
					html += '<input class="disabled_date_to form-control" type="text" value="" name="disabled_date_to'+rowKey+'[]">';
				html += '<td class="center col-sm-6">';
					html += '<input type="text" class="form-control room_disable_reason" value="" name="room_disable_reason'+rowKey+'[]">';
				html += '</td>';
				html += '<td class="center col-sm-1">';
					html += '<a href="#" class="remove-disable-dates-button btn btn-default"><i class="icon-trash"></i></a>';
				html += '</td>';
			html += '</tr>';

			$('.room-disable-dates').append(html);
		});

		$(document).on('click','.remove-disable-dates-button',function(e) {
			e.preventDefault();
			$(this).closest('tr').remove();
		});
	});

<?php echo '</script'; ?>
><?php }
}
