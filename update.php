<?php

header("Access-Control-Allow-Origin: localhost");
header("Content-Type: application/json; charset=UTF-8");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajbo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = " UPDATE `products`
SET `ProductName` = 'chais new',
`Unit` = 'dsddsddd po',
`Price` = '18.55'
WHERE `products`.`ProductID` = '1' ";

if ($conn->query($sql) === TRUE) {
  echo  "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>