<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

$err_msg = "";
if(isset($_GET["error"])) {
  $err_msg = "入力に誤りがあります！";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>新規登録</title>
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


<div class="box4" id="myTapContent">
<div class="box4-inner">
      <div class="adduser">
        <form method="post" action="../app/Sign-up.php">
          <div><p><?php echo $err_msg ?></p></div>
            <input type="text" class="mailaddress" name="mail_address" placeholder="メールアドレス">
            <input type="password" class="password" name="password" placeholder="パスワード">
            <input type="password" class="password" name="repassword" placeholder="パスワード確認">
            <input type="text" class="name" name="user_name" placeholder="名前">
            <select name="country_id" class="country-width">
              <option value="">選択してください</option>
              <option value="1">japan</option>
              <option value="2">america</option>
            </select>
            <input type="submit" class="touroku" value="登録">
        </form>
          <div class="company">
            <a href="sign-in.php" class="exit3">戻る</a>
          </div>
      </div>
</div>
</div>

<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
