<?php
class utilities {
private static $counter =0;
public static $siteurl = "http://mysite.com";
const  ROOTPATH = "/appication/web/";

public static function getcounter(){
return  self::$counter++;

}

}

?>
<html>
    <head>
        <title>Membri statici</title>
</head>
<body>
    <?php

print("siteurl:" . utilities::$siteurl ."<br />");

print("ROOTPATH: " . utilities::ROOTPATH. "<br />");

for ($i=0;$i<5;$i++)

{
print("counter: ". utilities::getcounter(). "<br />");

}

 /*


utilities::getcounter();

utilities::ROOTPATH;

L'OPERATORE :: 
come si è potuto vedere in questa sede di esempi, per accedere a componenti statici di
una classe si utilizza l0peratore  :: al posto del classico operatore freccia ->

L'utilizzo di questa sintassi permette di specificare al motore PHP CHE L'OGGETTO CHE SI STA
referenziando è statico per la classe che si è indicata  e non c'è bisogno di istanziare un oggetto.
La sintassi corretta , in funzione dell'accesso tramite un oggetto istanziato o tramite la classe, pertanto
è la seguente:

$obj1 = new utilities;
$obj2 = new utilities;
$obj1->getcounter();
$obj2->getcounter();

 */


?>
</body>
</html>


