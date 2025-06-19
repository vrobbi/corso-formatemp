<?php
error_reporting(E_ALL ^ E_NOTICE);

/*
Le classi astratte e le interfacce sono strumenti per la progettazione orientata agli oggetti 
che consentono di definire comportamenti e tipi di dati senza fornire implementazioni complete. 
La principale differenza sta nel loro scopo e nelle limitazioni che impongono: 
Classi Astratte:
Definiscono una gerarchia di classi, in cui una classe astratta può essere estesa da altre classi 
per creare tipi più specifici. 
Possono contenere sia metodi astratti (senza implementazione) che metodi concreti (con implementazione). 
Non possono essere istanziate direttamente, ma possono essere utilizzate come basi per altre classi. 
Una classe può ereditare da una sola classe astratta. 

*/


abstract class poligono
{

  public $altezza;
  public $larghezza;

   

    public function __construct($altezza, $larghezza)
    {
        $this->altezza = $altezza;
        $this->larghezza = $larghezza;   

    }   

    abstract function area();
    abstract function perimetro();
}


 class rettangolo extends poligono  {


    function area()  {

        return ($this->altezza * $this->larghezza);
    }

    function perimetro() {


        return   ((2* $this->altezza)+ (2*$this->larghezza)) ;
    }

        
    }

    class triangolo extends poligono  {
    public  $ipo;

    function  __construct ($altezza, $larghezza)
    {
     $this->altezza = $altezza;

      $this->larghezza = $larghezza;

      $ipo = sqrt(($this->altezza * $this->altezza)+
      ($this->larghezza * $this->larghezza ));


    }

  function area() {

    return (($this->altezza * $this->larghezza) /2);
}

function perimetro() {

    return ($this->altezza + $this->larghezza + $ipo);
    
}    }

?>
<html>
    <head>
        <title>Classi astratte</title>
</head>
<body>


    <?php

    $ret= new rettangolo (10,10);
    print("Rettangolo altezza=" .$ret->altezza. " larghezza ". $ret->larghezza . "<br />");


    print("Area= " .$ret->area() . "<br />" );
     print("Perimetro= " .$ret->perimetro() . "<br />" );
     print("<br />");

     $tri = new triangolo(12,6);
     print("Triangolo altezza=" . $tri->altezza. " larghezza ".  $tri->larghezza . "<br />");

     print("area: ". $tri->area() . "<br />");
     print("perimetro: ". $tri->perimetro() . "<br />");



?>
</body>
</html>


