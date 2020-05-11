<?php
namespace TechAcademy\RPG;

require_once 'hero.php';
require_once 'slime.php';


use TechAcademy\RPG\Characters\Hero;

class Game {
  static function start(){
    \TechAcademy\RPG\Characters\Slime::description();
    Hero::description();
    $slime = new Characters\Slime(10,30,'A');
    $hero = new Hero(1000,30);
    $slime->attack($hero);
    $hero->attack($slime);
    $hero->magic_attack($slime);
  }
}

Game::start();
?>
