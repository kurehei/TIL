<?php
namespace TechAcademy\RPG\Characters;

require_once 'character2.php';

class Slime extends Character2 {
  public static $type= "スライム";

  static function description() {
    print self::$type.'はこのゲームの最弱キャラクターです' . PHP_EOL;
  }
}
?>
