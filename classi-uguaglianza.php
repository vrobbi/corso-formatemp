<?php
/*
Il motore PHP fornisce due diversi operatori per la verifica di uguaglianza  tra variabili:
    ==; operatore che verifica uguaglianza tra variabili
    ===; operatore che verifica l'identicità  tra variabili

    il concetto di uguaglianza prevede la verifica che il valore delle 2 variabili sia lo stesso, mentre 
    il concetto di identicità  prevede anche la verifica che si tratti esattamente della stessa variabile, cioè
    del puntamento alla stessa locazione di memoria contenente l'informazione che stiamo trattando.
    Lavorando con gli oggetti è lecito aspettarsi che il motore PHP metta a disposizione degli operatori  per la verifica di 
    uguaglianza e di identità, e in effetti  è proprio così. Vediamo questo esempio:
*/

class veicolo {


    private $marca;
    public function __construct($marca) {
$this->marca =$marca;
print("<br />adesso ho il nuovo veicolo $marca");

    }
}


?>
<html>
    <head>
        <title>uguaglianza e identità</title>
</head>
<body> 
    <?php

    $veicolo1 = new veicolo("FIAT");
    $veicolo2 = new veicolo ("FORD");
     $veicolo3 = new veicolo ("FORD");
     $veicolo4 = $veicolo1; 

     print("<BR /><BR /><BR />");
if($veicolo1==$veicolo2) {
    print('$veicolo1 e $veicolo2 sono uguali<br />');
}
    else { print('$veicolo1 e $veicolo2 '.'NON sono uguali<br />');}

    if($veicolo1===$veicolo2) {
    print('$veicolo1 e $veicolo2 '.'sono IDENTICI<br />');
} else {
print('$veicolo1 e $veicolo2 '.'NON sono IDENTICI<br />');
}

if ($veicolo1==$veicolo3)  {
print('$veicolo1 e $veicolo3 sono uguali<br />');

}else {
print('$veicolo1 e $veicolo3 NON sono uguali<br />');

}

if ($veicolo1===$veicolo3)  {
print('$veicolo1 e $veicolo3 sono IDENTICI<br />');

}else {
print('$veicolo1 e $veicolo3 NON sono identici<br />');

}

if ($veicolo1==$veicolo4)  {
print('$veicolo1 e $veicolo4 sono uguali<br />');

}else {
print('$veicolo1 e $veicolo4 NON sono uguali<br />');

}

if ($veicolo1===$veicolo4)  {
print('$veicolo1 e $veicolo4 sono IDENTICI<br />');

}else {
print('$veicolo1 e $veicolo4 NON sono IDENTICI<br />');

}

if ($veicolo2==$veicolo3)  {
print('$veicolo2 e $veicolo3 sono UGUALI<br />');

}else {
print('$veicolo2 e $veicolo3 NON sono UGUALI<br />');

}

if ($veicolo2===$veicolo3)  {
print('$veicolo2 e $veicolo3 sono IDENTICI<br />');

}else {
print('$veicolo2 e $veicolo3 NON sono IDENTICI<br />');

}

 



/*  OUTPUT 
adesso ho il nuovo veicolo FIAT
adesso ho il nuovo veicolo FORD
adesso ho il nuovo veicolo FORD


$veicolo1 e $veicolo2 NON sono uguali
$veicolo1 e $veicolo2 NON sono IDENTICI
$veicolo1 e $veicolo3 NON sono uguali
$veicolo1 e $veicolo3 NON sono identici
$veicolo1 e $veicolo4 sono uguali
$veicolo1 e $veicolo4 sono IDENTICI
$veicolo2 e $veicolo3 sono UGUALI
$veicolo2 e $veicolo3 NON sono IDENTICI

************************************

In questo esempio, il cui output è qui sopra, viene definita una classe veicolo e,
nello script principale, vengono definite  quattro istanze diverse della classe-
La prima la seconde e la terza  sono create attraverso l'operatore  new, ma soltanto
$veicolo2 e $veicolo3 hanno lo stesso parametro del costruttore, il che si traduce nell'avere lo
stesso valore all'interno della proprietà marca.
La quarta istanza, invece,  viene creata associando un nuovo nome di variabile, veicolo4, a un nuovo
oggetto già esistente e istanziato.  quello che segue nello script è una serie di operazioni di confronto
che vengono svolte utilizzando gli operatori visti in precedenza per le variabili e che hanno  il
seguente comportamento:

l'operatore == verifica l'uguaglianza  tra gli oggetti e restituisce TRUE solo nel caso in cui tutte le proprietà interne
degli oggetti siano uguali.;

Loperatore === verifica l'identicità  degli oggetti e restituisce TRUE solo nel caso in cui le due variabili puntino
in effetti allo stesso oggetto.

Da questo si deduce che:

veicolo1 e veicolo2 non sono uguali e quindi non impicitamante non sono identici, in quanto hanno un valore ben diverso 
per la proprietà marca.

veicolo1 e veicolo3  non sono  uguali  e quindi implicitamente non sono identici in quanto hanno un valore ben diverso 
per la proprietà marca.

veicolo1 e veicolo4 sono uguali e sono anche identici in quanto sono due variabili che puntano alla stessa istanza 
dello stesso oggetto.

veicolo2  e veicolo3  non sono uguali  in quanto hanno  lo stesso valore  per la proprietà marca, ma non sono identici
inquanto sono due istanze diverse della stessa  classe.
L'output dello script conferma quanto appena descritto e spiege quindi il comportamento degli operatori di verifica
per l'uguaglianza e l'identicità degli oggetti.







 */

?>
</body>
</html>


