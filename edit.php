<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編集画面</title>
    <link rel="stylesheet" href="css/style.css?<?php echo date('YmdHis'); ?>">
</head>
<body>
    <header class="contributorheader">
        <h1>title</h1>
    </header>
    <div class="delete">
        <button>削除</button>
    </div>
    <form action="" class="contributorform">
        <div class="file">
            <input type="file" name="images"><br>
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
            公開<input type="radio" name="release" class="release">
            非公開<input type="radio" name="release" class="release"><br>
        </div>
        <div class="postdiv">
            <input type="submit" value="投稿" class="post">
        </div>
    </form>

    <footer class="editfooter">
        <a href="#">戻る</a>
    </footer>
</body>
</html>