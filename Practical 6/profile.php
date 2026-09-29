<?php

include("Connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM registration WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>

    <style>
        body {
            font-family: Arial;
        }

        .profile {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid black;
            text-align: center;
        }

        .profile img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid black;
        }

        .profile p {
            text-align: left;
        }
    </style>

</head>

<body>

<div class="profile">

    <h1>Profile</h1>

    <img src="uploads/<?php echo $row['photo']; ?>">

    <p><b>Name:</b> <?php echo $row['name']; ?></p>

    <p><b>Email:</b> <?php echo $row['email']; ?></p>

    <p><b>Date of Birth:</b> <?php echo $row['dob']; ?></p>

    <p><b>Mobile Number:</b> <?php echo $row['mob']; ?></p>

</div>

</body>

</html>