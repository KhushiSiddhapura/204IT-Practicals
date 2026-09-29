<?php

include("Prac4_1.php");

$table = "student";

// Check if table exists
$sql = "SHOW TABLES LIKE '$table'";
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

// Display data
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Records</title>

    <style>
        body { font-family: Arial; background: #f5f5f5; }
        .container { width: 90%; margin: 40px auto; }
        h1 { text-align: center; }
        table { width: 100%; background: white; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ccc; }
        th { background: #333; color: white; }
        .actions { display: flex; gap: 8px; }
        .edit-btn { color: blue; }
        .delete-btn { color: red; }
        .add-section { text-align: right; margin-top: 15px; }
        .add-btn { background: #333; color: white; padding: 8px 12px; text-decoration: none; }
    </style>

</head>

<body>

<div class="container">

    <h1>Student Records</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['email']; ?></td>

            <td>

                <div class="actions">

                    <a class="edit-btn"
                       href="edit.php?id=<?php echo $row['id']; ?>">
                        Edit
                    </a>

                    <a class="delete-btn"
                       href="delete.php?id=<?php echo $row['id']; ?>"
                       onclick="return confirm('Delete this record?');">
                        Delete
                    </a>

                </div>

            </td>

        </tr>

        <?php
        }
        ?>

    </table>

    <div class="add-section">

        <a href="insert.php" class="add-btn">
            + Add New Data
        </a>

    </div>

</div>

</body>
</html>