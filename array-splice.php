<!DOCTYPE html>
<head>
<title>Array splice</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/*

array_splice  rimuove gli elementi specificati da offset e length
dall'array  input e li sostituisce con gli elementi dell'array replacement 
se fornito

*/
print("<div style='text-align:center;margin-top:50px;font-size:24px'>");

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
print_r(array_splice($a1,0,2,$a2));

print_r($a1);


print("</div>");
?>