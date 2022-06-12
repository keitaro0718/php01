<?php
$filename = "./data/data.txt";

// ファイルを配列に格納し、さらに変数に格納
$lines = file($filename);
 
// 配列を出力
print_r($lines);
?>