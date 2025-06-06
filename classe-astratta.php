<?php

abstract class Shape{
   public $color;

   abstract public function getArea():float;
   
   public function __construct($color){
     $this->color = $color;
   }

   public function getColor(){
     return $this->color;
   }
}

class Circle extends Shape{
   public $radius;

   public function __construct($color,$radius){
     parent::__construct($color);
     $this->radius= $radius;
   }

   public function getArea(): float{
     return $this->radius * $this->radius * 3.14;
   }
}

class Rectangle extends Shape{
   private $width;
   private $length;

   public function __construct($color,$width,$length){
     parent::__construct($color);
     $this->width = $width;
     $this->length = $length;
   }

   public function getArea(): float{
     return $this->width * $this->length;
   }
}
echo "<br />";
$t = new Rectangle("green", 10, 5);
echo $t->getArea();
echo "<br />";
$t = new Circle("red", 5);
echo $t->getArea();

?>
