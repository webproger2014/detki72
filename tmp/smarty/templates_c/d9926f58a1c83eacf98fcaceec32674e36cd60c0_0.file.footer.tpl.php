<?php
/* Smarty version 3.1.29, created on 2016-07-21 05:57:17
  from "C:\wamp\www\cms\views\default\index\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5790481dbe3dc3_64355666',
  'file_dependency' => 
  array (
    'd9926f58a1c83eacf98fcaceec32674e36cd60c0' => 
    array (
      0 => 'C:\\wamp\\www\\cms\\views\\default\\index\\footer.tpl',
      1 => 1469073435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5790481dbe3dc3_64355666 ($_smarty_tpl) {
?>
   


    <div class="container-social">
        <div class="wrapper">
            <div class="social">
                <h2>Следуйте за нами</h2>
                <i class="fa fa-vk fa-3x" aria-hidden="true"></i>
                <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
                <i class="fa fa-google-plus fa-3x" aria-hidden="true"></i>
                <i class="fa fa-odnoklassniki fa-3x" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    
    <div class="container-footer">
        <div class="wrapper">
            <div class="head payment">
                <h2>Методы оплаты</h2>
                <div class="payment">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/qiwi.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/webmoney.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/yandex.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/svyaz.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/euroset.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/alfu-bunk.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/proms-bank.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/vtb.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/visa.png">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
icons/master.png">
                </div>
            </div>
                
            <div class="head service">
               <h2>Cервисы</h2>
               <ul class="service">
                    <li><a href="#">О магазине</a></li>
                    <li><a href="#">Доставка и тарифы</a></li>
                    <li><a href="#">Сборка детской мебели</a></li>
                    <li><a href="#">Возврат и обмен</a></li>
               </ul>
            </div>
                
            <div class="head contacts">
                <h2>Контакты</h2>
                <div class="contacts">
                    <h2>Бесплатный телефон по России:</h2>
                    <span class="number">8-800-500-31-10</span>
                    <h2>Городской телефон:</h2>
                    <span class="number">8(3452)68-35-41</span>
                    <span class="number">68-35-42</span>
                    <span class="number">91-91-75</span>
                     <div class="zvonok">
                        <a href="#">Заказать звонок</a>
                        <span></span>
                    </div> 
                    <div>
                </div>
            </div>    
        </div>
                
         <div class="detki72">
             <a href="/">detki72.ru</a>       
          </div>      
    </div>


    <!-- CMS -->                
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
library/cms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
index/index.js"><?php echo '</script'; ?>
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
