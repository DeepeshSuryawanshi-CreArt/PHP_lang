<?php
require "db.php";
$query = "SELECT * FROM myguest WHERE lastname = 'patel' ";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
    // Fetch and display data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"] . " | ";
        echo "Firstname: " . $row["firstname"] . " | ";
        echo "Lastname: " . $row["lastname"] . " | ";
        echo "Email: " . $row["email"] . " | ";
        echo "Registered: " . $row["reg_date"] . "<br>";
    }
} else {
    echo "No records found.";
}

mysqli_close($conn);