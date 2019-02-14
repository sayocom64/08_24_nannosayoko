<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー管理</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div{
            padding: 10px;
            font-size:16px;
            }
        .nonDisp{
            display:none;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="user_index.php">ユーザー登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_select.php">登録情報</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form action="user_insert.php" method="post">
        <div class="form-group">
            <label for="name">ユーザー名</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="ユーザー名を入力">
        </div>
        <div class="form-group">
            <label for="lid">ログインID</label>
            <input type="text" class="form-control" id="lid" name="lid">
        </div>
        <div class="form-group">
            <label for="lpw">パスワード</label>
            <input type="password" class="form-control" id="lpw" name="lpw">
        </div>
        <div class="form-group">
            <input type="radio" id="kanri_flg0" name="kanri_flg" value="0" checked="checked">
                <label for="kanri_flg0">通常ユーザーとして登録</label>
            <input type="radio" id="kanri_flg1" name="kanri_flg" value="1">
                <label for="kanri_flg1">管理者として登録</label>
        </div>
        <!-- アクティブ状態で登録する -->
        <div class="form-group nonDisp">
            <input type="radio" id="life_flg0" name="life_flg" value="0" checked="checked">
            <input type="radio" id="life_flg1" name="life_flg" value="1">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="register">登録する</button>
        </div>
        <!-- <div class="form-group">
            <button type="submit" class="btn btn-primary">ログインする</button>
        </div> -->
    </form>

</body>

</html>