<?php
// 変数のスコープ
// 変数のスコープは、その変数が定義されたコンテキストです。そして、スコープの範囲内はincludeやrequireにより読みこまれたファイルも含みます。

$a = 1;
include 'b.inc';
//　この変数はincludeしたb.incの部分でも利用可能である。しかし、ユーザー定義の関数内ならその変数の利用範囲は、そのローカル関数内のみである。
// 関数の中で使用された変数はデフォルトで有効範囲が関数内部に制限 されます。

$a = 1; // グローバルなスコープ
function test() {
  echo $a; // ローカル変数の参照
};
/* この関数では出力されない。ローカル変数を参照しているにも関わらず、変数に値が代入されていないから。グローバル変数をローカル関数で使用する場合、関数内部でグローバルなとして宣言する必要あり。*/

// グローバルキーワード
// globalの使用
$a = 1;
$b = 1;

function sum() {
  global $a , $b; // グローバル宣言によって、両変数はグローバル関数を参照している
  $c = $a + $b;
  return $c.PHP_EOL;
}

// globalのかわりに$GLOBALSを使用する

$c = 2;
$d = 3;

function sum2() {
  $c = $GLOBALS['a'] + $GLOBALS['b'];
  return $c.PHP_EOL;
}

// 配列GLOBALSは、連想配列であり変数名がキーになる.さらに、$GLOBALSはスーパーグローバルであるため全てのスコープに存在する
echo sum2();


// 例3 スーパーグローバルとスコープの例

function test_superglobal() {
  echo $_POST['name'];
}

// 静的変数の使用
//変数のスコープで重要な機能はは静的変数です。
// 静的変数はローカル関数スコープのみに 存在しますが、プログラム実行がこのスコープの外で行われるようになっ てもその値を失わないません。

// 静的変数が必要な場面

function example() {
  static $a = 0;
  echo $a;
  $a++;
};

// このようにすると最初のコール時のみ初期化され、あとは$aを出力し続けるため、


// この関数は、コールされ続ける旅に０を出力し続けるためほとんど役に立ちません。変数を１増やす$a++は関数の外に出ると$aが消えるため0を出力し続ける。
//それを解決するために、$aでstaticを宣言する
// static変数は、再帰関数を実現する1つの手段としても使用されます。
//再帰関数を使う場合無限に呼び出される可能性があるため、static変数を用いて再帰関数を終了させる

function example2(){
  static $count = 0;

  $count++;
  if ($count < 10) {
    example2();
  }
  $count--;
}
echo example2();

//　静的変数には関数を代入することが出来ない。行おうとするとパースエラーが起きる。
?>
