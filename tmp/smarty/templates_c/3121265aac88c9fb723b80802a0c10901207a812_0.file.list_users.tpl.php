<?php
/* Smarty version 3.1.29, created on 2016-07-07 09:39:48
  from "C:\wamp\www\cms\views\default\admin\list_users.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577e0744b6e0f4_31234968',
  'file_dependency' => 
  array (
    '3121265aac88c9fb723b80802a0c10901207a812' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\admin\\list_users.tpl',
      1 => 1467877185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577e0744b6e0f4_31234968 ($_smarty_tpl) {
?>
                <div class="users">
                    <div class="head top-line">
                        <h1>Пользователи</h1>
                    </div> 
                    <table>
                        <tr class="title">
                            <td>id</td>
                            <td>name</td>
                            <td>email</td>
                            <td>role</td>
                        </tr>
                        
                        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_0_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['user']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
                        <tr class="users" id="<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                            <td><a href="/profile/webproger2014@gmail.com"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</td>
                            <td class="right"><a target="_blank" href="/admin/settings/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">Редактировать</a></td>
                            <td class="right"><a href="#" onclick="showModalDelUser(this);">Удалить</a></td>
                        </tr>
                        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_local_item;
}
if ($__foreach_user_0_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved_item;
}
?>
                    </table>
            
                    <div class="paginator">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['paginator']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_1_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_1_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'] != $_smarty_tpl->tpl_vars['page']->value['page_number']) {?>
                                    <li>
                                        <a limit="<?php echo $_smarty_tpl->tpl_vars['page']->value['limit'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
</a>
                                    </li>    
                                 <?php }?>               
                            <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_local_item;
}
if ($__foreach_page_1_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_1_saved_item;
}
?>
                            <li>
                                <a limit="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['limit'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
">..<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
</a>
                            </li>
                        </ul>
                    </div>
                </div> <?php }
}
