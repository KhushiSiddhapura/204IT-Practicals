<?php

if (isset($_POST['submit'])) {

    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];

    $destination = "bvmit/result/" . $file;

    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    if ($extension != "pdf") {

        echo "Error: Only PDF files are allowed.";

    } 
    elseif ($size >= 200 * 1024) {

        echo "Error: File size must be less than 200 KB.";

    }
    elseif (file_exists($destination)) {

        echo "Error: File already exists in the destination folder.";

    }
    elseif (move_uploaded_file($tmp_name, $destination)) {

        echo "PDF file uploaded successfully.";

    } 
    else {

        echo "Error: File could not be uploaded.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PDF Upload</title>
</head>

<body>

<h1>Upload PDF File</h1>

<form method="POST" enctype="multipart/form-data">

    <table>

        <tr>
            <td>Select PDF</td>
            <td>: <input type="file" name="file" accept=".pdf" required></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Upload">
            </td>
        </tr>

    </table>

</form>

</body>

</html>