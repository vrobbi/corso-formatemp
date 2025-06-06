<!DOCTYPE html>
<head>
<title>ciclo do while break</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php

print("<div style='text-align:center;margin-top:50px;'>");
$conta  =2;

do  {

echo $conta ."<br />";

if  ($conta===12) {
echo "esco dal ciclo do while perchè sono arrivato al numero ". $conta  ."<br />";
break;
}

$conta++;


}  while ($conta < 20);

echo "fine  ciclo  do while";


?>

</div>
</body></html>