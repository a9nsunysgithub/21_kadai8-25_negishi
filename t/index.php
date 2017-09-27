<?php
//1.  DB接続します
try {
  $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view = $result["indate"];
    $view = $result["id"];
    $view = $result["naiyou"];
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>プログラミングができる学習宿泊ホテル</title>
	<link href="css/reset.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="wrapper">

	</div>
<header>
  <div class="mainheader">
      <box class="logo">
        <img src=".img/header/logo.jpg" alt="" width="195px" height="35px">
        <p class="sentense0">表参道で学習できるプログラミングホテル</p>
      </box>
      <box class="shukuhaku">
        <button class="shukuhakubutton">宿泊予約</button>
        <p class="tel">TEL:03-5413-5045</p>
      </box>
  </div>

  <ul class="menu">
    <li>HOME</li>
    <li>ご宿泊</li>
    <li>おすすめのプラン</li>
    <li>施設紹介</li>
    <li>周辺施設＆観光</li>
    <li>コンセプト</li>
    <li>採用情報</li>
    <li>お問い合わせ</li>
  </ul>
</header>

<img src="img/mainvisual/main_01.png" alt="" class="mainvisual">

<main>
  <div class="date00">
    <h1 class="date">ご滞在希望日程</h1>
    <div class="toiawasebox">
      <label>お名前：<input type="text" name="username"></label>
      <label>メールアドレス：<input type="text" name="useradress"></label>
      <label>男性人数：<input type="number" min="0" max="10"></label>
      <label>女性人数：<input type="number" min="0" max="10"></label>
      <p class="submit"><input type="submit" value="お問い合わせ">
    </div>
  </div>


<div class="bodybox1">

  <p class="sentense1">ようこそプログラミング学習ができるホテル<br>omotesandoへ。</p>
  <div class="sentense">
    <p class="sentense2">せまい、だけど清潔、快適、ねっとも使える。<br>ホテル運営上のあらゆるムダを省き、業界初、
    なんとプログラミング未経験者でも大歓迎！<br>海外からのバックパッカーや宿泊コストなどを極力
    切り詰めたいという皆様を応援します。
    </p>
  </div>
</div>

<div class="bodybox2">
  <p class="sentense3">Lounge</p>
  <div class="sentense">
  <p class="sentense4">静かに学びたい方は特別なスペースを。<br>訪れてくださったお客様に
    思いっきり楽しんでいただきたい。そんな思いから当ホテル内に<br>Loungeを開設いたしました。
  </p>
  </div>
  <button class="bodybutton1">>詳しく見る</button>
</div>

<div class="bodybox3">
  <p class="sentense5">周辺施設</p>
  <div class="sentense">
  <p class="sentense6">行きたいところへ、思い立てばすぐ。<br>当ホテルから表参道周辺
  、青山、外苑一丁目など様々な場所に簡単にアクセスができます。<br>当ホテル周辺の観光箇所や
  穴場スポットなどご紹介。 </p>
  </div>
  <button class="bodybutton2">>詳しく見る</button>
</div>

<div class="plan">
  <p class="midashiplan">おすすめプラン</p>
  <div class="bodybox4">
    <div class="kapuserus">
      <div class="sentenseboxs">
        <p class="sentenses">カプセルルーム</p>
        <p class="sentensewomen">女性専用</p>
      </div>
      <img src="img/top/plan_img_01.png" alt="" class="bodybox4imgs">
    </div>
    <div class="kapuserus">
      <div class="sentenseboxs">
        <p class="sentenses">カプセルルーム</p>
        <p class="sentensemen">男性専用</p>
      </div>
      <img src="img/top/plan_img_02.png" alt="" class="bodybox4imgs">
    </div>
    <div class="kapuserus">
      <div class="sentenseboxs">
        <p class="sentenses">スーペリア　カプセルルーム</p>
        <p class="sentensemen">男性専用</p>
      </div>
      <img src="img/top/plan_img_03.png" alt="" class="bodybox4imgs">
    </div>
  </div>
</div>

<div class="news">
  <div class="newsbox">
    <p class="news_midashi">What's new・プログラミングができる学習宿泊ホテル</p>
  	<ul class="test">
      <?php
      //1.  DB接続します
      try {
        $pdo = new PDO('mysql:dbname=kadai_db;charset=utf8;host=localhost','root','');
      } catch (PDOException $e) {
        exit('DbConnectError:'.$e->getMessage());
      }
      //２．データ登録SQL作成
      $stmt = $pdo->prepare("SELECT * FROM kadai_table");
      $status = $stmt->execute();

      //３．データ表示
      $view="";
      if($status==false){
        //execute（SQL実行時にエラーがある場合）
        $error = $stmt->errorInfo();
        exit("ErrorQuery:".$error[2]);

      }else{
        //Selectデータの数だけ自動でループしてくれる
        while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
          $view = $result["indate"];
          $view = $result["id"];
          $view = $result["naiyou"];
        }

      }
      ?>
  	</ul>
    <div class="box00">
      <a href="">>過去のプログラミングができる学習宿泊ホテルからのお知らせ一覧を見る</a>
    </div>
  </div>
</div>

<div class="banner_box">
  <div class="somes">
    <div class="youtube">
      <iframe width="465" height="285" src="https://www.youtube-nocookie.com/embed/H1ppp-7X3Ns?rel=0" frameborder="0" allowfullscreen></iframe>
      <iframe width="465" height="285" src="https://www.youtube-nocookie.com/embed/H1ppp-7X3Ns?rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="banner_link_box">
      <img src="img/footer/f_banner_link_01.png" alt="" class="banner_link_img">
      <img src="img/footer/f_banner_link_02.png" alt="" class="banner_link_img">
      <img src="img/footer/f_banner_link_03.png" alt="" class="banner_link_img">
      <img src="img/footer/f_banner_link_04.png" alt="" class="banner_link_img">
    </div>
    <div class="sns_box">
      <img src="img/footer/fb.png" alt="" class="sns_imgs">
      <img src="img/footer/tw.png" alt="" class="sns_imgs">
      <img src="img/footer/insta.png" alt="" class="sns_imgs">
    </div>
  </div>
</div>
</main>

<footer>
  <div class="footer">
    <img src="./img/header/logo.jpg" alt="" class="logo2">
    <p class="lastsentense">株式会社デジタルっぽい株式会社：東京都港区北青山3-5-6 青房ビル2F<br>
    Copyright(C)2017プログラミングができる学習宿泊ホテル。All Rights Reserved.</p>
  </div>
</footer>

<p id="page-top"><a href="#wrap"><img src="./img/footer/back_top.png" alt=""></a></p>


	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/common.js"></script>









</body>
</html>
