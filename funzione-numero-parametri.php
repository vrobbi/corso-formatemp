<?php
function   concatena ()  {

for($i = 0;$i<func_num_args();$i++) {

$result = $result . func_get_arg($i);

}

return  $result;

}
?>
<!DOCTYPE html>
<head>
<title>Passaggio parametri con valore default</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
print(concatena("un solo parametro<br />"));
print(concatena("chiamata ","con tre -","parametri<br />"));
print(concatena("questa ","è ","una ","chiamata ", "con sei ", "parametri<br />"));



print("</div>");


?>


</body>
</html>
