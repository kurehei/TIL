<?php

require_once 'character2.php';
class Hero extends Character2 {
  public static $type = "勇者";

  static function description()
  {
    print self::$type.'はこのゲームの最弱キャラクターです' . PHP_EOL;
  }
}
?>
