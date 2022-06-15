<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>


<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$address = $_POST["address"];
$sex = $_POST["sex"];
$rating = $_POST["rating"];
$reason = $_POST["reason"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$address.$c.$sex.$c.$rating.$c.$reason;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>
<!-- fopenでファイルを開く -->
<!-- http error 500は、サーバー側で何かエラーが起こっている -->
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>