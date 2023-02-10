<?php
    session_start();

    $name = "";
    $pw = "";

    if(isset($_SESSION['name'])){
        $name = $_SESSION['name'];

    }
    if(isset($_SESSION['pass'])){
        $pw = $_SESSION['pass'];

    }

    //名前入力エラーがあった場合はエラーを表示する
    if(isset($_SESSION['error_name'])){
        echo $_SESSION['error_name'];

    }
    //パスワードエラー
    if(isset($_SESSION['error_password'])){
        echo $_SESSION['error_password'];

    }
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/Register.css">
    <title>新規登録画面</title>
</head>
<body>
    <header>    
        <h1><a href = "#">title</a></h1>
    </header>

    <form action = "confirm.php" method = "post">
        お名前<br>
        <input type = "text" name = "name" value = "<?php echo $name ?>"><br>

        パスワード<br>
        <input type = "password" name = "pass" value = "<?php echo $pw ?>"><br>

        <input type = "submit" value = "次へ">
    </form>
    <a href = "login.php">ログイン</a>
</body>
</html>