<?php
/* Smarty version 3.1.29, created on 2016-07-10 19:30:07
  from "C:\wamp\www\cms\views\default\index\comments.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5782861fbc55e1_01409429',
  'file_dependency' => 
  array (
    '4076b958e56218523f7a2fbacf61104445412c49' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\comments.tpl',
      1 => 1468171805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5782861fbc55e1_01409429 ($_smarty_tpl) {
?>
    <div class="paginator">
        <ul>
            <?php
$_from = $_smarty_tpl->tpl_vars['paginator']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_page_0_saved_item = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
$__foreach_page_0_saved_local_item = $_smarty_tpl->tpl_vars['page'];
?>
                <?php if ($_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'] != $_smarty_tpl->tpl_vars['page']->value['page_number']) {?>
                    <li>
                        <a limit="<?php echo $_smarty_tpl->tpl_vars['page']->value['limit'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
" onclick="getCommentsByLimit(this)"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
</a>
                    </li>    
                <?php }?>               
            <?php
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_local_item;
}
if ($__foreach_page_0_saved_item) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_page_0_saved_item;
}
?>
            <li>
                <a limit="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['limit'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
"  onclick="getCommentsByLimit(this)">..<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
</a>
            </li>
        </ul>
    </div>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['comments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comment_1_saved_item = isset($_smarty_tpl->tpl_vars['comment']) ? $_smarty_tpl->tpl_vars['comment'] : false;
$_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comment']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
$__foreach_comment_1_saved_local_item = $_smarty_tpl->tpl_vars['comment'];
?>       
        <div class="comments">
            <ul>
                <li><?php echo $_smarty_tpl->tpl_vars['comment']->value['user_name'];?>
</li>
                <li><?php echo $_smarty_tpl->tpl_vars['comment']->value['date_comment'];?>
</li>
            </ul>
            <div class="comment">
                <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['user']->value['role'] > 0) {?><a>Удалить</a><?php }?>
        </div>
    <?php
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_1_saved_local_item;
}
if ($__foreach_comment_1_saved_item) {
$_smarty_tpl->tpl_vars['comment'] = $__foreach_comment_1_saved_item;
}
}
}
