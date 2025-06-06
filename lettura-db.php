<!DOCTYPE html>
<head>
<title>Corso Forma TEMP</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>



<?php
error_reporting(E_ALL ^ E_NOTICE);
 $accedi   =   $_POST['accesso'];
if ($accedi == "miapass") {
  
    $host = "localhost";
    $user = "formauser";
    $pass = "formapass123";
    $dbname = "formatemp";   

  /*  $host = "localhost";
    $user = "root";
    $pass = $accedi;
    $dbname = "francescodb";    */
    $link = mysqli_connect($host, $user, $pass, $dbname);

    $sql="select * from utenti";


    $result = mysqli_query($link,$sql) or die (mysqli_error($link));
if (mysqli_num_rows($result) > 0)  {
//$riga1 = mysqli_fetch_assoc($result);
$contaitem = 0;
while ($riga1  = mysqli_fetch_assoc($result)) {
$contaitem = $contaitem +1;
 


echo "<h3> " . $contaitem . ") Il nome è " . $riga1['name']. " e la mail è " .  $riga1['email']. "</h3>" ;
}
}
    
   
}else {

    ?>

    <form action='index.php' method='post' style='text-align:center;margin-top:50px;'>

	         <p>Attenzione! Non si è abilitati a visualizzare questa pagina, per favore immettere la password :</p>

	         <input type='password' size=10 name='accesso'>&nbsp;&nbsp;<button type=submit style='font-size:11px'>Accedi</button>

		   </form></body>



<?php
}

    ?>
<br />

</html>