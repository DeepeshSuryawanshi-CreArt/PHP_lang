<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "<pre>";
// print_r($conn);
var_dump($conn);
echo "</pre>";

mysqli_close(mysql: $conn);