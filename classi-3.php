<?php
class mammifero {
  private $name;
  private $element;
   
      // metodi

   protected   function setName($n)  {
     $this->name =$n;
  }

     
  public function getName()  {
    return $this->name;
  }
protected function setElement($e) {
    $this->element = $e;
  }    

   function getElement()  {
    return $this->element;
  }
}    //   fine classe mammifero

class cane extends mammifero {
public function __construct($n) {

$this->setName($n);
$this->setElement("Terra");

}
}

class balena extends mammifero {
public function __construct($n) {

$this->setName($n);
$this->setElement("Acqua");

}




}
?>
<html>
    <head>
        <title>Definizione di ereditarietà</title>
</head>
<body>
    <?php

    $mydog = new cane("Mirka");
    print("Il mio  cane ". $mydog->getName() ." vive nell'elemento ". $mydog->getElement(). "<br />");

    $mywhale = new balena("Jona");
    print("La mia balena ". $mywhale->getName() ." vive nell'elemento ". $mywhale->getElement(). "<br />");

print("Fine script<br />");
?>
</body>
</html>
