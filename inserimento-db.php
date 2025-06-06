<!DOCTYPE html>
<head>
<title>Inserimento nel database</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="inserimento nel database">
</head>
<body>



<?php
 error_reporting(E_ALL ^ E_NOTICE);
   
    $host = "localhost";
    $user = "formauser";
    $pass = "formapass123";
    $dbname = "formatemp";   
    $link = mysqli_connect($host, $user, $pass, $dbname);

  /*  $ilnome =  $_POST['nome'];
    $ilcognome =  $_POST['cognome'];
    $mail =  $_POST['email'];   */
   

   

     $safe_nome = mysqli_real_escape_string($link, $_POST['nome']);

     $safe_cognome = mysqli_real_escape_string($link, $_POST['cognome']);

     $safe_mail = mysqli_real_escape_string($link, $_POST['email']);

      if (isset($safe_nome) && $safe_nome  != "") {

   $sql="INSERT INTO utenti(name,email,surname) VALUES('" . $safe_nome."','". $safe_mail. "','" . $safe_cognome . "')";
   $res = mysqli_query( $link,$sql) or die ($link);

   }


  
   // $link = mysqli_connect($host, $user, $pass, $dbname);

    $sql="SELECT * FROM utenti";


    $result = mysqli_query($link,$sql);
   // var_dump($result);
    if(!$result){
   
    echo 'Query failed';
}
if (mysqli_num_rows($result) > 0)  {
//$riga1 = mysqli_fetch_assoc($result);
$contaitem = 0;
?>
<span style='text-align:center;margin-top:50px;'>
    <?php
while ($riga1  = mysqli_fetch_assoc($result)) {
$contaitem = $contaitem +1;
 


echo "<h3> " . $contaitem . ") Il nome è " . $riga1['name']. ", cognome " .$riga1['surname']." ,  e la mail è " .  $riga1['email']. "</h3>" ;
}
}
?>
 </span>   
   




    <form action='inserimento-db.php' method='POST' style='text-align:center;margin-top:50px;'>

	        
	         <span>inserisci il nome </span><input type='nome' size=20 name='nome' /><br />
             <span>inserisci il cognome </span><input type='cognome' size=20 name='cognome' /><br />
             <span>inserisci la mail </span><input type='email' size=20 name='email' /><br />
             <button type=submit style='font-size:11px'>inserisci</button>

		   </form>
        
        
        
        
        
        </body>
   

</html>