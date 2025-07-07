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
$sql = "DELETE FROM products WHERE `products`.`ProductID` = '1' ";

if ($conn->query($sql) === TRUE) {
    echo json_encode( " NEW record created successfully");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>