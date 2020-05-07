<?php
  class Silme {
    // public はアクセス権
    // staticをつけると、クラスから直接プロパティをアクセスできる
    public $hp;
    public static $type = 'aaa';
    public $suffix = '';
    // 関数
    function __construct($suffix,$hp)
    {
      return $this->suffix = $suffix;
      return $this->hp = $hp;
    }
    function name() {
      return $this->type. $this->suffix;
    }
    function run() {
      $this->hp -= 20;
      if($this->hp > 50) {
        print '残りは'. $this->hp. 'だ'.PHP_EOL;
        print $this->name(). 'はまだ逃げない'.PHP_EOL;
      } else {
        print '残りはない'.PHP_EOL;
        print $this->name(). 'が'. '逃げた'.PHP_EOL;
      }
    }
    //この$thisは、オブジェクち自信を指す、$this->nameとは、$slime->nameと同じ意味
    function attack($character_name) {
      print $this->name() . 'が' . $character_name. 'を攻撃した'.PHP_EOL;
    }
    // クラスメソッド
    static function sleep() {
      print self::$type.'は眠った'.PHP_EOL;
    }
  }
//クラスメソッドは、インスタンス化しなくても呼ぶことができる->　クラスから直接呼べる
  Silme::sleep();
?>
