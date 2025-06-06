<!DOCTYPE html>
<head>
<title>esempi ciclo for</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>
Programma PHP che stampa la tabella dei quadrati dei numeri da 1 a 20.

<?php

echo "<h2> ciclo for </h2>";

for ($i = 1; $i <= 20; $i++) {
    $square = $i * $i;
    echo $i . " * " . $i . " = " . $square . "<br>";
}

?>
</body>
</html>
