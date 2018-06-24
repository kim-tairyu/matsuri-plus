<?php
$headerPath = 'include/header.php';
$footerPath = 'include/footer.php';

session_start();
$link_mypage      = "";
$link_schedule    = "";
$link_mypage_name = "";
if(isset($_SESSION["user_id"])) {
  $link_mypage      = "mypage.php";
  $link_schedule    = "schedule.php";
  $link_mypage_name = "My page";
} else {
  $link_mypage      = "sign-in.php";
  $link_schedule    = "sign-in.php";
  $link_mypage_name = "SIGN IN";
}

require_once('../app/DAO/FestivalDAO.class.php');
$festivalDAO = new FestivalDAO();
$festivals   = $festivalDAO->getFavoriteFestival();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>産学祭りの側</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<link rel="SHORTCUT ICON" href="../imgs/M.ico">
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
//まだ使うかわからんjsの処理
$(function() {
    var topBtn = $('.page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
//画像のみ保存禁止
$(function(){
$("../imgs").on("contextmenu",function(){
return false;
});
});
</script>
<!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
<body>
  <!--[if lt IE 8]>
          <p>お使いのブラウザは<strong>古い</strong>ため、表示が崩れることがあります。
          <a href="http://browsehappy.com/">他のブラウザ</a>を利用されるか、<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>をインストールすることで正しく表示することができます。</p>
  <![endif]-->
  <!--header-->
  <?php include $headerPath ?>

<!--
maincontents
-->
<div class="main_content col-md-10 col-xs-12 col-lg-12">
    <div class="main_content_inner">

  <ul class="kategori col-md-12 col-xs-12 col-lg-12">
    <li class="col-md-2  col-xs-2 col-lg-2">
      <a href="#vote" data-toggle="tab">VOTE</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#news" data-toggle="tab">NEWS</a>
    </li>
    <li class="col-md-4 col-xs-4 active col-lg-4 ">
      <a href="#recommend" data-toggle="tab">RECOMMEND</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#season" data-toggle="tab">SEASON</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#area" data-toggle="tab">AREA</a>
    </li>
  </ul>

  <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">

    <div class="tab-pane fade in active" id="recommend">
      <div class="week_mon">
        <a href="#">WEEK</a>
        <a href="#" class="month2">MONTH</a>
      </div>

      <?php foreach($festivals as $festival) { ?>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="festival.php?festival_id=<?php echo $festival['festival_id'] ?>"><img src="../imgs/<?php echo $festival['festival_img'] ?>" alt="祭り"></a>
      </div>
      <?php } ?>
    </div>

    <div class="tab-pane fade" id="vote">
      2
    </div>

    <div class="tab-pane fade" id="news">

      <div class="news_info_event">

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

        <a href="article.php">
          <div class="news_info_event_box">
            <div class="news_box">
            <div class="news_box1">
              <img src="../imgs/nebuta.jpg" class="event_image">
            </div>
            <div class="news_box2">
              <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
              <h6 class="date_big">2018.6.15</h6>
            </div>
          </div>
          </div>
        </a>

    </div>

    </div>

    <div class="tab-pane fade" id="season">
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/spring.jpg" alt="春"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/summer.jpg" alt="夏"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/autumn.jpg" alt="秋"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/winter.jpg" alt="冬"></a>
      </div>
    </div>

    <div class="tab-pane fade" id="area">
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
    </div>

    </div>
  </div>
</div>
<!--フッター（SP版では非表示になってる）-->
<?php include $footerPath ?>
</body>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
