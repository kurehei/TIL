<?php

// 関数は以下のように描かれる
function bar()
{
  echo '出力例\n';
  return;
};
// PHPは参照される前に定義されている必要はない。ただし以下のような場合は覗かれる
// ある条件下でのみ関数が定義されている場合には関数がコールされる前に宣言され化ければならない

$makeboo = true;
// 条件付き関数は、定義前に呼び出すことはできない
if ($makeboo) {
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
};
// bar2は普通に呼び出すことが可能
function bar2()
{
  echo "I exist immediately upon program start.\n";
};

// 関数の中の関数

function foo2() {
  function bar3() {
    echo 'aaa';
  }
}
// bar3はまだ定義されていないため呼び出せない
foo2();

// foo2の実行によって初めてbar3は定義される

// 再帰的関数

function recursion($a) {

  if($a < 20) {
    echo $a.PHP_EOL;
    recursion($a + 1);
    // 関数を再帰的に呼び出す
    // 条件が終わるまで呼び出す
  }
}
echo recursion(2);
