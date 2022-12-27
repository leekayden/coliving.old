<?php
/* Smarty version 3.1.39, created on 2022-12-27 12:45:20
  from 'C:\xampp2\htdocs\coliving\modules\wkabouthotelblock\views\templates\hook\hotelInteriorBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63aae8e0e6a753_06039706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35b780edeabf3e3aa1130b8a3f62a39dd3520dbc' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\modules\\wkabouthotelblock\\views\\templates\\hook\\hotelInteriorBlock.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63aae8e0e6a753_06039706 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['InteriorImg']->value)) && $_smarty_tpl->tpl_vars['InteriorImg']->value) {?>
    <div id="hotelInteriorBlock" class="row home_block_container">
        <div class="col-xs-12 col-sm-12">
            <?php if ($_smarty_tpl->tpl_vars['HOTEL_INTERIOR_HEADING']->value && $_smarty_tpl->tpl_vars['HOTEL_INTERIOR_DESCRIPTION']->value) {?>
                <div class="row home_block_desc_wrapper">
                    <div class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                        <p class="home_block_heading"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_INTERIOR_HEADING']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <p class="home_block_description"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['HOTEL_INTERIOR_DESCRIPTION']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayInteriorExtraContent"),$_smarty_tpl ) );?>

                        <hr class="home_block_desc_line"/>
                    </div>
                </div>
            <?php }?>
            <div class="row home_block_content htlInterior-owlCarousel">
                <div class="col-sm-12 col-xs-12">
                    <div class="owl-carousel owl-theme">
                        <?php $_smarty_tpl->_assignInScope('intImgIteration', 0);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['InteriorImg']->value, 'img_name', false, NULL, 'intImg', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['img_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img_name']->value) {
$_smarty_tpl->tpl_vars['img_name']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration']++;
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration'] : null)%3 == 1) {?>
                            <div class="interiorImgWrapper">
                            <?php }?>
                                <div class="interiorbox" data-fancybox-group="interiorGallery" rel="interiorGallery" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotel_interior/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_name']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_name']->value['display_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                    <div class="interiorboxInner">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/hotel_interior/".((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_name']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'))).".jpg");?>
" class="interiorImg" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_name']->value['display_name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
                                    </div>
                                    <div class="interiorHoverBlockWrapper">
                                        <div class="interiorHoverPrimaryBlock">
                                            <div class="interiorHoverSecondaryBlock">
                                                <i class="icon-search-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration'] : null)%3 == 0) {?>
                            </div>
                            <?php }?>
                            <?php $_smarty_tpl->_assignInScope('intImgIteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_intImg']->value['iteration'] : null));?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php if ($_smarty_tpl->tpl_vars['intImgIteration']->value%3) {?>
                            <?php $_smarty_tpl->_assignInScope('intImgLeft', 3-($_smarty_tpl->tpl_vars['intImgIteration']->value%3));?>
                            <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['intImgLeft']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['intImgLeft']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                                <div class="interiorbox">
                                    <div class="interiorboxInner">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')))."views/img/Default-Image.png");?>
" class="interiorImg" alt="Default Image">
                                    </div>
                                </div>
                            <?php }
}
?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <hr class="home_block_seperator"/>
    </div>
<?php }
}
}
