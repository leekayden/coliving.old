<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:11
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\products\images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c131b8582_89818417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5484870cfe3e73f9d705292e85a63d8a41fe186b' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\products\\images.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c131b8582_89818417 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['id_product']->value)) && (isset($_smarty_tpl->tpl_vars['product']->value))) {?>
<div id="product-images" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="Images" />
	<div class="panel-heading tab" >
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Images'),$_smarty_tpl ) );?>

		<span class="badge" id="countImage"><?php echo $_smarty_tpl->tpl_vars['countImages']->value;?>
</span>
	</div>
	<div class="row">
		<div class="form-group">
			<label class="control-label col-lg-3 file_upload_label">
				<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Format:'),$_smarty_tpl ) );?>
 JPG, GIF, PNG. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filesize:'),$_smarty_tpl ) );?>
 <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['max_image_size']->value);?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MB max.'),$_smarty_tpl ) );?>
">
					<?php if ((isset($_smarty_tpl->tpl_vars['id_image']->value))) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this room type\'s image:'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add a new image to this room type'),$_smarty_tpl ) );
}?>
				</span>
			</label>
			<div class="col-lg-9">
				<?php echo $_smarty_tpl->tpl_vars['image_uploader']->value;?>

			</div>
			<div class="col-lg-9 col-lg-offset-3">
				<div class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please upload a square image (Recommended resolution 800 x 800px)'),$_smarty_tpl ) );?>

				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3">
				<span class="label-tooltip" data-toggle="tooltip"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update all captions at once, or select the position of the image whose caption you wish to edit. Invalid characters: %s','sprintf'=>array('<>;=#{}')),$_smarty_tpl ) );?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Caption'),$_smarty_tpl ) );?>

				</span>
			</label>
			<div class="col-lg-4">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
				<div class="translatable-field row lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
					<div class="col-lg-8">
				<?php }?>
						<input type="text" id="legend_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"<?php if ((isset($_smarty_tpl->tpl_vars['input_class']->value))) {?> class="<?php echo $_smarty_tpl->tpl_vars['input_class']->value;?>
"<?php }?> name="legend_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if (count($_smarty_tpl->tpl_vars['images']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['images']->value[0]->legend[$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name[$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);
}?>"<?php if (!$_smarty_tpl->tpl_vars['product']->value->id) {?> disabled="disabled"<?php }?>/>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
							<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
							<li>
								<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
							</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
			<div class="col-lg-2<?php if (count($_smarty_tpl->tpl_vars['images']->value) <= 1) {?> hidden<?php }?>" id="caption_selection">
				<select name="id_caption">
					<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All captions'),$_smarty_tpl ) );?>
</option>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
					<option value="<?php echo intval($_smarty_tpl->tpl_vars['image']->value->id_image);?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position %d','sprintf'=>intval($_smarty_tpl->tpl_vars['image']->value->position)),$_smarty_tpl ) );?>

					</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
			<div class="col-lg-2">
				<button type="submit" class="btn btn-default" name="submitAddproductAndStay" value="update_legends"><i class="icon-random"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update'),$_smarty_tpl ) );?>
</button>
			</div>
		</div>
	</div>
	<table class="table tableDnD" id="imageTable">
		<thead>
			<tr class="nodrag nodrop">
				<th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image'),$_smarty_tpl ) );?>
</span></th>
				<th class="fixed-width-lg"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Caption'),$_smarty_tpl ) );?>
</span></th>
				<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position'),$_smarty_tpl ) );?>
</span></th>
				<?php if ($_smarty_tpl->tpl_vars['shops']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
						<th class="fixed-width-xs"><span class="title_box"><?php echo $_smarty_tpl->tpl_vars['shop']->value['name'];?>
</span></th>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				<th class="fixed-width-xs"><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cover'),$_smarty_tpl ) );?>
</span></th>
				<th></th> <!-- action -->
			</tr>
		</thead>
		<tbody id="imageList">
		</tbody>
	</table>
	<table id="lineType" style="display:none;">
		<tr id="image_id">
			<td>
				<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_THEME_PROD_DIR_') ? constant('_THEME_PROD_DIR_') : null))."image_path.jpg");?>
" class="fancybox"> 					<img
						src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_THEME_PROD_DIR_') ? constant('_THEME_PROD_DIR_') : null)).((string)$_smarty_tpl->tpl_vars['iso_lang']->value)."-default-".((string)$_smarty_tpl->tpl_vars['imageType']->value).".jpg");?>
"
						alt="legend"
						title="legend"
						class="img-thumbnail" />
				</a>
			</td>
			<td>legend</td>
			<td id="td_image_id" class="pointer dragHandle center positionImage">
				<div class="dragGroup">
					<div class="positions">
						image_position
                                        </div>
                                </div>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['shops']->value) {?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
				<td>
					<input
						type="checkbox"
						class="image_shop"
						name="id_image"
						id="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
image_id"
						value="<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
" />
				</td>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
			<td class="cover">
				<a href="#">
					<i class="icon-check-empty icon-2x covered"></i>
				</a>
			</td>
			<td>
				<a href="#" class="delete_product_image pull-right btn btn-default" >
					<i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this image'),$_smarty_tpl ) );?>

				</a>
			</td>
		</tr>
	</table>
	<div class="panel-footer">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts'), ENT_QUOTES, 'UTF-8', true);
if ((isset($_REQUEST['page'])) && $_REQUEST['page'] > 1) {?>&amp;submitFilterproduct=<?php echo intval($_REQUEST['page']);
}?>" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel'),$_smarty_tpl ) );?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save'),$_smarty_tpl ) );?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right" disabled="disabled"><i class="process-icon-loading"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save and stay'),$_smarty_tpl ) );?>
</button>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		var upbutton = '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload an image'),$_smarty_tpl ) );?>
';
		var come_from = '<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
';
		var success_add =  '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The image has been successfully added.'),$_smarty_tpl ) );?>
';
		var id_tmp = 0;
		var current_shop_id = <?php echo intval($_smarty_tpl->tpl_vars['current_shop_id']->value);?>
;
		
		//Ready Function

		function imageLine(id, path, position, cover, shops, legend)
		{
			line = $("#lineType").html();
			line = line.replace(/image_id/g, id);
			line = line.replace(/(\/)?[a-z]{0,2}-default/g, function($0, $1){
				return $1 ? $1 + path : $0;
			});
			line = line.replace(/image_path/g, path);
			line = line.replace(/\.jpg"\s/g, '.jpg?time=' + new Date().getTime() + '" ');
			line = line.replace(/image_position/g, position);
			line = line.replace(/legend/g, legend);
			line = line.replace(/icon-check-empty/g, cover);
			line = line.replace(/<tbody>/gi, "");
			line = line.replace(/<\/tbody>/gi, "");
			if (shops != false)
			{
				$.each(shops, function(key, value){
					if (value == 1)
						line = line.replace('id="' + key + '' + id + '"','id="' + key + '' + id + '" checked=checked');
				});
			}
			$("#imageList").append(line);
		}

		$(document).ready(function(){
			
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
				assoc = "{";
				<?php if ($_smarty_tpl->tpl_vars['shops']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
$_smarty_tpl->tpl_vars['shop']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
$_smarty_tpl->tpl_vars['shop']->do_else = false;
?>
						assoc += '"<?php echo $_smarty_tpl->tpl_vars['shop']->value['id_shop'];?>
" : <?php if ($_smarty_tpl->tpl_vars['image']->value->isAssociatedToShop($_smarty_tpl->tpl_vars['shop']->value['id_shop'])) {?>1<?php } else { ?>0<?php }?>,';
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
				if (assoc != "{")
				{
					assoc = assoc.slice(0, -1);
					assoc += "}";
					assoc = jQuery.parseJSON(assoc);
				}
				else
					assoc = false;
				imageLine(<?php echo $_smarty_tpl->tpl_vars['image']->value->id;?>
, "<?php echo $_smarty_tpl->tpl_vars['image']->value->getExistingImgPath();?>
", <?php echo $_smarty_tpl->tpl_vars['image']->value->position;?>
, "<?php if ($_smarty_tpl->tpl_vars['image']->value->cover) {?>icon-check-sign<?php } else { ?>icon-check-empty<?php }?>", assoc, "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['image']->value->legend[$_smarty_tpl->tpl_vars['default_language']->value], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
");
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			
			var originalOrder = false;

			$("#imageTable").tableDnD(
			{	dragHandle: 'dragHandle',
                                onDragClass: 'myDragClass',
                                onDragStart: function(table, row) {
                                        originalOrder = $.tableDnD.serialize();
                                        reOrder = ':even';
                                        if (table.tBodies[0].rows[1] && $('#' + table.tBodies[0].rows[1].id).hasClass('alt_row'))
                                                reOrder = ':odd';
                                        $(table).find('#' + row.id).parent('tr').addClass('myDragClass');
                                },
				onDrop: function(table, row) {
					if (originalOrder != $.tableDnD.serialize()) {
						current = $(row).attr("id");
						stop = false;
						image_up = "{";
						$("#imageList").find("tr").each(function(i) {
							$("#td_" +  $(this).attr("id")).html('<div class="dragGroup"><div class="positions">'+(i + 1)+'</div></div>');
							if (!stop || (i + 1) == 2)
								image_up += '"' + $(this).attr("id") + '" : ' + (i + 1) + ',';
						});
						image_up = image_up.slice(0, -1);
						image_up += "}";
						updateImagePosition(image_up);
					}
				}
			});
			/**
			 * on success function
			 */
			function afterDeleteProductImage(data)
			{
				data = $.parseJSON(data);
				if (data)
				{
					cover = 0;
					id = data.content.id;
					if (data.status == 'ok')
					{
						if ($("#" + id + ' .covered').hasClass('icon-check-sign'))
							cover = 1;
						$("#" + id).remove();
					}
					if (cover)
						$("#imageTable tr").eq(1).find(".covered").addClass('icon-check-sign');
					$("#countImage").html(parseInt($("#countImage").html()) - 1);
					refreshImagePositions($("#imageTable"));
					showSuccessMessage(data.confirmations);

					if (parseInt($("#countImage").html()) <= 1)
						$('#caption_selection').addClass('hidden');
				}
			}

			$('.delete_product_image').die().live('click', function(e)
			{
				e.preventDefault();
				id = $(this).parent().parent().attr('id');
				if (confirm("<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete selected item?','js'=>1),$_smarty_tpl ) );?>
"))
				doAdminAjax({
						"action":"deleteProductImage",
						"id_image":id,
						"id_product" : <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
,
						"id_category" : <?php echo $_smarty_tpl->tpl_vars['id_category_default']->value;?>
,
						"token" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
",
						"tab" : "AdminProducts",
						"ajax" : 1 }, afterDeleteProductImage
				);
			});

			$('.covered').die().live('click', function(e)
			{
				e.preventDefault();
				id = $(this).parent().parent().parent().attr('id');
				$("#imageList .cover i").each( function(i){
					$(this).removeClass('icon-check-sign').addClass('icon-check-empty');
				});
				$(this).removeClass('icon-check-empty').addClass('icon-check-sign');

				if (current_shop_id != 0)
					$('#' + current_shop_id + id).attr('check', true);
				else
					$(this).parent().parent().parent().children('td input').attr('check', true);
				doAdminAjax({
					"action":"UpdateCover",
					"id_image":id,
					"id_product" : <?php echo $_smarty_tpl->tpl_vars['id_product']->value;?>
,
					"token" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
",
					"controller" : "AdminProducts",
					"ajax" : 1 }
				);
			});

			$('.image_shop').die().live('click', function()
			{
				active = false;
				if ($(this).attr("checked"))
					active = true;
				id = $(this).parent().parent().attr('id');
				id_shop = $(this).attr("id").replace(id, "");
				doAdminAjax(
				{
					"action":"UpdateProductImageShopAsso",
					"id_image":id,
					"id_product":id_product,
					"id_shop": id_shop,
					"active":active,
					"token" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
",
					"tab" : "AdminProducts",
					"ajax" : 1
				});
			});

			function updateImagePosition(json)
			{
				doAdminAjax(
				{
					"action":"updateImagePosition",
					"json":json,
					"token" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
",
					"tab" : "AdminProducts",
					"ajax" : 1
				});
			}

			function delQueue(id)
			{
				$("#img" + id).fadeOut("slow");
				$("#img" + id).remove();
			}


			$('.fancybox').fancybox();
		});
		if (tabs_manager.allow_hide_other_languages)
			hideOtherLanguage(default_language);
		
	<?php echo '</script'; ?>
>
</div>
<?php }
}
}
