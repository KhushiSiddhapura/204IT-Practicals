<?php
$conn = mysqli_connect("localhost", "root", "");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS mydatabase";

if (!mysqli_query($conn, $sql)) {
  die("Database creation failed: " . mysqli_error($conn));
}

mysqli_select_db($conn, "mydatabase");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
  die("Table creation failed: " . mysqli_error($conn));
}
