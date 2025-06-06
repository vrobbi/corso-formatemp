<!DOCTYPE html>
<head>
<title>Array pop</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/*

preleva l'ultimo valore da un array e lo inserisce in un nuovo array

L'array vecchio vine accorciato di 1

*/

print("<div style='text-align:center;margin-top:50px;font-size:24px'>");

$feriali = array("lunedi","martedi","mercoledi","giovedi","venerdi");

print('Prima della esecuzione di array_pop su $feriali<br />');

var_dump($feriali);

$giorno = array_pop($feriali);

print('<br />Dopo la esecuzione di array_pop su $feriali<br />');

var_dump($feriali);

print('<br /><br />stampa del nuovo array $giorno '. $giorno);

print("</div>");
?>