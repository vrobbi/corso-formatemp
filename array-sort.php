<!DOCTYPE html>
<head>
<title>Array push</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php


/*

mette in ordine alfabetico le chiavi o i valori

sort(): sort array by value in ascending order
asort(): sort array by value in ascending order
arsort(): sort array by value in descending order
ksort(): sort array by key in ascending order
krsort(): sort array by key in descending order
rsort(): sort array by value in descending order
uasort(): sort array by user-defined function in ascending order
usort(): sort array by user-defined function in ascending order


*/

print("<div style='text-align:center;margin-top:50px;'>");

$cars = array('fer' => "Ferrari", 'ben' => "Benz", 'bmw' => "BMW", 'vol' => "Volvo");

sort($cars);

var_dump($cars);

print_r($cars);

print("</div>");
?>