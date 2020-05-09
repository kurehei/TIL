<?php
class MethodChain {
  public $result = 1;

  function add($num) {
    $this->result += $num;
    return $this;
  }

  function minus($minus_num) {
    $this->result *= $minus_num;
    return $this;
  }
}


$mc = new MethodChain();
$mc->add(3)->minus(2);
print $mc->result . PHP_EOL;
?>
