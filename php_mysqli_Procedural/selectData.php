<?php
 require "db.php";

$query = "SELECT * from myguest ";
$result = mysqli_query($conn,$query);

if (mysqli_num_rows($result) > 0) {
    echo "<h3>Data Table</h3>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
    echo "<tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>email</th>
            <th>Date</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["firstname"] . "</td>
                <td>" . $row["lastname"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["reg_date"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}

echo "<pre>";
var_dump($result);
echo "</pre>";

mysqli_close($conn);