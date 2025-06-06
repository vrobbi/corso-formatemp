<?php
function   &getnewarray ()  {

$newarray  = array();

for($index=0;$index<50;$index++){


}
}
?>
<!DOCTYPE html>
<head>
<title>funzione con più return</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

print("<center><h3>funzione con restituzione riferimento</h3></center>");

$newarray = &getNewArray();
var_dump($newarray);
print("</div>");


?>


</body>
</html>
