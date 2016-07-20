<?php
/* Smarty version 3.1.29, created on 2016-07-07 10:45:24
  from "C:\wamp\www\cms\views\default\admin\settings.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577e16a4c737d6_31095319',
  'file_dependency' => 
  array (
    '871ce18ce96d5d9e3b16ad8b75121adde2246253' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\admin\\settings.tpl',
      1 => 1467880925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577e16a4c737d6_31095319 ($_smarty_tpl) {
?>
   
    <div class="container-right">
        <div class="wrapper">
            <div class="head top-line">
                    <h1>Настройки аккаунта</h1>
             </div>
            
            <div class="head content">
                <div class="edit-info-account">
                    <div id="messages" class="error"></div>
                    <input type="text" placeholder="email"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" id="email">
                    <input type="text" placeholder="name"  value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
" maxlength="30" id="name">
                    <a href="/articles/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Статьи автора</a>
                    <span id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Сохранить</span>
                </div>
            </div>
        </div>
    </div>



<!--/exit contaner-body-->
</div>

<?php }
}
