<?php
    session_start();

    $error = false;

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['pass'] = $_POST['pass'];


    if(empty($name)){
        $error = true;
        $_SESSION['error_name'] = "名前を入力してください。";
    }

    if(empty($pw)){
        $error = true;
        $_SESSION['error_password'] = "パスワードを入力してください。";
    }

    // require_once 'db_connect.php';

    // $name = $_POST['name'];
    // $pw = $_POST['pass'];

    // $sql = " insert into user (name, pass) values(:name, :pass)";

    // // プリペアードステートメントを作成する
    // $stm = $pdo->prepare($sql);

    // // プレースホルダに値をバインドする
    // $stm->bindValue(':name',$name,PDO::PARAM_STR);
    // $stm->bindValue(':pass',$age,PDO::PARAM_INT);
    // // SQL文を実行する
    // $stm->execute();

    // if($error){
    //     header("Location: Register.php");
    // }

    
?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
    <header>    
        <h3><a href = "#">title</a></h3>
    </header>

    <form action = "login.php" method = "post">
        お名前<br>
        <?php echo $_POST['name']?><br>

        パスワード<br>
        <?php echo $_POST['pass']?><br>

        <input type = "submit" value = "登録"><br>
    </form>
    <a href = "Register.php">戻る</a>
</body>
</html>