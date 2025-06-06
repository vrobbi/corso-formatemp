
<!DOCTYPE html>
<head>
<title>funzione anonima</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");
$array = [2, 4, 6];

array_map(function($val) {
	echo ($val * 3)."<br />";
}, $array);


print("<br />");
?>


</body>
</html>
