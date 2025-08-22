<?php
require "db.php";
$query = "UPDATE myguest SET lastname = 'Namdev' WHERE id = 9";
if(mysqli_query($conn,$query)){
    echo "Record updated Sucessfully.<br/>";
}
else{
    echo "error Updating Process". mysqli_errno($conn);
}
mysqli_close($conn);