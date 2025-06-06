<!DOCTYPE html>
<head>
<title>operatore ternario</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
echo "<center><h2> operatore ternario </h2></center>";

$number = 17;
?>
<div style='text-align:center;margin-top:50px;'>
    <?php
print(($number > 20) ? "Il numero $number è maggiore di 20" : "Il numero $number é minore o uguale a 20") ;


$x= 60;

$y =   72;


print("<br /><br  /><br  /><br  />Il maggiore tra x e y è :" . (($x>$y)? $x : $y));


   



?>
</div>

</body>
</html>
