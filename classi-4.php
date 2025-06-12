<?php
class veicolo {
  public $motoreacceso;   
      // metodi

  public function __construct() {

print("Adesso ho un nuovo veicolo<br />");
$this->motoreacceso = false;
}

     
  public function accendi()  {
    print("<br />accendo il motore del mio nuovo veicolo<br />");
    $this->motoreacceso =true;
  }
public function statomotore()  {
  
    if($this->motoreacceso){
    print("Il motore è  acceso") . "<br />";

    }else{
     print("Il motore è  spento") . "<br />";

    }
    
  } 
  
}    //   fine classe mammifero

class auto extends veicolo {

   
public function accendi() {

 print("accendo il motore dell'auto"). "<br />";   
 $this->motoreacceso = true;


}
}


?>
<html>
    <head>
        <title>Definizione di overloading</title>
</head>
<body>
    <?php

    $veicolo = new veicolo();
    $veicolo->accendi();
    $veicolo->statomotore();
    print("<br />");

    $auto = new auto();
    $auto->accendi();
    $auto->statomotore();

  
print("Fine script<br />");
?>
</body>
</html>
