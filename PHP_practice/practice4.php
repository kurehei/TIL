<?php
class Character {
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

// 継承
class Slime extends Character {
  public static $type= "スライム";

  static function description() {
    print self::$type.'はこのゲームの最弱キャラクターです' . PHP_EOL;
  }
}

class Hero extends Character {
  public static $type = "勇者";

  static function description()
  {
    print self::$type.'はこのゲームの最弱キャラクターです' . PHP_EOL;
  }
}

Slime::description();
Hero::description();

$slime = new Slime(10,30,'A');
$hero = new Hero(1000,30);

$slime->attack($hero);
$hero->attack($slime);

print get_class($slime).PHP_EOL;
?>
