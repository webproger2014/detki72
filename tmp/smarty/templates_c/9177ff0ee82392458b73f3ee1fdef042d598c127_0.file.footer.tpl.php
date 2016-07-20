<?php
/* Smarty version 3.1.29, created on 2016-07-07 16:47:57
  from "C:\wamp\www\cms\views\default\admin\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577e6b9dcc5907_19934944',
  'file_dependency' => 
  array (
    '9177ff0ee82392458b73f3ee1fdef042d598c127' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\admin\\footer.tpl',
      1 => 1467902870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577e6b9dcc5907_19934944 ($_smarty_tpl) {
?>
   

    <!-- CMS -->                
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
library/cms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
admin/index.js"><?php echo '</script'; ?>
>
    <!-- /CMS -->
    
    <!-- TEMPLATE -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
script/main.js"><?php echo '</script'; ?>
>
    <!-- /TEMPLATE -->
    </body>
</html>
<?php }
}
