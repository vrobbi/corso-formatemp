<!DOCTYPE html>
<head>
<title>Variabili  di variabili</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php
error_reporting(E_ALL ^ E_NOTICE);

$nome = "paperino";

$$nome ="topolino";

$paperino = "topolino";

print($nome."<br />");


print(${$nome}."<br />");


    ?>

</body>
</html>