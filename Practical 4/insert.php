<?php

include("Prac4_1.php");

// Check if table exists
$sql = "SHOW TABLES LIKE 'student'";
$result = mysqli_query($conn, $sql);

// Create table if it does not exist
if (mysqli_num_rows($result) == 0) {

    $sql = "CREATE TABLE student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        email VARCHAR(100)
    )";

    mysqli_query($conn, $sql);
}

// Insert data
if (isset($_POST['insert'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student (name, email)
            VALUES ('$name', '$email')";

    if (mysqli_query($conn, $sql)) {

        header("Location: Prac4_2.php");
        exit();

    }
    else {
        echo "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add Student</title>
</head>

<body>

<h1>Add New Student</h1>

<form method="post">

    Name:
    <input type="text" name="name" required>

    <br><br>

    Email:
    <input type="email" name="email" required>

    <br><br>

    <input type="submit" name="insert" value="Insert">

</form>

<br>

<a href="Prac4_2.php">Back</a>

</body>

</html>