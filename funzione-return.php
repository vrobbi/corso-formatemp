<?php
function   operazione ($a,$op,$b)  {

switch($op) {
case "più" : 
    return ($a + $b);

    case "meno" : 
    return ($a - $b);


    case "per" : 
    return ($a * $b);

     case "diviso" : 
    return ($a / $b);

    default : return ("Errore");

}


}
?>
<!DOCTYPE html>
<head>
<title>funzione con più return</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
$valore1 =10;

$valore2 = 2;

print("<center><h3>funzione con più return</h3></center>");

print("valore1 = $valore1 <br/>");

print("valore2 = $valore2 <br/>*****************<br />");

$operazioni = array("più","pippo","per","diviso", "meno");

foreach ($operazioni as $v)  {

    print("$valore1 $v $valore2 = ");
    print(operazione($valore1,  $v, $valore2));
    print("<br />");

}

print("</div>");



?>


</body>
</html>
