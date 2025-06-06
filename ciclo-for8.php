<!DOCTYPE html>
<head>
<title>esempi ciclo for</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>
Programma PHP che stampa i caratteri ASCII da 97 a 122.

<?php

echo "<h2> ciclo for </h2>";

for ($i = 97; $i <= 122; $i++) {
    echo chr($i) . " ";
}

?>
</body>
</html>
