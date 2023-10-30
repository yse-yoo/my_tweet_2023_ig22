<?php
require_once('../app.php');

// POSTリクエスト以外は処理しない
// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     exit('can not get access');
// }

$id = $_GET['id'];

//TODO: TweetのIDで投稿を削除する

//Tweet画面（トップページ）にリダイレクト
header('Location: ../');
exit;
