<?php
/* Smarty version 3.1.29, created on 2016-07-09 22:27:25
  from "C:\wamp\www\cms\views\default\index\editArticle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57815e2d1bdeb6_04445758',
  'file_dependency' => 
  array (
    'cb87d0efcd15ca2be942698fc3d24daeca8383ff' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\editArticle.tpl',
      1 => 1468096042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57815e2d1bdeb6_04445758 ($_smarty_tpl) {
?>
    <div class="container-right">
        <div class="wrapper">
            <div class="head top-line">
                    <h1>Редактирование статьи</h1>
             </div>
          <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>  
            <?php if ($_smarty_tpl->tpl_vars['article']->value['user_id'] === $_smarty_tpl->tpl_vars['user']->value['id_user'] || $_smarty_tpl->tpl_vars['user']->value['role'] > 0) {?>  
                <div class="head content">
                    <div class="container-edit-article">
                        <div class="wrapper">
                            <div class="head format-aricle">
                                <div class="format-face">
                                    <!-- формат шрифта-->
                                    <span id="text-bold"></span>
                                    <span id="text-underline"></span>
                                    <span id="text-italic"></span>
                                    <!-- /формат шрифта-->
                            
                                    <!-- text-align-->
                                    <span id="text-align-left"></span>
                                    <span id="text-align-center"></span>
                                    <span id="text-align-right"></span>
                                    <!-- /text-align-->
                                </div>
                                <!-- fon face -->
                                <div class="container-list-box">
                                    <div class="head list-box">
                                        <ul>
                                            <li>h1</li>
                                            <div class="list">
                                                <li>h2</li>
                                                <li>h3</li>
                                                <li>h4</li>
                                                <li>h5</li>
                                                <li>h6</li>   
                                            </div>
                                        </ul>
                                    </div>   
                                    <span check="true" class="check-span bg" action="showList"></span>
                                </div>
                                <!--/font face -->
                            
                                <input type="text" placeholder="font">
                            </div>
                        
                        
                            <div class="head inputs">                            
                                <div class="title">
                                    <input type="text" placeholder="Заголовок" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
">
                                </div>
                            </div>

                            <div class="head text-article">
                                <div contenteditable="true" class="content" key_title="content">
                                    <?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

                                </div>
                            </div>
                        
                            <div class="head article-settings">
                                <div class="create-article" id="<?php echo $_smarty_tpl->tpl_vars['article']->value['id_article'];?>
">
                                    <div class="create">
                                        <span id="update-article">Обновить статью</span>
                                    </div>
                                    <div id="messages"></div>
                                </div>
                            </div>
                        </div>
                    </div>              
                </div>
            <?php } else { ?>
                <div class="error404">
                   <h2>Вы не являеетесь автором данной статьи</h2>
                   <h3>Вы можете перейти в раздел <a href="/articles/authorArticles/1/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">мои статьи</a></h3>
                </div>
            <?php }?>
         <?php } else { ?>
            <div class="error404">
                <h2>По вашему запросу ничего не найдено</h2>
                <h3>Вы можете перейти в раздел <a href="/articles/authorArticles/1/<?php echo $_smarty_tpl->tpl_vars['user']->value['id_user'];?>
">мои статьи</a></h3>
            </div>
        <?php }?>
        </div>
    </div>



<!--/exit contaner-body-->
</div>


<?php }
}
