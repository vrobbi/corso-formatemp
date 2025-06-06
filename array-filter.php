<!DOCTYPE html>
<head>
<title>Array 2</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php

print("<div style='text-align:center;margin-top:50px;'>");


$cars = array(1 => 'Ferrari', 2 => 2, 3 => 'BMW');
var_dump(array_filter($cars, 'is_numeric'));

print("</div>");
?>