<!DOCTYPE html>
<head>
<title>array 1</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>


<?php

$nomi[] = "paolo";
$nomi[] = "francesco";
$nomi[] = "maria";
$nomi[] = "roberto";
$nomi[] = 24626;
$nomi[] = "pino";
$nomi[] = "lorenzo";
print("<div style='text-align:center;margin-top:50px;'>");

echo "<br />***********************************************";


echo  "<h3>" . count($nomi)   ."</h3>";

for ($i=0; $i !=count($nomi); $i++)  {

    echo  "<h3>" . $nomi[$i]   ."</h3>";

}

print("</div>");
?>

