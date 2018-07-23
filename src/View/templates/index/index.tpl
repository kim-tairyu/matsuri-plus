<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

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
              {foreach from=$festivals item=festival}
              <div class="news_info_event_box">
                <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="{$SCRIPT_NAME}?type=festival&festival_id={$festival.festival_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$festival.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$festival.festival_name_en}</h4>
                      <!--demoが表示される文章でお願いします-->
                      <div class="demo">{$festival.description_en}</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2">{$festival.start_date}</h6>
                        <h6 class="date_big">{$festival.end_date}</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {foreachelse}
              <div>No Festival Data!</div>
              {/foreach}
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
            {foreach from=$articles item=article}
            <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
              <a href="{$SCRIPT_NAME}?type=article&article_id={$article.article_id}">
                <div class="news_box">
                  <div class="news_box1">
                    <img src="{_IMGS_SERVER_DIR}/{$article.image}" class="event_image">
                  </div>
                  <div class="news_box2">
                    <h4 class="news_title">{$article.article_title}</h4>
                    <div class="demo">{$article.text}</div>
                    <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                    <div class="date_box">
                      <h6 class="date_big2"></h6>
                      <h6 class="date_big">{$article.post_date}</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            {foreachelse}
            <div>No Article Data!</div>
            {/foreach}
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
              {foreach from=$springFestivals item=springFestival}
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="{$SCRIPT_NAME}?type=festival&festival_id={$springFestival.festival_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$springFestival.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$springFestival.festival_name_en}</h4>
                      <div class="demo">{$springFestival.description_en}</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {/foreach}
              <!-- SUMMER -->
              {foreach from=$summerFestivals item=summerFestival}
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="{$SCRIPT_NAME}?type=festival&festival_id={$summerFestival.festival_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$summerFestival.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$summerFestival.festival_name_en}</h4>
                      <div class="demo">{$summerFestival.description_en}</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {/foreach}
              <!-- AUTUMN -->
              {foreach from=$autumnFestivals item=autumnFestival}
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="{$SCRIPT_NAME}?type=festival&festival_id={$autumnFestival.festival_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$autumnFestival.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$autumnFestival.festival_name_en}</h4>
                      <div class="demo">{$autumnFestival.description_en}</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {/foreach}
              <!-- WINTER -->
              {foreach from=$winterFestivals item=winterFestival}
              <div class="news_info_event_box">
                <div class="fev_button-top"><p>♡</p></div>
                <a href="{$SCRIPT_NAME}?type=festival&festival_id={$winterFestival.festival_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$winterFestival.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$winterFestival.festival_name_en}</h4>
                      <div class="demo">{$winterFestival.description_en}</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"></h6>
                        <h6 class="date_big"></h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              {/foreach}
            </div>
          </div>
          <!--地方エリア-->
          <div class="tab-pane fade" id="area">
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=hokkaidou"><img src="{_IMGS_DIR}/hokkaidou.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=tohoku"><img src="{_IMGS_DIR}/tohoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=kinki"><img src="{_IMGS_DIR}/kinki.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=kanto"><img src="{_IMGS_DIR}/kanto.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=chubu"><img src="{_IMGS_DIR}/chubu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=chugoku"><img src="{_IMGS_DIR}/chugoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=shikoku"><img src="{_IMGS_DIR}/shikoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=kyushu"><img src="{_IMGS_DIR}/kyushu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="{$SCRIPT_NAME}?type=search&area=okinawa"><img src="{_IMGS_DIR}/okinawa.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/tab-change.js"></script>
  </body>
</html>