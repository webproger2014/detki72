<?php
/* Smarty version 3.1.29, created on 2016-07-09 15:15:12
  from "C:\wamp\www\cms\views\default\user\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5780f8e0ba2310_26429540',
  'file_dependency' => 
  array (
    '9e438c995b9bc2d5a68388477925efad2ea82b9e' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\user\\footer.tpl',
      1 => 1468070105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5780f8e0ba2310_26429540 ($_smarty_tpl) {
?>
   

    <!-- CMS -->                
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
library/cms.js"><?php echo '</script'; ?>
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
