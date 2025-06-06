<!DOCTYPE html>
<head>
<title>Ciclo do while</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<center>ciclo do while</center>");

/*
 do {
 codice da eseguire se la condizione è vera
 
 }


while (condizione)


*/

print("<div style='text-align:center;margin-top:50px;'>");

$i=20;
do {
print(--$i . "<br />" );

if($i==13){

    print("sono arrivato a " .$i . "<br />" );

}

}  while ($i>10);

print("</div>");

?>


</body>
</html>
