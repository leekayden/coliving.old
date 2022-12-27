<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\modules\js.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c1225d355_17150863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92b54a4e1c1c4de3f972a1d57cc205d58bde806e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\modules\\js.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c1225d355_17150863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp2\\htdocs\\coliving\\tools\\smarty\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php echo '<script'; ?>
 type="text/javascript"><?php echo $_smarty_tpl->tpl_vars['autocompleteList']->value;
echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var header_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm reset'),$_smarty_tpl ) );?>
';
    var body_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Would you like to delete the content related to this module ?'),$_smarty_tpl ) );?>
';
    var left_button_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No - reset only the parameters'),$_smarty_tpl ) );?>
';
    var right_button_confirm_reset = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes - reset everything'),$_smarty_tpl ) );?>
';
	var currentIndex = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	var currentIndexWithToken = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentIndex']->value, ENT_QUOTES, 'UTF-8', true);?>
&token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
';
	var dirNameCurrentIndex = '<?php echo $_smarty_tpl->tpl_vars['dirNameCurrentIndex']->value;?>
';
	var ajaxCurrentIndex = '<?php echo $_smarty_tpl->tpl_vars['ajaxCurrentIndex']->value;?>
';
	var installed_modules = <?php if ((isset($_smarty_tpl->tpl_vars['installed_modules']->value)) && is_array($_smarty_tpl->tpl_vars['installed_modules']->value) && count($_smarty_tpl->tpl_vars['installed_modules']->value)) {
echo $_smarty_tpl->tpl_vars['installed_modules']->value;
} else { ?>false<?php }?>;
	var by = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by'),$_smarty_tpl ) );?>
';
	var confirmPreferencesSaved = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Preferences saved'),$_smarty_tpl ) );?>
';
	<?php if ((isset($_GET['anchor'])) && !(isset($_smarty_tpl->tpl_vars['error_module']->value))) {?>var anchor = '<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(htmlentities($_GET['anchor']),'(',''),')',''),'{',''),'}',''),'\'',''),'/','');?>
';<?php } else { ?>var anchor = '';<?php }?>

	<?php if ((isset($_GET['module_name'])) && !(isset($_smarty_tpl->tpl_vars['error_module']->value)) && (!(isset($_smarty_tpl->tpl_vars['dont_filter']->value)) || !$_smarty_tpl->tpl_vars['dont_filter']->value)) {?>var module_name = '<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(htmlentities($_GET['module_name']),'(',''),')',''),'{',''),'}',''),'\'',''),'/','');?>
';<?php } else { ?>var module_name = '';<?php }?>

	

	function getPrestaStore(){if(getE("prestastore").style.display!='block')return;$.post(dirNameCurrentIndex+"/ajax.php",{page:"prestastore"},function(a){getE("prestastore-content").innerHTML=a;})}
	function truncate_author(author){return ((author.length > 20) ? author.substring(0, 20)+"..." : author);}
	function modules_management(action)
	{
		var modules = document.getElementsByName('modules');
		var module_list = '';
		for (var i = 0; i < modules.length; i++)
		{
			if (modules[i].checked == true)
			{
				rel = modules[i].getAttribute('data-rel');
				if (rel != "false" && action == "uninstall")
				{
					if (!confirm(rel))
						return false;
				}
				module_list += '|'+modules[i].value;
			}
		}
		document.location.href=currentIndex+'&token='+token+'&'+action+'='+module_list.substring(1, module_list.length);
	}

	$('document').ready( function() {
		// ScrollTo
		if (anchor != '')
			$.uiTableFilter($('#moduleContainer').find('table'), anchor);

		if (module_name != '')
			$.uiTableFilter($('#moduleContainer').find('table'), module_name);
		
		$('#moduleQuicksearch').on('keyup', function(){
			val = this.value;
			if ($('#filter_all').hasClass('active'))
				$.uiTableFilter($('#moduleContainer').find('table'), val);
			else
				$('#filter_all').trigger('click');
				var interval = setInterval(function () {
				if (!$('#loader_module_list').length)
				{
					$.uiTableFilter($('#moduleContainer').find('table'), val);
					clearInterval(interval);
					interval = null;
				}
			
		}, 100);
	
			
		}).on('keydown', function(e){
			if (e.keyCode == 13)
				return false;
		});
		
		$('input[name="filtername"]').result(function(event, data, formatted) {
			$('#filternameForm').submit();
		});

		// Method to check / uncheck all modules checkbox
		$('#moduleContainer').on("click", "#checkme", function()
		{
			if ($(this).attr("rel") == 'false')
			{
				$(this).attr("checked", true);
				$(this).attr("rel", "true");
				$("input[name=modules]").attr("checked", true);
			}
			else
			{
				$(this).removeAttr("checked");
				$(this).attr("rel", "false");
				$("input[name=modules]").removeAttr("checked");
			}
		});		

		// Method to reload filter in ajax
		$('.categoryModuleFilterLink').click(function()
		{
			if ($(this).hasClass('active'))
				return false;
			$('.categoryModuleFilterLink').removeClass('active');
			$(this).addClass('active');
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : $(this).attr('href')+'&rand=' + new Date().getTime(),
					headers: {"cache-control": "no-cache"},
					async: true,
					cache: false,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "reloadModulesList"
					},
					beforeSend: function(xhr){
						$('#moduleContainer').html('<img id="loader_module_list" src="../img/loader.gif" alt="" border="0" />');
					},
					success: function(data, status, request){
						if (request.getResponseHeader('Login') === 'true')
							return window.location.reload();

						$('#moduleContainer').html(data);
						$('.dropdown-toggle').dropdown();
						$('.help-tooltip').tooltip();
					}
				});
			}
			catch(e){}
			return false;
		});

		// Method to get modules_list.xml from prestashop.com and default_country_modules_list.xml from addons.prestashop.com
		try
		{
			resAjax = $.ajax({
				type:"POST",
				url: ajaxCurrentIndex,
				headers: {"cache-control": "no-cache"},
				async: true,
				cache: false,
				data: {
					ajaxMode : "1",
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "refreshModuleList"
				},
				success: function(data){
					if (data == '{"status":"refresh"}')
						window.location.href = window.location.href;
				}
			});
		}
		catch(e) { }

		// Method to set filter on modules
		function setFilter()
		{
			var module_type = $("#module_type_filter").val();
			var module_install = $("#module_install_filter").val();
			var module_status = $("#module_status_filter").val();
			var country_module_value = $("#country_module_value_filter").val();
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "setFilter",
						module_type : module_type,
						module_install : module_install,
						module_status : module_status,
						country_module_value : country_module_value,
						filterModules : 'Filter'
					},
					success : function(data){
						if (data == 'OK')
							window.location.href = currentIndexWithToken;
					}
				});
			}
			catch(e){}
			return false;
		}

		$(document).on('change', '#module_type_filter, #module_install_filter, #module_status_filter, #country_module_value_filter', function() { 
			setFilter(); 
		});

		$('.moduleTabPreferencesChoise').change(function()
		{			
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			module_pref = module_pref.substring(2, module_pref.length);

			$.ajax({
				type:"POST",
				url : ajaxCurrentIndex,
				async: true,
				data : {
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "saveTabModulePreferences",
					module_pref : module_pref,
					value_pref : value_pref
				},
				success : function(data){
					if (data == 'OK')
						showSuccessMessage(confirmPreferencesSaved);
				}
			});
		});
		
		// Method to save favorites preferences
		$('.moduleFavorite').change(function()
		{
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			var action_pref = module_pref.substring(0, 1);
			module_pref = module_pref.substring(2, module_pref.length);
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "saveFavoritePreferences",
						action_pref : action_pref,
						module_pref : module_pref,
						value_pref : value_pref
					},
					success : function(data){
						if (data == 'OK')
							showSuccessMessage(confirmPreferencesSaved);
					}
				});
			}
			catch(e){}
			return false;
		});

		$('#moduleContainer').on("click", ".toggle_favorite", function()
	    {
	      var el = $(this);
	      var value_pref = el.data('value');
	      var module_pref = el.data('module');
	      var action_pref = 'f';
	      var total_favorites = parseInt($('#favorite-count').html());

	      try
	      {
	        resAjax = $.ajax({
	            type:"POST",
	            url : ajaxCurrentIndex,
	            async: true,
	            data : {
	              ajax : "1",
	              token : token,
	              controller : "AdminModules",
	              action : "saveFavoritePreferences",
	              action_pref : action_pref,
	              module_pref : module_pref,
	              value_pref : value_pref
	            },
	            success : function(data)
	            {
	              // res.status  = cache or refresh
	              if (data == 'OK')
	              {
	                el.toggle();
	                el.parent('li').siblings().find('a.toggle_favorite').toggle();

					if (value_pref)
						$('#favorite-count').html(total_favorites+1);
					else
						$('#favorite-count').html(total_favorites-1);
	              }
	                
	            },
	            error: function(res,textStatus,jqXHR)
	            {
	              //jAlert("TECHNICAL ERROR"+res);
	            }
	        });
	      }
	      catch(e){}
	      return false;
	    });
	});

	
<?php echo '</script'; ?>
>
<?php }
}
