<?php
/* Smarty version 3.1.29, created on 2016-07-05 20:55:39
  from "C:\wamp\www\cms\views\default\admin\test.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577c02ab3e6891_13266012',
  'file_dependency' => 
  array (
    '1d609a1ab591c4bd6b8a110728f7a6b61fee432a' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\admin\\test.tpl',
      1 => 1467744834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577c02ab3e6891_13266012 ($_smarty_tpl) {
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
                        <tr class="users">
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                            <td><a href="/profile/webproger2014@gmail.com"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['role'];?>
</td>
                            <td class="right"><a href="#">Редактировать</a></td>
                            <td class="right"><a href="#">Удалить</a></td>
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
                            <li><a class='active'>1</a></li>
                            <li><a>2</a></li>
                            <li><a>3</a></li>
                            <li><a>4</a></li>
                            <li><a>5</a></li>
                            <li><a>..12</a></li>
                        </ul>
                    </div>
                </div> <?php }
}
