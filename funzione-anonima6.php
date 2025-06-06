
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

$input = array(1, 2, 3, 4, 5, 6);

// Crea una nuova funzione anonima e la assegna a una variabile
$filter_even = function($item) {
    return ($item % 2) == 0;
};

// La funzione nativa array_filter accetta i dati e la funzione
$output1 = array_filter($input, $filter_even);

// La funzione non dev'essere per forza assegnata a una variabile. Anche questo è valido:
$output2 = array_filter($input, function($item) {
    return ($item % 2) == 0;
});

print_r($output1);

?>


</body>
</html>
