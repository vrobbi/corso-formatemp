<!DOCTYPE html>
<head>
<title>stringhe</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php
// questo e un commeto su una riga


error_reporting(E_ALL ^ E_NOTICE);

/*

+   somma  di tipo   binario

-   sottrazione
*   moltiplicazione
/   divisione

%  modulo

++ pre post   incremento

--  pre post   decremento
/   

operatori  relazionali

==    uguale

===    identico

<    minore di

>   maggiore di

>=  non minore di

!=   non uguale 


!==  non identico

*/






$stringa = "Questo è un esempio di stringa. esempio 2 volte";
$stringa_modificata = str_replace("esempio", "esercizio", $stringa);

echo $stringa;




echo "<div style='color:red;background-color:yellow;text-align:center;width:400px;margin:0 auto'> " . $stringa_modificata . "</div>" ;

?>




<div style='text-align:center;margin-top:50px;'>
  <?php



?>
</div>
</body>
</html>