<!DOCTYPE html>
<head>
<title>Espressioni regolari</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php

echo "<center><h2> Le espressioni regolari </h2></center>";

echo "<div style='color:red;background-color:yellow;text-align:center;width:400px;margin:0 auto'> ";
$pattern = "/^(\d*)-(\d*)$/";
   

 if (!preg_match($pattern, '340-8652066', $result)) { 
    echo "Numero non valido"; 
} else { 

    $prefisso = $result[1]; $numero = $result[2];
    echo "Numero è valido"; }
?>

</div>
</body>
</html>
