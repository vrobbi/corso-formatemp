<!DOCTYPE html>
<head>
<title>operazione di cast</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php
// error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;'>");
echo "<center><h2> array </h2></center>";
$stringacinque = 5357;


$arraistringhe  = array("stringa1","stringa2","pincopallino","stringa4",$stringacinque,"ultimo");

echo count($arraistringhe) ."<br />";


echo    "<h3>" . $arraistringhe[4]  ."</h3></div>";


?>