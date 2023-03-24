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
        $stm->bindValue(':name',$name,PDO::PARAM_STR);
        $stm->bindValue(':password',$pw,PDO::PARAM_STR);

        // SQL文を実行する
        $stm->execute();
        // 結果を配列として取得する
        $user = $stm->fetch(PDO::FETCH_ASSOC);

        if($user){
            $_SESSION['user_id'] = $user['id'];
            header("Location: admin.php");
            exit();
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
    <link rel = "stylesheet" href = "css/login.css?<?php echo date('YmdHis'); ?>">
    <title>ログイン画面</title>
</head>
<body>
<header>
    <div class ="title">
        <a href="browse.php"><img src="img/MyNails.png" alt="ロゴ"></a>
    </div>
</header>
    <div class = "login">
        <form action = "login.php" method = "post">
            <div class="information">
                お名前<br>
                <input type = "text" name = "name" class="name"><br>

                パスワード<br>
                <input type = "password" name = "password" class="pw"><br>

                <input type = "submit" value = "ログイン" class = "btn">
            </div>
        </form>
    </div>
    <div class = "link">
        <a href = "Register.php">新規登録はこちら</a>
    </div>
</body>
</html>