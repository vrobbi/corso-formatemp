
<!DOCTYPE html>
<head>
<title>funzione anonima</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
// definizione della chiusura 
 $funzione = function($var_a, $var_b) { 
    // valore di ritorno 
return $var_a * $var_b; }; 
// passaggio di parametri alla chiusura 
$risultato = $funzione(11,5); 
// stampa a video del risultato echo $risultato; 
print($risultato);
?>


</body>
</html>
