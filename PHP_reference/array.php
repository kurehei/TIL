<?php
// 配列は、２つの方法で作成可能
$a = array(
 "foo" => "bar",
 "bar" => "foo"
);
 $b = [
  "foo" => "bar",
  "bar" => "foo"
 ];

 //　keyがかぶると、最後のキーの値が格納される
// Integer型のstringもintegerに格納 1 = "1"
// floatも小数点を切り取られる　1 = 1.5
// true = 1 , false = 0
 $c = array(
   1 => "a",
   "1" => "b",
   1.5 => "c",
   true => "d"
 );

 var_dump($c);
 //添字配列と、連想配列に違いはない
 $array = [
  "foo" => "bar",
  "bar" => "foo",
  100   => -100,
  -100  => 100,
 ];
 var_dump($array);

 $array2 = [
  "foo","bar", "hello", "world"
 ];

 var_dump($array2);

 //一部のキーに配列の指定も可能
 //キーの部分に、添字が割り当てられる
 //キーに６を当てはめた場合 dの部分に、7が格納される
$array3 = [
  "a",
  "b",
  6 => "c",
  "d"
];
var_dump($array3);

?>
