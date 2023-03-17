<?php
    session_start();
    require_once 'db_connect.php';

    $error = false;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM post where id = :id";
        $stm = $pdo->prepare($sql);
        $stm->bindValue(':id',$id,PDO::PARAM_INT);
        $stm->execute();

        $result = $stm->fetch(PDO::FETCH_ASSOC);

        $release = ["",""];
        if($result['release_flg']){
            $release[1] = "checked";
        } else {
            $release[0] = "checked";
        }

    }


    if(!empty($_POST)){
        $title = $_POST['title'];
        $contant = $_POST['contant'];
        $error = true;
        if(isset($_POST["release"])){
            $release = $_POST["release"];
        }
        if(isset($_FILES['file'])){
            $target_dir = "./uploads/";
            $file_name = basename($_FILES["file"]["name"]);
            $target_file = $target_dir . $file_name;
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        }

        $sql = "UPDATE post set imgname = :imgname, imgpass = :imgpass, title = :title, description = :description, release_flg = :release_flg where id = :id";

        $stm = $pdo->prepare($sql);

        // プレースホルダに値をバインドする
        $stm->bindValue(':imgname',$file_name,PDO::PARAM_STR);
        $stm->bindValue(':imgpass',$target_file,PDO::PARAM_STR);
        $stm->bindValue(':title',$title,PDO::PARAM_STR);
        $stm->bindValue(':description',$contant,PDO::PARAM_STR);
        $stm->bindValue(':release_flg',$release,PDO::PARAM_BOOL);
        // SQL文を実行する
        $stm->execute();

        header("Location: admin.php");
    }

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
    <link rel="stylesheet" href="css/style.css?<?php echo date('YmdHis'); ?>">
</head>
<body>
    <header class="contributorheader">
        <h1><a href="browse.php">title</a></h1>
    </header>
    <div class="delete">
        <button onclick="location.href='admin.php'">削除</button>
    </div>
    <form action="edit.php" class="contributorform" enctype = "multipart/form-data" method = "post">
            <div id="app">
                <label>
                    <input type="file" name="file"><?php echo $result['imgname'];?><img src="img/icon.png" alt="アイコン" class="images">
                </label>
                <p>選択されていません</p>
            </div>
            <div class="titlediv">
                <label>タイトル<br>
                <input type="text" name="title" class="title" value = "<?php echo $result['title']; ?>"><br>
                </label>
            </div>
            <div class="contantdiv">
                <label>入力内容<br>
                <textarea name="contant" cols="90" rows="20" class="contant"><?php echo $result['description']; ?></textarea><br>
                </label>
            </div>
            <div class="releasediv">
                公開<input type="radio" name="release" class="release" value = "1" <?php echo $release[1]; ?>>
                非公開<input type="radio" name="release" class="release" value = "0" <?php echo $release[0]; ?>><br>
            </div>
            <div class="postdiv">
                <input type="submit" value="編集" class="post">
            </div>
    </form>

    <footer class="editfooter">
        <a href="admin.php">戻る</a>
    </footer>

    <script src="js/3.4.1-jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>