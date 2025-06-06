<!DOCTYPE html>
<head>
<title>array reverse</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>
la funzione array_reverse   restituisce un array con gli elementi invertiti. <br />
se il parametro opzionale è ipostato a true le chiavi vengono mantenute
<?php


error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px'>");

// $input = array("Aprile",4,array("Oggi","Martedi"));
$inputmesi = array("Gennaio","Febbraio","Marzo","Aprile");

print_r($inputmesi);
print("<br /><br />");
$ris = array_reverse($inputmesi);

$ris_chiavi =array_reverse ($inputmesi,TRUE);


print_r($ris);
print("<br /><br /><br /><br />");
print_r($ris_chiavi);
// print($c);
print("</div>");
?>

