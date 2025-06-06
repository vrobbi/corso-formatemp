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

$username = 'dymissy86';
 if (!preg_match('/^[a-z0-9_-]{3,15}$/', $username)) { 
    echo "Lo username non è valido"; 
} else { 
    echo "Username valido"; }
?>

</div>
</body>
</html>
