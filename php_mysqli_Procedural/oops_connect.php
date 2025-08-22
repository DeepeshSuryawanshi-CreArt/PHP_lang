<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "<pre> <h2>"; 
var_dump(value: $conn);
echo "</h2> </pre>";

$conn->close();
