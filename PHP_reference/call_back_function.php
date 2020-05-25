<?php
// コールバック関数とは、他の関数に引数として関数を渡すこと
// 例

function call_back_function() {
  echo 'コールバックメソッドです';
}

function run_call_back_function() {
  echo call_back_function();
}
// コールバック関数を実行
//call_back_function('run_call_back_function');
// 文字列の引数のメソッド名を指定することで、コールバック関数を実行できる
// オブジェクトのインスタンスを渡す際には、配列を使用します。配列の0番目には、オブジェクトをそして１番目にはメソッド名を指定します。
// 静的なクラスメソッドの場合は、オブジェクトの指定はいらない。その代わり、０番目の要素にクラス名を指定しなければならない。

// コールバック関数の例

function my_callback_function() {
  echo 'hello world'. PHP_EOL;
}

// コールバックメソッドの例
class Myclass {
  static function myCallbaclMethod() {
    echo 'hello world'. PHP_EOL;
  }
}

//call_user_func()最初の引数で指定したコールバック関数をコールする
call_user_func('my_callback_function');
// 静的クラスメソッドのコール 配列の０番目にクラス名、１番目にメソッド名
call_user_func(['Myclass','myCallbaclMethod']);
// オブジェクトメソッドのコール
$obj = new Myclass();
call_user_func([$obj,'myCallbaclMethod']);
// 静的クラスメソッドのコール　別パターン
call_user_func('Myclass::myCallbaclMethod');
// __invoke() メソッドは、 スクリプトがオブジェクトを関数としてコールしようとした際にコールされます。 invokeやconstructは、マジックメソッドと呼ばれる

class C {
  public function __invoke($name) {
    echo 'hello'. $name .PHP_EOL;
  }
}

$c = new C();
call_user_func($c,'たかし');

// クロージャ= 無名関数を使った場合
$double = function($a) {
  return $a * 2;
};

$numbers = range(1, 5);

$new_numbers = array_map($double, $numbers);
print_r($new_numbers);
?>
