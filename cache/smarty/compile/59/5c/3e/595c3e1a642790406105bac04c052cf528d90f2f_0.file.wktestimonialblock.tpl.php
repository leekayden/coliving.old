<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:21
  from 'C:\xampp2\htdocs\coliving\modules\wktestimonialblock\views\templates\hook\wktestimonialblock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e18b8219_08392800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '595c3e1a642790406105bac04c052cf528d90f2f' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wktestimonialblock\\views\\templates\\hook\\wktestimonialblock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e18b8219_08392800 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['testimonials_data']->value)) && $_smarty_tpl->tpl_vars['testimonials_data']->value) {?>
    <div id="hotelTestimonialBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_TESIMONIAL_BLOCK_CONTENT']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="row home_block_content htlTestemonial-owlCarousel">
                <div class="col-sm-12 col-xs-12">
                    <div class="owl-carousel">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['testimonials_data']->value, 'tesimonial');
$_smarty_tpl->tpl_vars['tesimonial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tesimonial']->value) {
$_smarty_tpl->tpl_vars['tesimonial']->do_else = false;
?>
                            <div class="row">
                                <div class='col-xs-4 col-sm-offset-1 col-sm-2'>
                                    <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
views/img/icon-double-codes.png" class="img-responsive">
                                </div>
                                <div class='col-xs-12 col-sm-7'>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialContentContainer">
                                            <p class="testimonialContentText"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['testimonial_content'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 testimonialPersonDetail">
                                            <img width="60px" src="<?php echo $_smarty_tpl->tpl_vars['tesimonial']->value['img_url'];?>
" class="testimonialPersonImg">
                                            <p class="testimonialPersonName"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                            <p class="testimonialPersonDesig"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tesimonial']->value['designation'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
