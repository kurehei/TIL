<?php
$num = 2;
// var_dump($num) = データ型(数値)
var_dump($num);
$double = 1.2;
var_dump($double);
$Strig = "あああ";
// var_dump($Strig)は、データ型(テキストバイト数)　内容
var_dump($Strig);
// 配列
$array = ["りんご", "みかん", "いちご"];
print $array[1];
// 配列を出力print_r
print_r($array);
//連想配列　RubyでいうHash見たいなもの
$array = [
  "apple" => "りんご",
  "orange" => "みかん",
  "meron" => "メロン"
];
print_r($array);
// boolean型
$true = true;
$false = false;
var_dump($true);
var_dump($false);

$str1 = "文字列1";
$str2 = " + 文字列2";
$str = $str1 . PHP_EOL . $str2 . PHP_EOL;
print $str;
// PHP_EOLは改行用の定数
var_dump((1==2) || (1==1));
var_dump (1==2) && (1==1);
var_dump((1 != 2));
// PHP 暗黙のデータ型変換
$num = 10 + "20";
print($num);
?>
