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
   
 


 

// Check connection




$host = "localhost";
    $user = "formauser";
    $pass = "formapass123";
    $dbname = "newformatemp";   
    
    $link = mysqli_connect($host, $user, $pass, $dbname);

// Create connection

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Paolo', 'Rossi', 'paolo@example.com')";

if (mysqli_query($link, $sql)) {
  $last_id = mysqli_insert_id($link);
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);
?>