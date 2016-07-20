<?php
/* Smarty version 3.1.29, created on 2016-07-15 17:49:59
  from "C:\wamp\www\cms\views\default\index\createArticle.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578906276c8df9_55810978',
  'file_dependency' => 
  array (
    '14388689744cc928e1ec54ae3950e811a3dfeecc' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\createArticle.tpl',
      1 => 1468597053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_578906276c8df9_55810978 ($_smarty_tpl) {
?>
    <div class="container-right">
        <div class="wrapper">
            <div class="head top-line">
                    <h1>Создание статьи</h1>
             </div>
            
            <div class="head content">
                <div class="container-create-article">
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
                                <input type="text" placeholder="Заголовок" maxlength="255">
                            </div>
                        </div>

                        <div class="head text-article">
                            <div contenteditable="true" class="content" key_title="content"></div>
                        </div>
                        
                        <div class="add-doc">
                            <input type="file" id="file-upload" required multiple/>
                            <div id="content-files">
                                
                            </div>
                        </div>
                            
                        <div class="head article-settings">
                            <div class="create-article">
                                <div class="create"><span id="create-article">Создать статью</span></div>
                                <div id="messages"></div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>



<!--/exit contaner-body-->
</div>

<?php }
}
