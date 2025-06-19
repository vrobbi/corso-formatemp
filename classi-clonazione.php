<?php
/*

$veicolo1 = new $veicolo();
$veicolo2 = $veicolo1;

 */
error_reporting(E_ALL ^ E_NOTICE);
class veicolo
{

    private $marca;
    private $modello;
    private $colore;
    private $targa;

    public function __construct($marca, $modello, $colore, $targa)
    {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->colore = $colore;
        $this->targa = $targa;

        print("adesso ho un nuovo veicolo $marca -  $modello  - $colore  - $targa <br />");

    }

    public function stampa ()
    {
     print("<br />");
     print ("* VEICOLO *<BR />");

       print ("Marca: ". $this->marca .";");
        print ("Modello: ". $this->modello .";");
         print ("Colore: ". $this->colore .";");
          print ("Targa: ". $this->targa .";");
            print ("<br />");

    }

    
}

?>
<html>
    <head>
        <title>CLONAZIONE STANDARD</title>
</head>
<body>
    <?php

$veicolo1 = new veicolo("FIAT", "Panda", "Rossa", "AB123CD");
$veicolo2  =  clone $veicolo1;
$veicolo1->stampa();   
$veicolo2->stampa();


print("<BR /><BR />");

if ($veicolo1 == $veicolo2) {
    print('$veicolo1 e $veicolo2 ' . "sono uguali<br />");
} else {print('$veicolo1 e $veicolo2 ' . "NON sono uguali<br />");}



?>
</body>
</html>


