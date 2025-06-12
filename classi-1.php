<?php
class persona {
  private $name;
  public $color;
   // funzione costruttore
  public function __construct($n) {
    $this->name = $n;
  
  }
     // metodi
  function getName()  {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }  
}
?>
<html>
    <head>
        <title>Definizione di una classe</title>
</head>
<body>
    <?php
$utente = new  persona('paperino');
print("il nome del primo oggetto è: <b>". $utente->getName()."</b><br /><br />");
$utente = new  persona('topolino');
print("il nome del primo oggetto è: <b>". $utente->getName()."</b><br /><br />");
?>
</body>
</html>
