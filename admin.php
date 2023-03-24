<?php
session_start();
    $user_id=$_SESSION['user_id'];
    require_once 'db_connect.php';
 
    $sql =  "SELECT * FROM post WHERE delete_flg = 1 and user_id = :id" ;

    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id',$user_id,PDO::PARAM_INT);
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
    <div class ="title">
        <a href="browse.php"><img src="img/MyNails.png" alt="ロゴ"></a>
    </div>
        <div class="Contributor"><button onclick="location.href='Contributor.php'">投稿</button></div>
        <div class="browse"><button onclick="location.href='browse.php'">ログアウト</button></div>
    </div>

<div class="select">
<?php foreach ($stm as $row) {?>
    <div class="article">
        <a href="edit.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['imgpass'] ?>" alt="画像"></a>
        <a href="edit.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a>
    </div>
<?php }?>
</div>
</body>
</html>