<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿画面</title>
    <link rel="stylesheet" href="css/style.css?<?php echo date('YmdHis'); ?>">
</head>
<body>
    <header class="contributorheader">
        <h1><a href="browse.php">title</a></h1>
    </header>
    <form action="postconfirmation.php" class="contributorform" method = "post" enctype="multipart/form-data">
        <div id="app">
            <label>
                <input type="file" name="file"><img src="img/icon.png" alt="アイコン" class="images">
            </label>
            <p>選択されていません</p>
        </div>
        <div class="titlediv">
            <label>タイトル<br>
            <input type="text" name="title" class="title"><br>
            </label>
        </div>
        <div class="contantdiv">
            <label>入力内容<br>
            <textarea name="contant" cols="90" rows="20" class="contant"></textarea><br>
            </label>
        </div>
        <div class="releasediv">
            公開<input type="radio" name="release" class="release" value="1">
            非公開<input type="radio" name="release" class="release" value="0"><br>
        </div>
        <div class="postdiv">
            <input type="submit" value="投稿" class="post">
        </div>
    </form>

    <footer class="contributorfooter">
        <a href="#">戻る</a>
    </footer>

    <script src="js/3.4.1-jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>