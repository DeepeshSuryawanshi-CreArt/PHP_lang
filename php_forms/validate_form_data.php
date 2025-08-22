<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomr Validation</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = $commnetErr = "";
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";

    // function to validate the data and fix the values 
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // server process the request if method == post;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // name validation and error.
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        //email testing
        if (empty($_POST['email'])) {
            $emailErr = "Email is Required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email Address.";
            }
        }

        //website validation and error hamdling
        if (empty($_POST["website"])) {
            $websiteErr = "Website is Required.";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        // coment validation adn error;
        if (empty($_POST["comment"])) {
            $commnetErr = "Please give and Comment.";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        // gender validation and error handling;
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is Require.";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    ?>
    <div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Name: <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
            <span><?php echo $emailErr; ?></span>
            <br><br>
            Website: <input type="text" name="website" value="<?php echo $website; ?>">
            <span><?php echo $websiteErr; ?></span>
            <br><br>
            Comment: <textarea name="comment" rows="5" cols="40" value="<?php echo $comment; ?>"></textarea>
            <span><?php echo $commnetErr; ?></span>
            <br><br>
            Gender:
            <input type="radio" name="gender" value="female" <?php if($gender === 'female') echo 'checked'; ?>>Female
            <input type="radio" name="gender" value="male" <?php if($gender === 'male') echo 'checked'; ?>>Male
            <input type="radio" name="gender" value="other" <?php if($gender === 'other') echo 'checked'; ?>>Other
            <span><?php echo $gender; ?></span>
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <div>
        result: <br>
        <?php
        echo "<h2>Your Input:</h2>";
        echo "Name:" . $name;
        echo "<br>";
        echo "Email:" . $email;
        echo "<br>";
        echo "Website" . $website;
        echo "<br>";
        echo "Comment:" . $comment;
        echo "<br>";
        echo "Gender:" . $gender;
        ?>
    </div>
</body>
<script src="./script.js"></script>

</html>