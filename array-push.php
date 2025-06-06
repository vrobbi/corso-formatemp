<!DOCTYPE html>
<head>
<title>Array push</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php


/*

accoda nuovi elementi dentro un array esistente;

*/

print("<div style='text-align:center;margin-top:50px;'>");


$cars = array('Ferrari', 'Benz', 'BMW');
array_push($cars, 'Volvo', 'Toyota');

print_r($cars);

print("</div>");
?>