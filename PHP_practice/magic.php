<?php

namespace TechAcademy\RPG\Characters;
//必要なメソッドなどを必要なクラスに適用させるのがトレイと
trait Magic {
  function magic_attack($character) {
    print $this->name() . 'が' . $character->name(). 'を魔法攻撃した'.PHP_EOL;
    $character->hp = $character->hp - $this->power;
    if($character->hp <= 0 ) {
      $this->defeat($character);
    }
  }
}
?>
