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
    $dbname = "newformatemp";   
    
    $link = mysqli_connect($host, $user, $pass, $dbname);


// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($link, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($link);
}

mysqli_close($link);
?>