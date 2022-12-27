<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:21
  from 'C:\xampp2\htdocs\coliving\modules\wkhotelfeaturesblock\views\templates\hook\hotelfeaturescontent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e116fbe5_50848196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cf70fd0e3efd9be3c0e9e78bd4dcf343024a196' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkhotelfeaturesblock\\views\\templates\\hook\\hotelfeaturescontent.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e116fbe5_50848196 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['hotelAmenities']->value)) && $_smarty_tpl->tpl_vars['hotelAmenities']->value) {?>
    <div id="hotelAmenitiesBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12 home_amenities_wrapper">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_AMENITIES_DESCRIPTION']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_AMENITIES_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="homeAmenitiesBlock home_block_content">
                <?php $_smarty_tpl->_assignInScope('amenityPosition', 0);?>
                <?php $_smarty_tpl->_assignInScope('amenityIteration', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotelAmenities']->value, 'amenity', false, NULL, 'amenityBlock', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['amenity']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['amenity']->value) {
$_smarty_tpl->tpl_vars['amenity']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration']++;
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration'] : null)%2 != 0) {?>
                        <div class="row margin-lr-0">
                        <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                            <?php $_smarty_tpl->_assignInScope('amenityPosition', 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('amenityPosition', 1);?>
                        <?php }?>
                    <?php }?>
                            <div class="col-md-6 padding-lr-0 hidden-xs hidden-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ($_smarty_tpl->tpl_vars['amenityPosition']->value) {?>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">

                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotels_features_img/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotels_features_img/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-sm-12 padding-lr-0 visible-sm">
                                <div class="row margin-lr-0 amenity_content">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration'] : null)%2 != 0) {?>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotels_features_img/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-sm-6 padding-lr-0 amenity_desc_cont">
                                            <div class="amenity_desc_primary">
                                                <div class="amenity_desc_secondary">
                                                    <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                    <hr class="amenity_desc_hr" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 padding-lr-0">
                                            <div class="amenity_img_primary">
                                                <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotels_features_img/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
')">
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="col-xs-12 padding-lr-0 visible-xs">
                                <div class="row margin-lr-0 amenity_content">
                                    <div class="col-xs-12 padding-lr-0">
                                        <div class="amenity_img_primary">
                                            <div class="amenity_img_secondary" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotels_features_img/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['id_features_block'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 padding-lr-0 amenity_desc_cont">
                                        <div class="amenity_desc_primary">
                                            <div class="amenity_desc_secondary">
                                                <p class="amenity_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                <p class="amenity_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['amenity']->value['feature_description'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                                <hr class="amenity_desc_hr" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration'] : null)%2 == 0) {?>
                        </div>
                    <?php }?>
                    <?php $_smarty_tpl->_assignInScope('amenityIteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_amenityBlock']->value['iteration'] : null));?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['amenityIteration']->value%2) {?>
                    </div>
                <?php }?>
            </div>
        </div>
        <hr class="home_block_seperator"/>
    </div>
<?php }
}
}
