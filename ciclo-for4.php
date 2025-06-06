<!DOCTYPE html>
<head>
<title>esempi ciclo for</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php

echo "<h2> ciclo for </h2>";

$product =3;

for ($i = 1; $i <= 10; $i++) {
    $product *= $i;
    echo $product . " ";
}

echo "Il prodotto dei numeri da 3 a 10 è: " . $product;


?>
</body>
</html>
