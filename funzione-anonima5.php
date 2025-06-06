
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

$message = 'hello';

// Nessun "use"
$example = function () {
    var_dump($message);
};
$example();

// Eredita $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

// Il valore della variabile ereditata è da quando la funzione
// è definita, non quando chiamata
$message = 'world';
$example();

// Resetta il messaggio
$message = 'hello';

// Eredita per riferimento
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Il valore cambiato nel contesto del genitore
// è riflesso all'interno della chiamata della funzione
$message = 'world';
$example();

// Le closure possono anche accettare argomenti regolari
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");

// La dichiarazione del tipo di ritorno viene dopo la clausola use
$example = function () use ($message): string {
    return "hello $message";
};
var_dump($example());

?>


</body>
</html>
