<?php
require "db.php";
$query = "
    INSERT INTO myguest (firstname, lastname, email) 
    VALUES ('Ankit', 'Patel', 'ankit.seo@gmail.com')
";
//creating table;
if(mysqli_query($conn,$query)){
    $last_id = mysqli_insert_id($conn);
    echo "Data inserted Sucessfully, last_id is $last_id <br/>";
}else{
    echo "Error in Processing". mysqli_error($conn) ;
}

echo "Process complete";