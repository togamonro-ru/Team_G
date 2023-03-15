<?php
//１，データベースにデータを保存する
//２，今入れたデータのIDを取得する（最後に挿入したID）
//３，そのIDを使ってファイルの名前を決める
//４，ファイルをアップロードする
    session_start();
    require_once 'db_connect.php';

    $sql = "INSERT INTO image (name) VALUES ('')";
    $pdo->exec($sql);

    // 最後に挿入されたIDを取得する
    $last_id = $pdo->lastInsertId();

    if(isset($_FILES['file']))
     {
        // ファイルを一時的に保存するためのディレクトリを指定する
        $target_dir = "./uploads/";
        // ファイル名を取得する
        $file_name = basename($_FILES["file"]["name"]);
        $file_name = $last_id . $file_name;
        // ファイルのフルパスを取得する
        $target_file = $target_dir . $file_name;
        // ファイルを移動する
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
    }

    if(isset($_POST['title']))
    {
        $title=$_POST['title'];
    }
    if(isset($_POST['contant']))
    {
        $contant=$_POST['contant'];
    }
    if(isset($_POST['release']))
    {
        $release=$_POST['release'];
    }
    if(isset($_SESSION['user_id']))
    {
        $user_id=$_SESSION['user_id'];
    }

    $sql = "INSERT INTO post (imgname, imgpass, title, description, release_flg, user_id) VALUES (:imgname, :imgpass, :title, :description, :release, :user_id)";

    $stm = $pdo->prepare($sql);

    $stm->bindValue(':imgname',$file_name,PDO::PARAM_STR);
    $stm->bindValue(':imgpass',$target_file,PDO::PARAM_STR);
    $stm->bindValue(':title',$title,PDO::PARAM_STR);
    $stm->bindValue(':description',$contant,PDO::PARAM_STR);
    $stm->bindValue(':release',$release,PDO::PARAM_BOOL);
    $stm->bindValue(':user_id',$user_id,PDO::PARAM_INT);

    $stm->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>投稿しました</h1>
    <a href="admin.php">戻る</a>
</body>
</html>