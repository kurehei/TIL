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
//var_dump($array3);

// 配列の要素へのアクセス
$array = array(
  "foo" => "bar",
    42    => 24,
    "multiple" => array(
      "dimensional" => array(
        "array" => "foo"
      )
    )
  );
//var_dump($array["foo"]);
//var_dump($array["multiple"]["dimensional"]["array"]);

// 配列では、変数に代入しなくても直接、配列を扱える
function getArray() {
  return [1,2,3];
}
print getArray()[1].PHP_EOL;
// 以前は
$tmp = getArray();
$tmp[1];

//　配列の要素の追加、削除など
$arr = [
  5 => 1,
  12 => 2
];

$arr["x"] = 42; // 配列にxというキーと、42という値を設定している

unset($arr[5]); // ５という配列の要素を削除している
unset($arr); // 配列全体を削除している

$array4 = [1,2,3,4,5];
print_r($array4);

foreach($array4 as $i => $value) {
  unset($array4[$i]);
}
print_r($array4);

// 新しく要素を追加、ただし、添字は０ではなく5
$array4[] = 6;
print_r($array4);

// リセットし直すには、array_values()を使う
$array4 = array_values($array4);
$array4[] = 7;
print_r($array4);

// 連想配列の場合、添字の場合、全て""で囲む
$array = [
  "foo" => "bar"
];
echo $array["foo"]; //$array[foo]ではだめ

// エラー全文表示
error_reporting(E_ALL);

$arr2 = [
  'fruit' => 'apple',
  'veggie' => 'carrot'
];
// 正しいアクセス方法
print ($arr2['fruit']).PHP_EOL;// apple

//print_r($arr2[fruit]); // エラー

define('fruit','veggie').PHP_EOL;// 定数、fruitの値にveggleをしよう
print ($arr2['fruit']).PHP_EOL; // apple
print ($arr2[fruit]).PHP_EOL; // "veggle"が呼ばれ、そこの配列の値であるcarrotが呼ばれる

print "$arr2[fruit]".PHP_EOL; // 文字列ではエラーではなくなる
print "{$arr2[fruit]}".PHP_EOL;

// 連想配列の呼び出す際、""の引用符で囲んだ方が良い。囲まない場合、定数を呼び出しと期待した動きをするため
?>
