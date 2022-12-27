<?php
/* Smarty version 3.1.39, created on 2022-12-18 04:42:10
  from 'C:\xampp2\htdocs\coliving\admin\themes\default\template\controllers\order_preferences\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_639e8c12a5b108_15329510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cecef3cb464842f940474246e25adb590fc64654' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\coliving\\admin\\themes\\default\\template\\controllers\\order_preferences\\helpers\\options\\options.tpl',
      1 => 1644491846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639e8c12a5b108_15329510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_568720775639e8c12a5a9a7_67597023', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "after"} */
class Block_568720775639e8c12a5a9a7_67597023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_568720775639e8c12a5a9a7_67597023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">changeCMSActivationAuthorization();<?php echo '</script'; ?>
><?php
}
}
/* {/block "after"} */
}
