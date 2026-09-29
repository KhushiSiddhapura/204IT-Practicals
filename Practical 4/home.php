<?php

include("Prac4_1.php");

if (!isset($_GET['username'])) {

    header("Location: login.php?message=Please login first");
    exit();

}

$username = $_GET['username'];

?>

<h1>Home Page</h1>

<h3>Welcome <?php echo $username; ?></h3>

<p>You are successfully logged in.</p>

<a href="logout.php">Logout</a>