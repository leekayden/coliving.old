<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:08
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\access\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c106e9994_45086695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9f8a4a68a4268e2f98bf2eb6253279b88597580' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\access\\helpers\\form\\form.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:toolbar.tpl' => 1,
  ),
),false)) {
function content_639e8c106e9994_45086695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function() {

		var id_tab_parentmodule = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_parentmodule']->value);?>
;
		var id_tab_module = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_module']->value);?>
;

		$('tr.child-'+id_tab_parentmodule+' > td > input.view.'+id_tab_module).change( function () {

			if (!$(this).prop('checked'))
			{
				$('#table_module_2 thead th:eq(1) input').trigger('click');
				if ($('#table_module_2 thead th:eq(1) input').prop('checked'))
					$('#table_module_2 thead th:eq(1) input').trigger('click');
			}
		});

		$('tr.child-'+id_tab_parentmodule+' > td > input.edit.'+id_tab_module).change( function () {

			if (!$(this).prop('checked'))
			{
				$('#table_module_2 thead th:eq(2) input').trigger('click');
				if ($('#table_module_2 thead th:eq(2) input').prop('checked'))
					$('#table_module_2 thead th:eq(2) input').trigger('click');
			}
		});

		$('div.productTabs').find('a').each(function() {
			$(this).attr('href', '#');
		});

		$('div.productTabs a').click(function() {
			var id = $(this).attr('id');
			$('.nav-profile').removeClass('selected');
			$(this).addClass('selected active');
			$(this).siblings().removeClass('active');
			$('.tab-profile').hide()
			$('.'+id).show();
		});

		$('.ajaxPower').change(function(){
			var tout = $(this).data('rel').split('||');
			var id_tab = tout[0];
			var id_profile = tout[1];
			var perm = tout[2];
			var enabled = $(this).is(':checked')? 1 : 0;
			var tabsize = tout[3];
			var tabnumber = tout[4];
			var table = 'table#table_'+id_profile;

			if (perm == 'all' && $(this).parent().parent().hasClass('parent'))
			{
				if (enabled)
					$(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').attr('checked', 'checked');
				else
					$(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').removeAttr('checked');
				$.ajax({
					url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
					cache: false,
					data : {
						ajaxMode : '1',
						id_tab: id_tab,
						id_profile: id_profile,
						perm: perm,
						enabled: enabled,
						submitAddAccess: '1',
						addFromParent: '1',
						action: 'updateAccess',
						ajax: '1',
						token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
					},
					success : function(res,textStatus,jqXHR)
					{
						try {
							if (res == 'ok')
								showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful'),$_smarty_tpl ) );?>
");
							else
								showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error'),$_smarty_tpl ) );?>
");
						} catch(e) {
							jAlert('Technical error');
						}
					}
				});
			}
			perfect_access_js_gestion(this, perm, id_tab, tabsize, tabnumber, table);

			$.ajax({
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
				cache: false,
				data : {
					ajaxMode : '1',
					id_tab: id_tab,
					id_profile: id_profile,
					perm: perm,
					enabled: enabled,
					submitAddAccess: '1',
					action: 'updateAccess',
					ajax: '1',
					token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
				},
				success : function(res,textStatus,jqXHR)
				{
					try
					{
						if (res == 'ok')
							showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful'),$_smarty_tpl ) );?>
");
						else
							showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error'),$_smarty_tpl ) );?>
");
					}
					catch(e)
					{
						jAlert('Technical error');
					}
				}
			});
		});

		$(".changeModuleAccess").change(function(){
			var tout = $(this).data('rel').split('||');
			var id_module = tout[0];
			var perm = tout[1];
			var id_profile = tout[2];
			var enabled = $(this).is(':checked') ? 1 : 0;
			var enabled_attr = $(this).is(':checked') ? true : false;
			var table = 'table#table_module_'+id_profile;

			if (id_module == -1)
				$(table+' .ajax-ma-'+perm).each(function(key, value) {
					$(this).attr("checked", enabled_attr);
				});
			else if (!enabled)
				$(table+' #ajax-ma-'+perm+'-master').each(function(key, value) {
					$(this).attr("checked", enabled_attr);
				});

			$.ajax({
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
				cache: false,
				data : {
					ajaxMode: '1',
					id_module: id_module,
					perm: perm,
					enabled: enabled,
					id_profile: id_profile,
					changeModuleAccess: '1',
					action: 'updateModuleAccess',
					ajax: '1',
					token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
				},
				success : function(res,textStatus,jqXHR)
				{
					try
					{
						if (res == 'ok')
							showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful'),$_smarty_tpl ) );?>
");
						else
							showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error'),$_smarty_tpl ) );?>
");
					}
					catch(e)
					{
						jAlert('Technical error');
					}
				}
			});
		});

		// Change Accesses of hotels
		$(".changeHotelAccess").change(function(){
			var tout = $(this).data('rel').split('||');
			var id_hotel = tout[0];
			var id_profile = tout[2];
			var enabled = $(this).is(':checked') ? 1 : 0;
			var enabled_attr = $(this).is(':checked') ? true : false;
			var table = 'table#table_hotel_'+id_profile;

			if (id_hotel == -1) {
				$(table+' .ajax-htl-all').attr("checked", enabled_attr);
			}

			$.ajax({
				url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
				cache: false,
				data : {
					ajaxMode: '1',
					id_hotel: id_hotel,
					enabled: enabled,
					id_profile: id_profile,
					submitAddHotelAccess: '1',
					action: 'updateHotelAccess',
					ajax: '1',
					token: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0], array( array('tab'=>'AdminAccess'),$_smarty_tpl ) );?>
'
				},
				success : function(res,textStatus,jqXHR)
				{
					try {
						if (res == 'ok') {
							showSuccessMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update successful'),$_smarty_tpl ) );?>
");
						} else {
							showErrorMessage("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update error'),$_smarty_tpl ) );?>
");
						}
					}
					catch(e)
					{
						jAlert('Technical error');
					}
				}
			});
		});

	});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
	<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1459050585639e8c1067e750_48552204', "leadin");
?>
</div>
<?php }?>
<div class="row">
	<div class="productTabs col-lg-2">
		<div class="tab list-group">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
			<a class="list-group-item nav-profile <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] == $_smarty_tpl->tpl_vars['current_profile']->value) {?>active<?php }?>" id="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_profile=<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</a>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
	<form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" class="defaultForm form-horizontal col-lg-10" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
=1&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post" enctype="multipart/form-data">
		<?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
			<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
		<?php }?>
		<?php $_smarty_tpl->_assignInScope('tabsize', count($_smarty_tpl->tpl_vars['tabs']->value));?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
			<?php if ($_smarty_tpl->tpl_vars['tab']->value['id_tab'] > $_smarty_tpl->tpl_vars['tabsize']->value) {?>
				<?php $_smarty_tpl->_assignInScope('tabsize', $_smarty_tpl->tpl_vars['tab']->value['id_tab']);?>
			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profiles']->value, 'profile');
$_smarty_tpl->tpl_vars['profile']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->do_else = false;
?>
		<div class="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
 tab-profile" style="display:<?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['current_profile']->value) {?>none<?php }?>">
			<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile'] != $_smarty_tpl->tpl_vars['admin_profile']->value) {?>
				<div class="col-lg-6">
					<?php if ((isset($_smarty_tpl->tpl_vars['hotels']->value)) && $_smarty_tpl->tpl_vars['hotels']->value) {?>
						<div class="panel">
							<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel Permissions'),$_smarty_tpl ) );?>
</h3>
							<table class="table" id="table_hotel_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
								<thead>
									<tr>
										<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hotel'),$_smarty_tpl ) );?>
</th>
										<th>
											<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeHotelAccess" data-rel="-1||all||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
											<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>

										</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!count($_smarty_tpl->tpl_vars['hotels']->value)) {?>
										<tr>
											<td colspan="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No menu'),$_smarty_tpl ) );?>
</td>
										</tr>
									<?php } else { ?>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotels']->value, 'hotelInfo');
$_smarty_tpl->tpl_vars['hotelInfo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hotelInfo']->value) {
$_smarty_tpl->tpl_vars['hotelInfo']->do_else = false;
?>
											<?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
											<tr class="parentTr">
												<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['hotelInfo']->value['hotel_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
												<td>
													<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="<?php echo $_smarty_tpl->tpl_vars['hotelInfo']->value['id'];?>
||specific||<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['id_profile'], ENT_QUOTES, 'UTF-8', true);?>
||all" class="changeHotelAccess ajax-htl-all"<?php } else { ?> class="all" disabled="disabled"<?php }
if ((isset($_smarty_tpl->tpl_vars['hotelAccess']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']][$_smarty_tpl->tpl_vars['hotelInfo']->value['id']]['access'])) && $_smarty_tpl->tpl_vars['hotelAccess']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']][$_smarty_tpl->tpl_vars['hotelInfo']->value['id']]['access']) {?> checked="checked"<?php }?>/>
												</td>
											</tr>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									<?php }?>
								</tbody>
							</table>
						</div>
					<?php }?>
					<div class="panel">
						<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu'),$_smarty_tpl ) );?>
</h3>
						<table class="table" id="table_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
							<thead>
								<tr>
									<th></th>
									<th>
										<input type="checkbox" name="1" class="viewall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox" name="1" class="addall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||add||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox" name="1" class="editall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||edit||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox" name="1" class="deleteall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||delete||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox" name="1" class="allall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All'),$_smarty_tpl ) );?>

									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
									<tr>
										<td colspan="6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No menu'),$_smarty_tpl ) );?>
</td>
									</tr>
								<?php } else { ?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
										<?php $_smarty_tpl->_assignInScope('access', $_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']]);?>
										<?php if (!$_smarty_tpl->tpl_vars['tab']->value['id_parent'] || $_smarty_tpl->tpl_vars['tab']->value['id_parent'] == -1) {?>
											<?php $_smarty_tpl->_assignInScope('is_child', false);?>
											<?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
											<tr <?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="parent"<?php }?>>
												<td <?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="bold"<?php }?>><?php if ($_smarty_tpl->tpl_vars['is_child']->value) {?> &raquo; <?php }?><strong><?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
</strong></td>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
													<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?>
														<td>
															<input type="checkbox" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
														</td>
													<?php } else { ?>
														<td>
															<input type="checkbox" disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
														</td>
													<?php }?>
													<?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
												<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<td>
													<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
												</td>
											</tr>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['child']->value['id_parent'] === $_smarty_tpl->tpl_vars['tab']->value['id_tab']) {?>
													<?php if ((isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]))) {?>
														<?php $_smarty_tpl->_assignInScope('is_child', true);?>
														<?php $_smarty_tpl->_assignInScope('result_accesses', 0);?>
														<tr class="child-<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
">
															<td<?php if (!$_smarty_tpl->tpl_vars['is_child']->value) {?> class="bold"<?php }?>><?php if ($_smarty_tpl->tpl_vars['is_child']->value) {?> &raquo; <?php }
echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</td>
															<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['perms']->value, 'perm');
$_smarty_tpl->tpl_vars['perm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->do_else = false;
?>
																<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?>
																	<td>
																		<input type="checkbox" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
																	</td>
																<?php } else { ?>
																	<td>
																		<input type="checkbox" disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value] == 1) {?> checked="checked"<?php }?>/>
																	</td>
																<?php }?>
																<?php $_smarty_tpl->_assignInScope('result_accesses', $_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]);?>
															<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
															<td>
																<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['result_accesses']->value == 4) {?> checked="checked"<?php }?>/>
															</td>
														</tr>
													<?php }?>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

										<?php }?>

									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="panel">
						<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modules'),$_smarty_tpl ) );?>
</h3>
						<table class="table" id="table_module_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
							<thead>
								<tr>
									<th></th>
									<th>
										<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure'),$_smarty_tpl ) );?>

									</th>
									<th>
										<input type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="changeModuleAccess" data-rel="-1||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Uninstall'),$_smarty_tpl ) );?>

									</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!count($_smarty_tpl->tpl_vars['modules']->value)) {?>
									<tr>
										<td colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No modules are installed'),$_smarty_tpl ) );?>
</td>
									</tr>
								<?php } else { ?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']], 'module');
$_smarty_tpl->tpl_vars['module']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->do_else = false;
?>
										<tr>
											<td>&raquo; <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</td>
											<td>
												<input type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['view'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-view changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> class="ajax-ma-view" disabled="disabled"<?php }?>/>
											</td>
											<td>
												<input type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['configure'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-configure changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> class="ajax-ma-configure" disabled="disabled"<?php }?>/>
											</td>
											<td>
												<input type="checkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['uninstall'] == true) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['access_edit']->value == 1) {?> class="ajax-ma-uninstall changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> class="ajax-ma-uninstall" disabled="disabled"<?php }?>/>
											</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			<?php } else { ?>
				<div class="col-lg-12">
					<div class="panel">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Administrator permissions cannot be modified.'),$_smarty_tpl ) );?>

					</div>
				</div>
			<?php }?>
			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</form>
</div>
<?php }
/* {block "leadin"} */
class Block_1459050585639e8c1067e750_48552204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1459050585639e8c1067e750_48552204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
