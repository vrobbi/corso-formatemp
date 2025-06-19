<?php
class veicolo
{

    public $motoreacceso;

    //
    public function __construct()
    {

        print("Adesso ho un nuovo veicolo (costruttore)<br />");
        $this->motoreacceso = false;
    }

    public function accendi()
    {
        print("<br />accendo il motore del mio nuovo veicolo<br />");
        $this->motoreacceso = true;
    }

    public function statomotore()
    {

        if ($this->motoreacceso) {
            print("Il motore del veicolo è  acceso") . "<br />";

        } else {
            print("Il motore del veicolo è  spento") . "<br />";

        }

    }

}

class auto extends veicolo
{

    public function accendi()
    {
        print("Accendo il motore dell'auto<br />");

        $this->motoreacceso = true;

    }

}

?>
<html>
    <head>
        <title>Definizione di classe</title>
</head>
<body>
    <?php

$nuovoveicolo = new veicolo();

$nuovoveicolo->statomotore();

$nuovoveicolo->accendi();

$nuovoveicolo->statomotore();

$auto = new auto();

$auto->accendi();

$auto->statomotore();

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