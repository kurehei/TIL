<?php
$b = $a = 5; // 値5を$aと＄bに代入する　$a = 5 $b = 5と同じ
$c = $a++; // 後置加算のため、$cには$aの値である5が代入される
$d = ++$a; // 前置加算のため、可算後に$dに代入されるため$dには6という値がはいる

function double($i) {
  return $i * 2;
}

$e = double($f++); // この場合、後置加算のため$fに入る数値はdoubleで2倍した価が入るため 2+ 6 =12である。

$f = double(++$f); // この場合、前置可算のため、可算後のdoubleが呼ばれるため 2 * 7 =14になる。

?>
