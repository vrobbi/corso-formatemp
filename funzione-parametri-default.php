<?php
function   chiama ($nome, $telefono='0123456789')  {

print("*** Chiamata telefonica<br />");
print("nome: $nome<br />");

print("Telefono: $telefono<br /><br />");

}
?>
<!DOCTYPE html>
<head>
<title>Passaggio parametri con valore default</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
chiama ("paperino","99999999");
chiama ("topolino","888888");
chiama ("Filiale");




print("</div>");


?>


</body>
</html>
