<?php
    session_start();

    $name = "";
    $pw = "";

    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];

    }
    if(isset($_SESSION['password'])){
        $pw = $_SESSION['password'];

    }

    if(!empty($_POST)){
    //名前入力エラーがあった場合はエラーを表示する
    if(isset($_SESSION['error_name'])){
        echo $_SESSION['error_name'];

    }
    //パスワードエラー
    if(isset($_SESSION['error_password'])){
        echo $_SESSION['error_password'];

    }
    }
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/Register.css?<?php echo date('YmdHis'); ?>">
    <title>新規登録画面</title>
</head>
<body>
<header>
    <div class ="title">
        <a href="browse.php"><img src="img/MyNails.png" alt="ロゴ"></a>
    </div>
</header>

    <!-- <div class="error">
        <h4><?php echo $_SESSION['error_name']; ?></h4>
        <h4><?php echo $_SESSION['error_password']; ?></h4>
    </div> -->

    <div class = "form">
        <form action = "confirm.php" method = "post">
            <div class="information">
                お名前<br>
                <input type = "text" name = "name" value = "<?php echo $name ?>" class="name"><br>

                パスワード<br>
                <input type = "password" name = "password" class="pw"><br>

                <input type = "submit" value = "次へ" class = "btn">
            </div>
        </form>
    </div>
    <div class = "link">
        <a href = "login.php">ログイン</a>
    </div>
</body>
</html>