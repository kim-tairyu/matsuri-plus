<?php
/* Smarty version 3.1.32, created on 2018-07-23 11:07:12
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/index/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55b6e0c0fc72_88524267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a9d49a8d7b9fd2a13a49a2d5946e0c27d129b48' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/index/index.tpl',
      1 => 1532344031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55b6e0c0fc72_88524267 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
  <head>
    <?php $_smarty_tpl->_subTemplateRender(_HTML_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </head>
  <body>
    <!--header-->
    <?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- maincontents -->
    <div class="main_content">
      <div class="main_content_inner">
        <ul class="kategori col-md-12 col-xs-12 col-lg-12">
          <li class="col-md-2  col-xs-2 col-lg-2">
            <a href="#vote" data-toggle="tab" id="click1">VOTE</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#news" data-toggle="tab" id="click2">NEWS</a>
          </li>
          <li class="col-md-4 col-xs-4 active col-lg-4 ">
            <a href="#recommend" data-toggle="tab" id="click3">RECOMMEND</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#season" data-toggle="tab" id="click4">SEASON</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#area" data-toggle="tab" id="click5">AREA</a>
          </li>
        </ul>
        <!--index.php全体を囲むwrap-->
        <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">
          <!--レビュー順で表示のエリア-->
          <div class="tab-pane fade in active" id="recommend">
            <div class="week_mon">
              <a href="#">WEEK</a>
              <a href="#" class="month2">MONTH</a>
            </div>
            <div class="news_info_event">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festivals']->value, 'festival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['festival']->value) {
?>
              <div class="news_info_event_box">
                <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['festival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_name_en'];?>
</h4>
                      <!--demoが表示される文章でお願いします-->
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['festival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_date'];?>
</h6>
                        <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['festival']->value['end_date'];?>
</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
} else {
?>
              <div>No Festival Data!</div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
          <!--投票機能エリア-->
          <div class="tab-pane fade" id="vote">
            投票を実装予定
          </div>
          <!--記事エリア-->
          <div class="tab-pane fade" id="news">
            <!--wrapのようなもの-->
            <!--記事1-->
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=article&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
                <div class="news_box">
                  <div class="news_box1">
                    <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" class="event_image">
                  </div>
                  <div class="news_box2">
                    <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</h4>
                    <div class="demo"><?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>
</div>
                    <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                    <div class="date_box">
                      <h6 class="date_big2"></h6>
                      <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
}
} else {
?>
            <div>No Article Data!</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
          <!--季節リア-->
          <div class="tab-pane fade" id="season">
            <div class="week_mon2">
              <a href="#"><div class="month3">SPRING</div></a>
              <a href="#"><div class="month3">SUMMER</div></a>
              <a href="#"><div class="month3">AUTUMN</div></a>
              <a href="#"><div class="month3">WINTER</div></a>
            </div>
            <div class="news_info_event">
              <!-- SPRING -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['springFestivals']->value, 'springFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['springFestival']->value) {
?>
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['springFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['springFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- SUMMER -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['summerFestivals']->value, 'summerFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['summerFestival']->value) {
?>
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- AUTUMN -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autumnFestivals']->value, 'autumnFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autumnFestival']->value) {
?>
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- WINTER -->
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['winterFestivals']->value, 'winterFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['winterFestival']->value) {
?>
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
          <!--地方エリア-->
          <div class="tab-pane fade" id="area">
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=hokkaidou"><img src="<?php echo _IMGS_DIR;?>
/hokkaidou.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=tohoku"><img src="<?php echo _IMGS_DIR;?>
/tohoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kinki"><img src="<?php echo _IMGS_DIR;?>
/kinki.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kanto"><img src="<?php echo _IMGS_DIR;?>
/kanto.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=chubu"><img src="<?php echo _IMGS_DIR;?>
/chubu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=chugoku"><img src="<?php echo _IMGS_DIR;?>
/chugoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=shikoku"><img src="<?php echo _IMGS_DIR;?>
/shikoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kyushu"><img src="<?php echo _IMGS_DIR;?>
/kyushu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=okinawa"><img src="<?php echo _IMGS_DIR;?>
/okinawa.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--フッター（SP版では非表示になってる）-->
    <?php $_smarty_tpl->_subTemplateRender(_FOOTER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/tab-change.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}