<?php
error_reporting(E_ALL ^ E_NOTICE);

/*
Le interfacce, come le classi astratte, sono delle classi speciali 
che non possono essere istanziate ma soltanto implementate. 
Praticamente esse delineano la struttura di una classe. La
dichiarazione di un'interfaccia è simile a quella di una classe, 
ma include soltanto metodi (privi di implementazione) e costanti. 
Non è inoltre possibile specificare le proprietà.

Qualsiasi classe implementi un'interfaccia, 
avrà le costanti definite automaticamente 
e dovrà definire a suo volta i metodi dell'interfaccia, 
i quali, sono tutti astratti e vanno tutti implementati.
Implementare un'interfaccia
Per implementare un'interfaccia in una classe si utilizza la keyword implements

Le interfacce rappresentano un ottimo strumento per definire i prototipi delle classi
che intendiamo disegnare e ci consentono di individuare comportamenti comuni a livello di descrizione
ma non di implementazione: questo aspetto viene demandato completamente alle classe reali che implementano l'intefaccia.

Per le interfacce è possibile usare l'ereditarietà multipla. Per estendere un'interfaccia in un'altra,
 come per le classi, si utilizza infatti la keyword extends.

Nell'esempio riportato di seguito, la nuova interfaccia A,
 conterrà tutti i metodi dell'interfaccia B e C,
  a cui si aggiungeranno quelle nuove, definite da A.

*/
interface forma {

   
  function area();
   function perimetro();

}


class poligono
{

  public $altezza;
  public $larghezza;

   

    public function __construct($altezza, $larghezza)
    {
        $this->altezza = $altezza;
        $this->larghezza = $larghezza;      

     
    }   
}


 class rettangolo extends poligono  implements forma  {


    function area()  {

        return ($this->altezza * $this->larghezza);
    }

    function perimetro() {


        return   ((2* $this->altezza)+ (2*$this->larghezza)) ;
    }

        
    }

    class triangolo extends poligono  implements forma {
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
        <title>INTERFACCE</title>
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


