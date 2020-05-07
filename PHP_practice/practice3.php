<?php
  class Silme {
    // public はアクセス権
    public $hp = 100;
    public $name = "スライム";
    // 関数
    function attack($character_name) {
      print $this->name . 'が' . $character_name. 'を攻撃した'.PHP_EOL;
    }
  }

  $slimeA = new Silme();
  $slimeA->attack('主人公');
?>
