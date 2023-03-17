<?php
session_start();
$user_id=$_SESSION['user_id'];
    require_once 'db_connect.php';

    $sql =  "SELECT * FROM post WHERE release_flg = 1 and delete_flg = 1";

    $stm = $pdo->prepare($sql);

    $stm->execute();
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

    <?php foreach ($stm as $row) {?>
<table border="1">
    <tr>
        <td><a href="edit.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['imgpass'] ?>" alt="画像"></a></td>
    </tr>
    <tr>
        <td><a href="edit.php"><?php echo $row['title'] ?></a></td>
    </tr>
</table>
    <?php }?>
</body>
</html>