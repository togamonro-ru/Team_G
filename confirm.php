<?php
    session_start();
    require_once 'db_connect.php';

    $error = false;

    $name = $_POST['name'];
    $pw = $_POST['password'];

    if(empty($name)){
        $error = true;
        $_SESSION['error_name'] = "名前を入力してください。";
    }

    if(empty($pw)){
        $error = true;
        $_SESSION['error_password'] = "パスワードを入力してください。";
    }

    if($error){
        header("Location: Register.php");
    }

    $sql = " insert into user (name, password) values(:name, :password)";

    // プリペアードステートメントを作成する
    $stm = $pdo->prepare($sql);

    // プレースホルダに値をバインドする
    $stm->bindValue(':name',$name,PDO::PARAM_STR);
    $stm->bindValue(':password',$pw,PDO::PARAM_INT);
    // SQL文を実行する
    $stm->execute();
    
?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/Confirm.css?<?php echo date('YmdHis'); ?>">
    <title>確認画面</title>
</head>
<body>
    <header>    
        <h1><a href = "browse.php">title</a></h1>
    </header>
    <div class = "confirm">
        <form action = "login.php" method = "post">
            お名前<br>
            <?php echo $name?><br>

            パスワード<br>
            <?php echo $pw?><br>

            <input type = "submit" value = "登録" class = "btn"><br>
        </from>
    </div>

    <div class = "link">    
        <a href = "Register.php">戻る</a>
    </div>
</body>
</html>