<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time</title>
</head>
<?php
date_default_timezone_set("Asia/Kolkata");
?>

<body>
    <?php
    echo "The time is " . date("h:i:sa");
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("l");
    ?>
    <br>
    &copy; 2010-<?php echo date("Y"); ?>
    <p>Time of the this time</p>
    <?php
    echo "The time is " . date("h:i:sa");
    ?>
</body>

</html>