<!DOCTYPE html>
<head>
<title>operazione di cast</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

// sfhsfhsfghhfg<br /><br /><br /><br />

<?php
error_reporting(E_ALL ^ E_NOTICE);

$intero = 30;
$condecimali =-123.37;

print('$intero + $condecimali = '. ($intero  + $condecimali)  . "<br />");
print('$intero + $condecimali = '. (int)($intero  + $condecimali)  . "<br />");

 // print('$intero + $condecimali = '. (boolean)($intero  + $condecimali)  . "<br />");
@$risultato = ($intero+$condecimali);

//print($risultato);
?>

</body>
</html>