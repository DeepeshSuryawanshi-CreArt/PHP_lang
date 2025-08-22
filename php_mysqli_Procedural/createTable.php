<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_mysql_learning";

// create connection 
$conn = mysqli_connect(hostname: $servername,username: $username,password: $password,database: $dbname);
if(!$conn){
    die("connectionf Failed.".mysqli_connect_errno());
}
echo "DB connected Sucessfullty.<br/>";

// QUERY
$query = "CREATE TABLE myguest (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(10) NOT NULL,
    lastname VARCHAR(10) NOT NULL,
    email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// CREATING TABLE
if (mysqli_query(mysql: $conn,query: $query)){
    echo "Guest table Connected Sucessfully.";
}
else{
    echo "Error in creating Table".mysqli_errno($conn);
}

mysqli_close($conn);