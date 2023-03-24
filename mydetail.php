<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ</title>
    <link href="css/detail.css?<?php echo date('YmdHis'); ?>" rel="stylesheet">
</head>
<body>
<div class ="title">
        <a href="browse.php"><img src="img/MyNails.png" alt="ロゴ"></a>
    </div>

    <div class="edit">
        <button onclick="location.href='./#'">編集</button>
    </div>

    <div class ="image">
        <img src="img/gogo1.png" alt="">
    </div>

    <div class="detail">
        <h2>タイトル</h2>
        <h3>投稿者名</h3>
        <p>内容</p>
    </div>
    <div class="links">
        <button onclick="location.href='./#'">戻る</button>
    </div>
</body>
</html>