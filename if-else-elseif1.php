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
print("<center>If else elseif</center><br /><br />");


$numero = 7;

if ($numero > 0) {
    echo "Il numero $numero è positivo.";
} elseif ($numero < 0) {
    echo "Il numero $numero è negativo.";
} else {
    echo "Il numero $numero è zero.";
}




print("</div>");

?>
</div>

</body>
</html>
