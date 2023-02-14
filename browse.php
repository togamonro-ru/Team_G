<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閲覧ページ</title>
    <link href="browse.css" rel="stylesheet">
    <style>
        .header{
                display: flex;
                background-color: aqua;
                border-bottom : solid 3px red;
         }

        .login{
                margin-left: auto;
        }

        .register{
                margin-right: 0;
        }

        .box{
            margin-top: 10%;
            width: fit-content;
            border: solid 1px red;
        }
    </style>
</head>
<body>
    <div class = "header">
        <h1>title</h1>
        <div class = "login"><button onclick="location.href='./#'">ログイン</button></div>
        <div class = "register"><button onclick="location.href='./#'">新規登録</button></div>
    </div>

    <div class="box">
        <a href = "#">タイトル</a>
    </div>
</body>
</html>