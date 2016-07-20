<?php
/* Smarty version 3.1.29, created on 2016-07-11 14:03:13
  from "C:\wamp\www\cms\views\default\index\articles.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57838b0120b8d2_52114633',
  'file_dependency' => 
  array (
    '32a6cb7dba8a42cae3a6fd2e2edeb8453482bcb6' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\articles.tpl',
      1 => 1468238577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57838b0120b8d2_52114633 ($_smarty_tpl) {
?>
    <div class="container-right">
        <div class="wrapper">
            <div class="head top-line">
                    <h1>Публикации</h1>
             </div>
            <div class="head content">
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
                                    <a href="/articles/page/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['page_number'];?>
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
                        <?php if ($_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'] > 1) {?>
                            <li>
                                <a href="/articles./page/<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
">..<?php echo $_smarty_tpl->tpl_vars['paginator']->value['final_page']['page_number'];?>
</a>
                            </li>
                        <?php }?> 
                    </ul>
                </div>                
                <?php if ($_smarty_tpl->tpl_vars['articles']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_1_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$__foreach_article_1_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
                    <div class="articles">
                        <div class="publication">
                            <div class="wrapper-article">
                               <?php if ($_smarty_tpl->tpl_vars['article']->value['user_id'] === $_smarty_tpl->tpl_vars['user']->value['id_user'] || $_smarty_tpl->tpl_vars['user']->value['role'] > 0) {?>
                                    <div class="edit-article-right-nav" id="<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
                                        <a href="/articles/editArticle/<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
" target="_blank">Редактировать статью</a>
                                        <span id="del-article">Удалить статью</span>
                                     </div>
                                <?php }?>   
                                <h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2>
                                <div class="left-nav">
                                    <ul>
                                        <li><?php echo $_smarty_tpl->tpl_vars['article']->value['date_publication'];?>
</li>
                                        <li><?php echo $_smarty_tpl->tpl_vars['article']->value['count_comments'];?>
 Comments</li>
                                            <li><?php if ($_smarty_tpl->tpl_vars['article']->value['author']) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['article']->value['author']['login'];?>
 <?php echo $_smarty_tpl->tpl_vars['article']->value['author']['name'];?>

                                             <?php } else { ?>
                                                 Автор скрылса в небытие. Пользователь удалён.
                                            <?php }?>
                                        </li>
                                        <li><a href="/articles/authorArticles/1/<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">Статьи автора</a></li>
                                    </ul>
                                </div>
                                <div class="article">
                                    <?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
..
                                    <div class="right-menu">
                                         <ul>
                                            <li><a href="/articles/article/<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">Подробнее</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>      
                        </div>            
                    </div>    
                <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_local_item;
}
if ($__foreach_article_1_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_1_saved_item;
}
?>
                <?php } else { ?>
                    <div class="error404">
                        <h2>По Вашему запросу ничего не найдено</h2>
                        <h3>Посмотрите публикации в общем <a href="/articles/page/1/">каталоге</a></h3>
                    </div>
                <?php }?>
            </div> 
        </div>
    </div>



<!--/exit contaner-body-->
</div>
<?php }
}
