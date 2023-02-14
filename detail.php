<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>詳細ページ</title>
    <link href="detail.css" rel="stylesheet">
    <style>
        .title{
            background-color: aqua;
            border-bottom : solid 3px red;
        }

        image{
            height:100px;
            width: 200px;
        }
    </style>
</head>
<body>
    <div class ="title">
        <h1>title</h1>
    </div>

    <button onclick="location.href='./#'">編集</button>
    
    <div class ="image">
        <img src="img/gogo1.png" alt="">
    </div>

    <h2>タイトル</h2>
    <h3>投稿者名</h3>
    <p>内容</p>
    <button onclick="location.href='./#'">戻る</button>
    <a href="#">前へ</a>
    <a href="#">次へ</a>
</body>
</html>