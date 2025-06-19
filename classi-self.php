<?php
class utilities
{
    private static $counter = 0;

    public static function getcounter()
    {

        self::increse();
        return self::$counter;
    }

    private static function increse()
    {

        self::$counter++;
    }

}

?>
<html>
    <head>
        <title>Costrutto self</title>
</head>
<body> 
    <?php

    for ($i=0;$i<5;$i++){

        print("counter: ". utilities::getcounter() . "<br />");
    }


/*
Si tratta come si può vedere  di una piccola modifica dell'esempio
precedente : in particolareadesso il metodo getcounter utilizza al suo interno un altro metodo privato statico, increse.

per referenziarlo non è possibile utilizzare la sintassi :

$this->increse();

in quanto a runtime non esiste un oggetto  istanziato cui fare riferimento dall'interno della classe
attraverso l'oggetto implicito $this, ma  come si vede nella parte principale dello script  si utilizza
la sintassi:

self::increse();

servendosi quindi del costrutto self, che rappresenta la classe a runtime seguito dall'operatore:: che consente
di accedere ai membri statici di una classe.

In questo modo lo script, fa esattamente quello che ci aspettiamo incrementando il valore dell'attributo 
statico counter e stampando  il valore così ottenuto


output 
counter: 1
counter: 2
counter: 3
counter: 4
counter: 5


 */

?>
</body>
</html>


