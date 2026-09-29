<?php

include("Prac4_1.php");

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id='$id'";

if (mysqli_query($conn, $sql)) {

    header("Location: Prac4_2.php");
    exit();

}
else {
    echo "Error: " . mysqli_error($conn);
}

?>