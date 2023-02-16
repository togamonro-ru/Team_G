<?php
   session_start();
   require_once 'db_connect.php';

   if(!empty($_POST)){
   $name = $_POST['name'];
   $pw = $_POST['password'];
   }
   if(empty($name)){
    $_SESSION['error_name'] = "名前を入力してください。";
    }

    if(empty($pw)){
    $_SESSION['error_password'] = "パスワードを入力してください。";
    }

    if(isset($name)&&isset($pw)){
        $sql = "select * from user where name = :name and password = :password";
        // プリペアードステートメントを作成する
         $stm = $pdo->prepare($sql);

        // プレースホルダに値をバインドする
        $stm->bindValue(':name',$name,PDO::PARAM_INT);
        $stm->bindValue(':password',$pw,PDO::PARAM_INT);

        // SQL文を実行する
        $stm->execute();
        
        // 結果を配列として取得する
        $user = $stm->fetch(PDO::FETCH_ASSOC);

        if($user['name'] === $name&&$user['password'] === $pw){
           header("Location: admin.php");
        } else {
            $_SESSION['error'] = "名前もしくはパスワードが違います。";
            echo $_SESSION['error'];
        }
    }
   
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/login.css">
    <title>ログイン画面</title>
</head>
<body>
    <header>    
        <h1><a href = "browse.php">title</a></h1>
    </header>

    <div class = "login">
        <form action = "login.php" method = "post">
            お名前<br>
            <input type = "text" name = "name"><br>

            パスワード<br>
            <input type = "password" name = "password"><br>

            <input type = "submit" value = "ログイン" class = "btn">
        </form>
    </div>
    <div class = "link">
        <a href = "Register.php">新規登録はこちら</a>
    </div>
</body>
</html>