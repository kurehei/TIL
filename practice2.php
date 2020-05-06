<?php
// mt_randは乱数を発生させる
$number = 8;
 if($number < 5) {
    print "正しい";
 } elseif( 9 < $number && $number > 7) {
  print "どちらでもない";
 }

 else {
    print "間違っている";
 }

 $num = 8;
 $num2 = 4;
 $opr = '*';
 switch($opr) {
    case '+':
      print "正しい";
    break;
    case '+':
      print "正しい";
    break;
    default:
      print "エラーです！";
 }
// 繰り返し
$array = ["りんご","みかん", "メロン"];
$count = count($array);
for($i = 0;$i < $count;$i++ ) {
  print $array[$i]. PHP_EOL;
  print $i . PHP_EOL;
}
// whilre
$num = 0;
$count = 0;
while($num != 1) {
  $num = mt_rand() % 10;
  print $num. PHP_EOL;
  $count++;
}

print "終了までに" . $count;

$num = 0;
$count = 0;
do {
  $num = mt_rand() % 10;
  print $num. PHP_EOL;
  $count++;
}
while($num != 9);

print "終了までに" . $count;

$array = ["りんご","みかん", "メロン"];
foreach($array as $key => $fruit) {
  print $key."番目". $fruit. PHP_EOL;
}

$array = ["りんご","みかん", "メロン"];
foreach($array as $fruit) {
  print $fruit. PHP_EOL;
}
?>
