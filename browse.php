<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>閲覧ページ</title>
    <link href="css/browse.css?<?php echo date('YmdHis'); ?>" rel="stylesheet">
</head>
<body>
    <div class = "header">
        <h1><a href="browse.php">title</a></h1>
        <div class = "login"><button onclick="location.href='login.php'">ログイン</button></div>
        <div class = "register"><button onclick="location.href='Register.php'">新規登録</button></div>
    </div>

    <div class="box">
        <a href = "#">タイトル</a>
    </div>
</body>
</html>