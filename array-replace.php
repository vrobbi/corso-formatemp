<!DOCTYPE html>
<head>
<title>Array unshift</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php


/*
The array_replace() function replaces the values of the first array with the values from following arrays.

*/

print("<div style='text-align:center;margin-top:50px;'>");


$a1=array("a"=>"red","b"=>"green", "c"=>"yellow", "d"=>"blue");
$a2=array("a"=>"orange","burgundy");
$a3 = array_replace($a1,$a2);

print_r($a3);

print("</div>");
?>