<?php
$arr = ['a','b','c'];
$arr[]="d";
// jsの場合は.pushで要素追加だったが、上記で追加可能。
// echo $arr[0];

// echoは文字列専用。
// 配列やオブジェクトのように複数要素がある場合は中身を見るときにechoは使えない。

echo "<pre>";
var_dump($arr);
echo "<pre>";
// echoは()が必要ないが、var_dumpは必要
// 配列の中身を確認するときに使う。
// preは文章を整形するpreformed textの略
// 改行を入れてくれる

$str = "one,two,three";
$result = explode(",", $str);
echo "<pre>";
var_dump($result);
echo "<pre>";


?>