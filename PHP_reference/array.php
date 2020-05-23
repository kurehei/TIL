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

class A {
  private $A;
}

class B extends A {
  private $A; // これは '\0B\0A' となります
  public $AA; // これは 'AA' となります
}
var_dump((array) new B());

// 配列の色々な使用例
$array5 = [
  'color' => 'red',
  'tasste' => 'sweet',
  'shape' => 'round',
  'name' => 'apple',
  4 // キーは0になる
];

$array6 = [];

$array6['color'] = 'red';
$array6['taste'] = 'sweet';
$array6['shape'] = 'round';
$array6['name']  = 'apple';
$array6[] = 4;

var_dump($array6);
print_r($result = array_diff($array6,$array5));
// array_diffは配列の差を計算する

$switting = [
  10,
  5 => 6,
  3 => 7,
  'a' => 4,
  11 ,
  '02' => 77,// keyは６
  '8' => 2, // keyのString整数は、intにキャストされる
  0 => 12 // 0 => 9になる
];

$switching2 = array(         10, // key = 0
                    5    =>  6,
                    3    =>  7,
                    'a'  =>  4,
                            11, // key = 6 (最大の添字は5です)
                    '8'  =>  2, // key = 8 (整数!)
                    '02' => 77, // key = '02'
                    0    => 12  // 値10は12で上書きされます
                  );
var_dump($switching2);

// 配列は、参照渡しする事で直接変更可能
$colors = ['red', 'blue','yellow','green'];
foreach($colors as $color) {
  echo "Do you like $color\n";
}

// ループ内での要素の変更
foreach ($colors as &$color) {
  // foreachの中で直接値を変更したい場合、値に$をつける
  $color = strtoupper($color);
}
unset($color); /* これ以降の $color への書き込みが
配列の要素を書き換えてしまわないことを保証する */
// unset()で参照を解除

print_r($colors);// print_r() 指定した変数の情報をわかりやすく出力

// 1から始まる添字
$firstquarter  = array(1 => 'January', 'February', 'March');
print_r($firstquarter);

// 配列のソート
sort($firstquarter);
print_r($firstquarter);

// 多次元配列
$fruits = [
  "fruits" => [
                  "a" => "orange",
                  "b" => "banana",
                  "c" => "apple"
                ],
  "holes" =>[
                  "first",
                   5 => "second",
                   "third"
  ]
];
echo $fruits["holes"][5].PHP_EOL; // second
echo $fruits["fruits"]["a"].PHP_EOL;
// 多次元配列の追加
$jucies["apple"]["green"] = "good";
print_r($jucies);

$arr = [2,3];
$arr2 = $ar; //arr2が変更される
$arr2[] = 4; //arrは変更されてない

$arr3 = &$arr; //
$arr3[] = 4 // arrとarr3は同じ内容

// 参照による代入とは、両方の変数が同じデータを指すようにするということです。$ = &$が可能になる

?>
