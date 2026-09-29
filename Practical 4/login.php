<?php

include("Prac4_1.php");

// Create user table
$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
)";

mysqli_query($conn, $sql);

// If already logged in
if (isset($_GET['username'])) {
    header("Location: home.php?username=" . $_GET['username']);
    exit();
}

if (isset($_GET['message'])) {
    echo "<p style='color:red'>" . $_GET['message'] . "</p>";
}

// Login
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        header("Location: home.php?username=$username");
        exit();

    } else {
        echo "<p style='color:red'>Invalid username or password</p>";
    }
}

?>

<h2>Login</h2>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    <input type="submit" name="login" value="Login">

</form>