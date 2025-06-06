<!DOCTYPE html>
<head>
<title>esempi ciclo for</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>
Programma PHP che calcola la media di una serie di numeri.


<?php

echo "<h2> ciclo for </h2>";

$numbers = [10, 5, 8, 12, 6];
$total = 0;
$count = count($numbers);

for ($i = 0; $i < $count; $i++) {
    $total += $numbers[$i];
}

$average = $total / $count;
echo "La media dei numeri è: " . $average;


?>
</body>
</html>
