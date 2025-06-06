<!DOCTYPE html>
<head>
<title>le costanti</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php
error_reporting(E_ALL ^ E_NOTICE);



define ("TEST_COSTANTE", "valore immutabile");


print('Il valore della costante  è <h3>' . TEST_COSTANTE . '</h3>');


define ("TEST_COSTANTE", "valore cambiato");


print('Il valore della costante  è <h3>' . TEST_COSTANTE . '</h3>');


?>

<div style='text-align:center;margin-top:50px;'>
  <?php




?>
</div>
</body>
</html>