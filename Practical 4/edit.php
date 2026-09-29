<?php

include("Prac4_1.php");

$id = $_GET['id'];

// Get existing record
$sql = "SELECT * FROM student WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

// Update record
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE student
            SET name='$name', email='$email'
            WHERE id='$id'";

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
    <title>Edit Student</title>
</head>

<body>

<h1>Edit Student</h1>

<form method="post">

    Name:
    <input type="text"
           name="name"
           value="<?php echo $row['name']; ?>"
           required>

    <br><br>

    Email:
    <input type="email"
           name="email"
           value="<?php echo $row['email']; ?>"
           required>

    <br><br>

    <input type="submit" name="update" value="Update">

</form>

<br>

<a href="Prac4_2.php">Back</a>

</body>

</html>