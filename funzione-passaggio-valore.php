<?php
function   swap ($a, $b)  {

print("*** inizio della swap:   a=$a b=$b<br />");

$temp = $a;
$a=$b;
$b=$temp;
print("*** Fine della swap: a=$a - b=$b<br />");

}
?>
<!DOCTYPE html>
<head>
<title>Passaggio parametri per valore</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

$a=12;
$b=34;
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

print("Scambio di parametri per valore <br /><br />");

print("Valori iniziali: a=$a - b=$b<br  /> <br /><br />");

swap($a,$b);

print("Dopo la swap: a=$a - b=$b<br />");





print("</div>");


?>


</body>
</html>
