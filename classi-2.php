<?php
class persona {
  private $name;
  
   // funzione costruttore
  public function __construct($n) {
    $this->name = $n;
  print("E' stato creato l'oggetto " . $this->name. "<br />");
  }
  public function __destruct() {
  
  print("L'oggetto " . $this->name. " è stato distrutto<br />");
  }
     // metodi

     /*
  function getName()  {
    return $this->name;
  }
  function setName($n) {
    $this->name = $n;
  }    */
}
?>
<html>
    <head>
        <title>Definizione di una classe con costruttore e distruttore</title>
</head>
<body>
    <?php
    print("inizio script<br />");

$utente = new  persona('paperino');
$utente = new  persona('topolino');
print("Fine script<br />");
?>
</body>
</html>
