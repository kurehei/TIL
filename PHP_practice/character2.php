<?php
class Character2 {
  public static $type = "";
  public $suffix='';
  public $hp =1;
  public $power = 1;

  function __construct($hp,$power,$suffix='')
  {
    $this->hp = $hp;
    $this->power = $power;
    $this->suffix = $suffix;
  }

  function name() {
    return $this::$type. $this->suffix;
  }

  function attack($character) {
    print $this->name() . 'が' . $character->name(). 'を攻撃した'.PHP_EOL;
    $character->hp = $character->hp - $this->power;
    if($character->hp <= 0 ) {
      $this->defeat($character);
    }
  }

  function defeat($character) {
    $this->name()."が".$character->name()."を倒した";
  }

  static function description() {
    print 'このゲームのキャラクターです' . PHP_EOL;
  }
}
?>
