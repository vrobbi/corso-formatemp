
<!DOCTYPE html>
<head>
<title>funzioni ricorsiva</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);


$sum = function($val1, $val2) {
    return $val1 + $val2;
};

echo $sum(3, 4); 

?>


</body>
</html>
