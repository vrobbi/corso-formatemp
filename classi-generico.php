<?php
class nomedellaclasse {

    public $ilmionome;

    function  set_name ($nome) {
    $ilmionome =  $nome;
    return $ilmionome;
    }

/*
    public function  __construct($n) {
    $this->ilmionome  =$n;
    echo $this->ilmionome;
    }
    */
  
}

?>
<html>
    <head>
        <title>Definizione di classe</title>
</head>
<body>
    <?php

    $nuovooggetto= new nomedellaclasse();

  $ilnuovonome = $nuovooggetto->set_name("giovanni");

  echo $ilnuovonome; 


  

    
?>
</body>
</html>
<?php

/*
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


}  */
?>