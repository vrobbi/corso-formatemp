<!DOCTYPE html>
<head>
<title>operatore ternario</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<center>If else elseif</center>");
print("<div style='text-align:center;margin-top:50px;'>");
$anni =13;
$riduzione = FALSE;
$biglietto = 0;

if($anni <= 12){

print("Hai $anni anni, quindi hai diritto allo sconto<br />");

$biglietto = 10;

} elseif (($anni > 12)   && $riduzione )

    {
print ("Hai diritto a una riduzione");
   $biglietto = 15;
    }
   


else {
print("Non hai diritto a sconti o riduzioni");

$biglietto = 30;

}

print("<br /><b> Il tuo biglietto costa $biglietto euro</b>");


print("</div>");

?>
</div>

</body>
</html>
