<!DOCTYPE html>
<head>
<title>Ciclo do while con continue exit break</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<center>ciclo do while</center>");
print("<div style='text-align:center;margin-top:50px;'>");
$row= 3;
$maxrow = 50;
while  ($row < $maxrow) {

 
$maxrow--;

if($maxrow  === 30)  {
break;

 }

 print( "$maxrow <br />" );

} 

 print( "fuori dal ciclo  do while" );

print("</div>");

?>


</body>
</html>
