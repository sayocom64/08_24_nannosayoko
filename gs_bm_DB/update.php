<?php

//関数ファイル読み込み
include('functions.php');

//入力チェック
if(
    !isset($_POST['title']) || $_POST['title']==''||
    !isset($_POST['url']) || $_POST['url']==''
){
    exit('ParamError');
}

//POSTデータ取得
$id = $_POST['id'];
$title = $_POST['title'];
$url = $_POST['url'];
$comment = $_POST['comment'];

//DB接続
$pdo = db_conn();

//データ登録SQL作成
$sql = 'UPDATE gs_bm_table SET title=:a1, url=:a2, comment=:a3 WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $title, PDO::PARAM_STR);
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if ($status==false) {
    errorMsg($stmt);
} else {
    header('LOCATION: select.php');
    exit;
}
