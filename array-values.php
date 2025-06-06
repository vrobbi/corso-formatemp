<!DOCTYPE html>
<head>
<title>array values</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>
la funzione array_values   restituisce tutti i valori dell'array input
<?php


error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px'>");

$data= array ("giorno"=> "23","mese"=> "ottobre");
print_r($data);
print("<br /><br />");
$ris = array_values($data);



print_r($ris);

// print($c);
print("</div>");
?>

