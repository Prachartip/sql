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

$sql = "SELECT * FROM `products`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

  $row = $result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($row);
// output data of  each row
  /*while($row = $result->fetch_assoc()) {
    echo        
                 $row["ProductID"] 
                .$row["ProductName"]
                .$row["SupplierID"]
                .$row["CategoryID"] 
                .$row["Unit"]       
                .$row["Price"]
                ."<br>";
  }*/
} 
else {
  echo json_encode( "0 results" + $conn->error);
}
$conn->close();
?>
 