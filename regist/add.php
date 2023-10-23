<?php
//セッション開始
session_start();
session_regenerate_id(true);

// セッションから入力されたデータを取得
$post = $_SESSION['regist'];

// TODO: MySQLに保存

// 完了画面にリダイレクト
header('Location: result.php');