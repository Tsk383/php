<?php
// var_dump($_POST);
// exit();
$name = $_POST["name"];
$email = $_POST["email"];
$movie_place = $_POST["movie_place"];

// データ1件を1行にまとめる（最後に改行を入れる）
$write_data = "{$name} {$email} {$movie_place}\n";

// ファイルを開く．引数が`a`である部分に注目！
$file = fopen('data/data.csv', 'a');
// ファイルをロックする
flock($file, LOCK_EX);

// 指定したファイルに指定したデータを書き込む
fwrite($file, $write_data);

// ファイルのロックを解除する
flock($file, LOCK_UN);
// ファイルを閉じる
fclose($file);

// データ入力画面に移動する
header("Location:index.php");
?>