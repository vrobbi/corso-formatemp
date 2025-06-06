<!DOCTYPE html>
<head>
<title>Array slice</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/*

array_slice  estrae da un sottoinsieme di elementi specificati
attraverso i parametri offset e length li inserisce in un nuovo array

array array_slice(array input, int offset, int [length])

*/
print("<div style='text-align:center;margin-top:50px;font-size:24px'>");
$input = array("a","b","c","d","e");
print("Array in input ");
print_r($input );
print("<br /><br />");
print("Array in output ");
$output = array_slice($input, 2);
print_r($output );
print("<br /><br />");
print("Array in output ");
$output = array_slice($input, 2, -1);
print_r($output );

print("</div>");
?>