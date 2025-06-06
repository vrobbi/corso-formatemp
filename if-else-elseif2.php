<!DOCTYPE html>
<head>
<title>costrutto if elseif else</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<div style='text-align:center;margin-top:50px;font-size:24px'>");
print("<center>Costrutto If else elseif</center><br /><br />");


$stringa = "Ciao,  world   europa    mondo";

if (strlen($stringa) < 10) {
    echo "La stringa ha meno di 10 caratteri.";
} elseif (strlen($stringa) >= 10 && strlen($stringa) <= 20) {
    echo "La stringa ha una lunghezza compresa tra 10 e 20 caratteri.";
} else {
    echo "La stringa ha più di 20 caratteri. Ne ha ". strlen($stringa);
}



print("</div>");

?>
</div>

</body>
</html>
