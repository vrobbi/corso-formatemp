<?php
function rsum($v, $w){
    $v += $w;
    return $v;

}
?>

<!DOCTYPE html>
<head>
<title>array 1</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>


<?php

print("<div style='text-align:center;margin-top:50px;font-size:24px'>");

$a=array(1,2,3,4,5);

$x = array();
$b = array_reduce($a,"rsum");
$c = array_reduce($x,"rsum",1);
print($b);
// print($c);
print("</div>");
?>

