<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
    echo "L'oggetto $this->name è stato creato<br/> ";
  }
  function __destruct() {
    echo "L'oggetto $this->name è stato distrutto";
  }
}

$apple = new Fruit("Apple");
?>