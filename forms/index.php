<form method="POST">
  Enter your name: <input type="text" name="username">
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"];
    echo "Hello, $user!";
}
?>
