<?php
function   somma ($a,$b)  {


return   $a + $b;

}
?>
<!DOCTYPE html>
<head>
<title>dichiarare una funzione</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
$valore1 =10;

$valore2 = 30;

print("<center><h3>funzione</h3></center>");

print("valore1 = $valore1 <br/>");

print("valore2 = $valore2 <br/>");

$somma = somma($valore1 , $valore2);

$somma = somma($valore1,$valore2);
print("somma = $somma");
print("</div>");



?>
</div>

</body>
</html>
