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
    
    // $link = mysqli_connect($host, $user, $pass, $dbname);
    $conn = new mysqli($host, $user, $pass, $dbname);

// Create connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
