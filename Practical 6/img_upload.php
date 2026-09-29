<?php

include("Connection.php");

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $mob = $_POST['mob'];

    $photo = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "uploads/" . $photo);

    $sql = "INSERT INTO registration (name, email, dob, mob, photo)
            VALUES ('$name', '$email', '$dob', '$mob', '$photo')";

    if (mysqli_query($conn, $sql)) {

        $id = mysqli_insert_id($conn);

        header("Location: profile.php?id=$id");
        exit();
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>

<h1>Registration Form</h1>

<form method="POST" enctype="multipart/form-data">

<table>

<tr>
    <td>Name</td>
    <td>: <input type="text" name="name" required></td>
</tr>

<tr>
    <td>Email</td>
    <td>: <input type="email" name="email" required></td>
</tr>

<tr>
    <td>Date of Birth</td>
    <td>: <input type="date" name="dob" required></td>
</tr>

<tr>
    <td>Mobile Number</td>
    <td>: <input type="number" name="mob" required></td>
</tr>

<tr>
    <td>Passport Size Photo</td>
    <td>: <input type="file" name="photo" required></td>
</tr>

<tr>
    <td></td>
    <td>
        <input type="submit" name="submit" value="Register">
    </td>
</tr>

</table>

</form>

</body>
</html>