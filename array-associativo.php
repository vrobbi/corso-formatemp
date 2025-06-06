<!DOCTYPE html>
<head>
<title>array associativo</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>


<?php
print("<div style='text-align:center;margin-top:50px;'>");
$arrainomi = ['nome' => 'Mario', 'cognome' => 'Rossi', 'eta' => 35, 'lavoro' => 'programmatore'];

$arrainomi1 =array('nome' => 'Paolo', 'cognome' => 'Bianchi', 'eta' => 43, 'lavoro' => 'dirigente');




echo $arrainomi['nome']." "; // Mario
echo $arrainomi['cognome']."<br />"; 
echo $arrainomi['lavoro']."<br />"; // programmatore
echo $arrainomi['eta'];

echo "<br /><br /><br /><br />";

echo $arrainomi1['nome']." "; // Mario
echo $arrainomi1['cognome']."<br />"; 
echo $arrainomi1['lavoro']."<br />"; // programmatore
echo $arrainomi1['eta'];

echo "<br /><br />";

$numero = "30";

print ($arrainomi['eta']+ $numero);

//print_r(array_values($arrainomi));
print("</div>");

?>

</body>
</html>