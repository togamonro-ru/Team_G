<?php
require_once 'db_connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM post where id = :id";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':id',$id,PDO::PARAM_INT);
    $stm->execute();

    $result = $stm->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT user.name FROM post INNER JOIN user ON post.user_id = user.id";
    $stm = $pdo->prepare($sql);
    $stm->execute();

    $user = $stm->fetch(PDO::FETCH_ASSOC);
}
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
        <h1><a href="browse.php">title</a></h1>
    </div>
    <div class ="image">
        <img src="<?php echo $result['imgpass']; ?>" alt="">
    </div>

    <div class="detail">
        <h2><?php echo $result['title']; ?></h2>
        <h3><?php echo $user['name']; ?></h3>
        <p><?php echo $result['description']; ?></p>
    </div>
    <div class="links">
        <a href="#">←前の記事へ</a>
        <button onclick="location.href='./#'">戻る</button>
        <a href="#">次の記事へ→</a>
    </div>
</body>
</html>