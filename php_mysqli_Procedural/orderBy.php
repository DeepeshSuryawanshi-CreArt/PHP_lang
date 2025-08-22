<?php
require "db.php";
$column = "reg_date";
$order = "DESC";
$query = "SELECT * FROM myguest ORDER BY $column $order";
$result = mysqli_query($conn,$query);
echo "Order by $column"."<br/>";
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