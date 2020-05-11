<?php

namespace TechAcademy\RPG\Characters;
require_once 'character2.php';
require_once 'magic.php';

class Hero extends Character2 {
  use Magic;
  public static $type = "勇者";

  static function description()
  {
    print self::$type.'はこのゲームの最弱キャラクターです' . PHP_EOL;
  }
}
?>
