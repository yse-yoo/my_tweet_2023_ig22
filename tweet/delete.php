<?php
require_once('../app.php');

// POSTリクエスト以外は処理しない
// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     exit('can not get access');
// }

//IDを取得
$id = $_GET['id'];

//TODO: TweetのIDで投稿を削除する
$tweet = new Tweet();
$tweet->delete($id);

//Tweet画面（トップページ）にリダイレクト
header('Location: ../');
exit;
