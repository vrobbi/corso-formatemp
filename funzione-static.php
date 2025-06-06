<?php
function   callCounter ()  {

 static $counter = 0;   
 $counter++;

print("La funzione callCounter è stata eseguita $counter volte<br /><br />");
}
?>
<!DOCTYPE html>
<head>
<title>variabile static</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

print("<center><h3>funzione con variabile static</h3></center>");

for($i=0;$i<10;$i++)  {

    callCounter ();

}


print("</div>");


?>


</body>
</html>
