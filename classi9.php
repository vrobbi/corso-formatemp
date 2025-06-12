<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
    echo "The fruit  istanziato è $this->name and the color is $this->color.";
  }
  function __destruct() {
    echo "<br />The fruit distrutto è  $this->name and the color is $this->color.";
  }
}

$apple = new Fruit("Mela", "rossa");
?>