<!DOCTYPE html>
<head>
<title>Array unshift</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php


/*
array_implode
converte  un array in stringa con un separatore o senza separatore



*/

print("<div style='text-align:center;margin-top:50px;'>");

$cars = array('fer' => 'Ferrari', 'ben' => 'Benz', 'bmw' => 'BMW');

array_unshift($cars, 'Volvo');

var_dump($cars);

print("</div>");
?>