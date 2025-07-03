<?php


//1. POSTデータ取得
$name = $_POST['name'];
$name2 = $_POST['name2'];
$content= $_POST['content'];


//2. DB接続
try {
//   $pdo = new PDO(
//非表示にする// 




// );
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id,name,name2,content,date)
VALUES(NULL,:name,:name2,:content,now() ) ");

//  2. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':name2', $name2, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
} else {
  // 成功時の表示ページを表示
  ?>

  <!DOCTYPE html>
  <html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>登録完了</title>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
      <div class="complete-message">
          にっこり記録が登録されました☺︎
      </div>

      <div class="button-container">
          <a href="select.php" class="link-button">一覧を見る</a>
          <a href="index.php" class="link-button">続けて記録する</a>
      </div>
  </body>
  </html>

  <?php
}
