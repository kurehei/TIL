<?php
require_once 'hero.php';
require_once 'slime.php';

class Game {
  static function start(){
    Slime::description();
    Hero::description();
    $slime = new Slime(10,30,'A');
    $hero = new Hero(1000,30);
    $slime->attack($hero);
    $hero->attack($slime);
  }
}

Game::start();
?>
