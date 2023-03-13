<?php
session_start();
$user_id=$_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/admin.css?<?php echo date('YmdHis'); ?>">
    <title>管理画面</title>
</head>
<body>
    <div class="header">
        <h1><a href = "browse.php">title</a></h1>
        <div class="Contributor"><button onclick="location.href='Contributor.php'">投稿</button></div>
        <div class="browse"><button onclick="location.href='browse.php'">ログアウト</button></div>
    </div>
    <p>ログイン画面です</p>
    <p><?php echo $user_id; ?></p>
</body>
</html>