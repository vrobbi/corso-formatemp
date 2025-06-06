<?php
function cube($n)
{
    return ($n * $n * $n);
}





?>

<!DOCTYPE html>
<head>
<title>Array 2</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php

print("<div style='text-align:center;margin-top:50px;'>");

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);

foreach ($b as $bvalue){
    print("<br /><br />");
    print('<br />valori nell\'array $b = '. $bvalue . "<br />" );
}
print("</div>");
?>