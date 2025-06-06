<!DOCTYPE html>
<head>
<title>Avanzo della divisione</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php

//  risulta il resto della divisione
error_reporting(E_ALL ^ E_NOTICE);

$dividendo = 48;

$divisore =45;

$risultato = ($dividendo % $divisore);

print('<h1>Avanzo della divisione ' . $risultato .'</h2>');
?>

</body>
</html>