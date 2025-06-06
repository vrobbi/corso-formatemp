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


$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);


print("</div>");
?>