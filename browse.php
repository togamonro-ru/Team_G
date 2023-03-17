<?php
    session_start();
    require_once 'db_connect.php';

    $sql =  "SELECT * FROM post WHERE release_flg = 1 and delete_flg = 1";

    $stm = $pdo->prepare($sql);

    $stm->execute();
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
<?php foreach ($stm as $row) {?>
<table border="1">
    <tr>
        <td><a href="detail.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['imgpass'] ?>" alt="画像"></a></td>
    </tr>
    <tr>
        <td><a href="detail.php"><?php echo $row['title'] ?></a></td>
    </tr>
</table>
    <?php }?>
</table>
</body>
</html>