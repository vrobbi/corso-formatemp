
<!DOCTYPE html>
<head>
<title>funzione anonima</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
/* le closures di PHP permettono l'utilizzo della parola chiave use(), 
il suo scopo è quello di importare delle variabili, 
definite esternamente, 
all'interno della funzione anonima; 
in questo modo si evita il ricorso alla direttiva “global”,
 sarebbe infatti da considerarsi come una cattiva pratica il dichiarare come globale 
 una variabile locale ampliandone lo scope.

Un semplice esempio riguardante l’impiego di use() potrebbe essere il seguente:

*/

print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
// definizione della chiusura 
 $funzione = function($var_a, $var_b) { 
    // valore di ritorno 
return $var_a * $var_b; }; 
// passaggio di parametri alla chiusura 
$risultato = $funzione(11,5); 
// stampa a video del risultato echo $risultato; 
print($risultato);
?>


</body>
</html>
