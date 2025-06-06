<?php
function   setconto ()  {

    $contocorrente =  "244254867/ab";

print("Dentro la funzione il contocorrente è $contocorrente<br /><br />");
}
?>
<!DOCTYPE html>
<head>
<title>Visibilità delle variabili</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

print("<center><h3>Visibilità delle variabili</h3></center>");
$contocorrente =  "gadfw45624/fe";

setconto();

print("Fuori dalla funzione il conto corrente è $contocorrente");




print("</div>");


?>


</body>
</html>
