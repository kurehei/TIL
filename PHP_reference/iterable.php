<?php
// iterableは、array()あるいは、 Traversable インターフェイスを実装したオベジェクトを許容する
// foreachで反復可能

//$iterable パラメーター型　値の形式を問わないことが多い。、しかし、arrayでもTraversableでもない場合、TypeErrorが怒る
function add(iterable $iterable) {
  foreach($iterable as $value) {
      print $value.PHP_EOL;
  }
}

add([1,2,4]);
// add("a")だとtypeError

// $oterableとして宣言されたパラメーターは、NuLLまたは配列をデフォルト値としてしようできる
function(iterable $iterable = []) {
//
};

// iterableは戻り値としても使用できる戻り値が配列でも Traversable の インスタンスでもない場合TypeErrorが起きる

function bar(): iterable {
  return [1,3,4];
};

foreach(bar() as $value) {
  print $value.PHP_EOL;
} // 配列が帰る

function bar2(): iterable {
  return "a";
};

//print_r(bar2()); // Type Error

//Iterable 型の可変性 ¶

//継承したクラス、あるいはインターフェイスを実装したクラスはパラメーター（）にarrayやTraversableを使っているメソッドにIterableを拡張できる。また、戻り値をIterableからarrayなどに縮小も可能

Interface Example {
  public function method(array $array): iterable;
}

class ExampleImplementation implements Example {
  public function method(iterable $iterable): array {
    // パラメーターが拡張され、戻り値が縮小された。
  }
}
?>
