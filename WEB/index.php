<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

// おすすめお祭り情報を取得
require_once('../app/DAO/FestivalDAO.class.php');
$festivalDAO = new FestivalDAO();
// 記事情報を取得
require_once('../app/DAO/ArticleDAO.class.php');
$articleDAO = new ArticleDAO();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Matsuri Plus</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
</script>
<!-- Bootstrap -->
    <link href="<?php echo $pathList->cssPath; ?>bootstrap.min.css" rel="stylesheet">
</head>
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
<body>
  <!--[if lt IE 8]>
          <p>お使いのブラウザは<strong>古い</strong>ため、表示が崩れることがあります。
          <a href="http://browsehappy.com/">他のブラウザ</a>を利用されるか、<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>をインストールすることで正しく表示することができます。</p>
  <![endif]-->
  <!--header-->
  <?php include $pathList->headerPath ?>
<!--
maincontents
-->
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
<!--マウスクリック後の処理-->
<script type="text/javascript">
$(function(){$("#click1").click(function(){$('#click1').css({'color':'#000', 'text-decoration':'none'});});});
</script>
<script type="text/javascript">
$(function(){$("#click2").click(function(){$('#click2').css({'color':'#000', 'text-decoration':'none'});});});
</script>
<script type="text/javascript">
$(function(){$("#click3").click(function(){$('#click3').css({'color':'#000', 'text-decoration':'none'});});});
</script>
<script type="text/javascript">
$(function(){$("#click4").click(function(){$('#click4').css({'color':'#000', 'text-decoration':'none'});});});
</script>
<script type="text/javascript">
$(function(){$("#click5").click(function(){$('#click5').css({'color':'#000', 'text-decoration':'none'});});});
</script>

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
                  if(!empty($festivalDAO->getRecommendedFestivals())) {
                  $festivals = $festivalDAO->getRecommendedFestivals();
                  foreach($festivals as $festival) {
              ?>
              <div class="news_info_event_box">
                    <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                      <a href="festival.php?festival_id=<?php echo $festival['festival_id'] ?>">
                          <div class="news_box">
                          <div class="news_box1">
                            <img src="<?php echo $pathList->imgsPath; ?><?php echo $festival['festival_img']; ?>" class="event_image">
                          </div>
                          <div class="news_box2">
                            <h4 class="news_title"><?php echo $festival['festival_name'] ?></h4>
                            <!--demoが表示される文章でお願いします-->
                            <div class="demo">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                            </div>
                            <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                            <div class="date_box">
                            <h6 class="date_big2"><?php echo $festival['start_date'] ?></h6>
                            <h6 class="date_big"><?php echo $festival['start_date'] ?></h6>
                            </div>
                          </div>
                        </div>
                    </a>
                </div>
              <?php } } else { ?>
              <div>No Festival Data!</div>
              <?php } ?>
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
        <?php if(!empty($articleDAO->getArticles())) {
            $articles = $articleDAO->getArticles();
            foreach($articles as $article) {
        ?>
        <div class="news_info_event_box">
          <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
          <a href="article.php?article_id=?">
            <div class="news_box">
              <div class="news_box1">
                <img src="<?php echo $article['article_img']; ?>" class="event_image">
              </div>
              <div class="news_box2">
                <h4 class="news_title"><?php echo $article['article_title']; ?></h4>
                <!--demoが表示される文章でお願いします-->
                <div class="demo">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                </div>
                <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                <div class="date_box">
                  <h6 class="date_big2"><?php echo $article['post_date'] ?></h6>
                  <h6 class="date_big"><?php echo $article['post_date'] ?></h6>
                </div>
              </div>
            </div>
          </a>
        </div>
        <?php } } else { ?>
        <div>記事がありません。</div>
        <?php } ?>
    </div>
    <!--季節リア-->
    <div class="tab-pane fade" id="season">

      <div class="week_mon2">
        <a href="#"><div class="month3">SPRING</div></a>
        <a href="#"><div class="month3">SUMMER</div></a>
        <a href="#"><div class="month3">AUTUMN</div></a>
        <a href="#"><div class="month3">WINTER</div></a>
      </div>
      <!--
      <div class="sebox">
        <div class="sebox1"><div class="sebox1-A"></div></div>
        <div class="sebox2"><div class="sebox2-A"></div></div>
        <div class="sebox3"><div class="sebox3-A"></div></div>
        <div class="sebox4"><div class="sebox4-A"></div></div>
      </div>-->

      <div class="news_info_event">
        <?php if($festivalDAO->getRecommendedFestivals() != null) {
            $festivals = $festivalDAO->getRecommendedFestivals();
            foreach($festivals as $festival) {
        ?>
        <div class="news_info_event_box">
              <div class="fev_button-top"><p>♡</p></div>
                <a href="festival.php?festival_id=<?php echo $festival['festival_id'] ?>">
                    <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo $pathList->imgsPath; ?><?php echo $festival['festival_img']; ?>" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $festival['festival_name'] ?></h4>
                      <!--demoが表示される文章でお願いします-->
                      <div class="demo">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                      </div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                      <h6 class="date_big2"><?php echo $festival['start_date'] ?></h6>
                      <h6 class="date_big"><?php echo $festival['start_date'] ?></h6>
                      </div>
                    </div>
                  </div>
              </a>
          </div>
        <?php } } else { ?>
        <div>祭りデータがありません。</div>
        <?php } ?>
      </div>

    </div>
    <!--地方エリア-->
    <div class="tab-pane fade" id="area">
      <div class="home_img">
        <a href="../app/Area-tag.php?area=北海道"><img src="<?php echo $pathList->imgsPath; ?>hokkaidou.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=東北"><img src="<?php echo $pathList->imgsPath; ?>tohoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=近畿"><img src="<?php echo $pathList->imgsPath; ?>kinki.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=関東"><img src="<?php echo $pathList->imgsPath; ?>kanto.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=中部"><img src="<?php echo $pathList->imgsPath; ?>chubu.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=中国"><img src="<?php echo $pathList->imgsPath; ?>chugoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=四国"><img src="<?php echo $pathList->imgsPath; ?>shikoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=九州"><img src="<?php echo $pathList->imgsPath; ?>kyushu.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="../app/Area-tag.php?area=沖縄"><img src="<?php echo $pathList->imgsPath; ?>okinawa.jpg" alt=""></a>
      </div>
    </div>

    </div>
  </div>
</div>
<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>
</body>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="<?php echo $pathList->jsPath; ?>jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="<?php echo $pathList->jsPath; ?>bootstrap.min.js"></script>
</html>
