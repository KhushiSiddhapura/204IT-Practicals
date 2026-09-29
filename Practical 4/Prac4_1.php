<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");

if (!$conn) {
  echo "Try again";
  echo mysqli_connect_error();
} else {
  echo "Success";
}

?>
