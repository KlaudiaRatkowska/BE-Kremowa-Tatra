<?php
/* Smarty version 3.1.48, created on 2023-12-03 23:36:41
  from '/var/www/html/admin123/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_656d02f9db3ba5_49423812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63480928b834bc063360bd9bef1f4a42e092e107' => 
    array (
      0 => '/var/www/html/admin123/themes/new-theme/template/footer.tpl',
      1 => 1689769962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656d02f9db3ba5_49423812 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
