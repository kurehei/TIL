<?php
date_default_timezone_set('Azia/Tokyo');
$now_hour = (int)date("G");

$name="名無し";
if(array_key_exists('target_name', $_POST)) {
    $name =  $_POST['target_name'];
}

function greetings($hour) {
    $results = "";
  if (6 <= $hour && $hour < 12 ) {
    $results = "おはよう";
  } elseif(12 <= $hour && $hour <18)
  {
    $results = "こんにちは";
  } else
  {
    $results = "こんばんわ";
  }
  return $results;
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <p>本文です。</p>
        <form method = "POST" action="test.php">
            <label>名前<input type="text" name="target_name" required></label>
            <input type="submit" name="送信">
        </form>
        <?php for($i = 0; $i < 10; $i++) { ?>
            <li> <?php print "3 ×". $i. '='. (3*$i);?></li>
        <?php }?>
        <p><?php print greetings($now_hour); ?></p>
        <p><?php print htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?></p>
    </body>
</html
