<!DOCTYPE html>
<html lang="Ja">

<head>
    <meta charset="UTF-8" />
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");


   ?>
<header>
<div class="logo">
    <img src="4eachblog_logo.jpg" />
  </div>
  <div class="border">
    <ul>
      <li>トップ</li>
      <li>プロフィール</li>
      <li>4eachについて</li>
      <li>登録フォーム</li>
      <li>問い合わせ</li>
      <li>その他</li>
    </ul>
  </div>
</header>

<main>
  <div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
    <div class="katamari1">
      <h2>入力フォーム</h2>
      <form method="post" action="insert.php">

        <label>ハンドルネーム</label>
        <br />
        <input type="text" class="text" size="35"　 name="handlename" />
        <br />
        <label>タイトル</label>
        <br />
        <input type="text" class="title" size="35" name="title" />
        <br />
        <label>コメント</label>
        <br />
        <textarea cols="35" rows="7" name="comments"></textarea>
        <br />
        <input type="submit" class="submit" value="投稿する" />


      </div>
      </form>
<?php
  while($row=$stmt->fetch()){

    echo "<div class='katamari2'>";
      echo "<h2>".$row['title']."</h2>";
    //  echo "<div class='contents'>";

        echo "<p>";
          echo $row['comments'];
          echo "<p>posted by ".$row['handlename']."</p>";
        echo "</p>";
    //  echo "</div>";
    echo "</div>";
  }

      /*</style>echo "<div class='katamari3'>";
        echo "<h2>タイトル</h2>";
        echo "<div class='contents'>";
          echo "<p>
          記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br />
          記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br />
          記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br />
          posted by 通りすがり
          </p>";
        echo "</div>";
      echo "</div>";
      */
      ?>
  </div>
  <div class="right">
    <div class="tytle">
      <h2>人気の記事</h2>
        <p>PHPオススメ本</p>
        <p>PHP Myadminの使い方</p>
        <p>いま人気のエディタTop5</p>
        <p>HTMLの情報</p>

      <h2>オススメリンク</h2>
        <p>インターノウス株式会社</p>
        <p>XAMPPのダウンロード</p>
        <p>Eclipseのダウンロード</p>
        <p>Braketsのダウンロード</p>

      <h2>カテゴリ</h2>
        <p>HTML</p>
        <p>PHP</p>
        <p>MySQL</p>
        <p>JavaScript</p>
    </div>

  </div>
</main>

<footer>
  copyright ＠ internous | 4each blog is the one which provides A to Z about programming
</footer>

</body>
</html>
