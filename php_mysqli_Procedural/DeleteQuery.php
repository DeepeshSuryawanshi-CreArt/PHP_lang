<?php
require "db.php";

// Delete row where firstname = 'john'
$query = "DELETE FROM myguest WHERE firstname = 'john'";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "John deleted successfully<br/>";
    } else {
        echo "John was not found in the table<br/>";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn) . "<br/>";
}

// Debug info
echo "<pre>";
var_dump($result);
echo "Rows affected: " . mysqli_affected_rows($conn);
echo "</pre>";
