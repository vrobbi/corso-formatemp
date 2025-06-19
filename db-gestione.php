<!DOCTYPE html>
<head>
<title>Inserimento nel database</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="lettura inserimento aggiornamento e cancellazione nel database">
</head>
<body>



<?php
 error_reporting(E_ALL ^ E_NOTICE);
   
    $host = "localhost";
    $user = "formauser";
    $pass = "formapass123";
    $dbname = "newformatemp";   
    $link = mysqli_connect($host, $user, $pass, $dbname);

    if (isset($_POST['aggemail']) && is_numeric($_POST['aggid'])) {

    $aggemail =  mysqli_real_escape_string($link,$_POST['aggemail']);
    $aggnome =    mysqli_real_escape_string($link,$_POST['aggfirstname']);
    $aggcognome =  mysqli_real_escape_string($link,$_POST['agglastname']);
    $aggid= (int)$_POST['aggid'];

    $sql = "UPDATE  MyGuests set firstname='" .$aggnome. "',lastname='". $aggcognome. "',email='".$aggemail. "' WHERE id =".$aggid;    
    $res = mysqli_query($link,$sql) or die ("Aggiornamento non eseguito");

    $aggiornato="L'aggiornamento è stato eseguito";
    }



     if (isset($_GET['aggiorna']) && is_numeric($_GET['aggiorna'])) {

     $aggiornaiduser = (int)$_GET['aggiorna'];

   //  $sql="SELECT * FROM MyGuests WHERE id='7'";

     $sql="SELECT * FROM MyGuests WHERE id=".$aggiornaiduser;

      $res = mysqli_query($link,$sql) or die ("SELECT non eseguita");

       if(!$res){
   
    echo 'Query failed';
}else {
   $rigaupdate   = mysqli_fetch_assoc($res);
   $formupdate = "<form method='POST'  action ='db-gestione.php?aggiorna=".$rigaupdate['id']."'  style='text-align:center;margin-top:50px;'>
   Aggiorna il nome<input type ='text' value='".$rigaupdate['firstname']. "' name ='aggfirstname' /><br />
   Aggiorna il cognome<input type ='text' value='".$rigaupdate['lastname']."' name ='agglastname' /><br />
   Aggiorna la mail<input type ='text' name ='aggemail' value='".$rigaupdate['email']."' />
   <input type ='hidden' value='".$rigaupdate['id']. "' name ='aggid' /><br />
   <button type=submit style='font-size:11px'>Aggiorna i campi</button></form><br />".$aggiornato;
 
}
   
      }

  /*  $ilnome =  $_POST['nome'];
    $ilcognome =  $_POST['cognome'];
    $mail =  $_POST['email'];   */

    if (isset($_POST['delerow']) && is_numeric($_POST['delerow'])) {

    $deleiduser = $_POST['delerow'];

     $sql="DELETE FROM MyGuests WHERE id='". $deleiduser ."'";

      $res = mysqli_query($link,$sql) or die ("cancellazione non eseguita");


    }
   

   

     $safe_nome = mysqli_real_escape_string($link, $_POST['nome']);

     $safe_cognome = mysqli_real_escape_string($link, $_POST['cognome']);

     $safe_mail = mysqli_real_escape_string($link, $_POST['email']);

      if (isset($safe_nome) && $safe_nome  != "") {

   $sql="INSERT INTO MyGuests(firstname,  email,lastname) VALUES('" . $safe_nome."','". $safe_mail. "','" . $safe_cognome . "')";
   $res = mysqli_query( $link,$sql) or die ($link);

   }


  
   // $link = mysqli_connect($host, $user, $pass, $dbname);

  $sql="SELECT * FROM MyGuests";
 //    $sql="DELETE FROM MyGuests WHERE id=5";

 

    $result = mysqli_query($link,$sql);
   // var_dump($result);
    if(!$result){
   
    echo 'Query failed';
}
$chiudoform = "";
if (mysqli_num_rows($result) > 0)  {
//$riga1 = mysqli_fetch_assoc($result);
 echo "<form action='db-gestione.php' method='POST' style='text-align:center;margin-top:50px;'>";

 $chiudoform = "</form>";

$contaitem = 0;
?>
<span style='text-align:center;margin-top:50px;margin:0 auto'>
    <?php
while ($riga1  = mysqli_fetch_assoc($result)) {
   $radiobutton ="<a href=db-gestione.php?aggiorna=" .$riga1['id'].">modifica la riga</a><input type='radio' name='delerow' value='".$riga1['id']. "' />";
//$contaitem = $contaitem +1;
 


echo $radiobutton ." Il nome è " . $riga1['firstname']. ", cognome " .$riga1['lastname']." ,  e la mail è " .  $riga1['email']. "<br />" ;
}
}
?>

	        
	         
             <button type=submit style='font-size:11px'>Cancella la riga selezionata</button>

		   </form>
 </span>   
   




    <form action='db-gestione.php' method='POST' style='text-align:center;margin-top:50px;'>

	        
	         <span>inserisci il nome </span><input type='nome' size=20 name='nome' /><br />
             <span>inserisci il cognome </span><input type='cognome' size=20 name='cognome' /><br />
             <span>inserisci la mail </span><input type='email' size=20 name='email' /><br />
             <button type=submit style='font-size:11px'>inserisci</button>

		   </form>

         <?php

  echo  $formupdate;

?>
        
        
        
        
        
        </body>
   

</html>