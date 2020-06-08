<?php
// 定数
// define()関数を使うことで定数を宣言できる
// define()は任意の式を使って定数を定義できるが、constの場合制約がある。

// 定数による定義
define("CONSTANT", "HELLO WORLD");
echo CONSTANT. PHP_EOL; // HELLO WORLDって出力される

// constによる定数宣言
const aaa = "HELLO WORLD";
echo aaa; // HELLO WORLDって出力される

/* 定数と変数の違い
・　定数は＄をつけない。
・　定数は、定義することができ変数のスコープに関係なくどこからでも呼び出せる。
・　定数は一度設定されると再定義または未定義とすることはできません。

定数の名前を動的にしる場合、constant()で定数の値を知ることができる関数を使用することもできる。
*/
var_dump(constant(CONSTANT)) ;

?>
