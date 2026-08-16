<!DOCTYPE html>
<html>
<head>
    <title>Practical 2 (ii)</title>
    <style>
        input[type="text"]{
            width:  95%;
        }
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $nameErr = $mailErr = $genErr = $mobErr = "";
    $name = $email = $mob = $gen = "";

    if (isset($_POST["register"])) {
      if (empty($_POST["name"])) {
        $nameErr = "Name is Required";
      } else {
        $name = $_POST["name"];
      }

      if (empty($_POST["mail"])) {
        $mailErr = "Email is Required";
      } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
        $mailErr = "Invalid Mail Format";
      } else {
        $email = $_POST["mail"];
      }

      if (empty($_POST["mob"])) {
        $mobErr = "Mobile Number is required";
      } elseif (!preg_match("/^\d{10}$/", $_POST["mob"])) {
        $mobErr = "Mobile number must contain 10 digits";
      } else {
        $mob = $_POST["mob"];
      }

      if (empty($_POST["gen"])) {
        $genErr = "Gender is required";
      } else {
        $gen = $_POST["gen"];
      }
    }
    ?>
    <h1>College Library Student Details</h1>
    <p
      class="
        error
      "
    >* is for Required Fields</p>
    <form method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
                <td><span
                  class="
                    error
                  "
                >*<?php echo $nameErr; ?></span></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="mail"></td>
                <td><span
                  class="
                    error
                  "
                >*<?php echo $mailErr; ?></span></td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td><input type="text" name="mob"></td>
                <td><span
                  class="
                    error
                  "
                >*<?php echo $mobErr; ?></span></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gen" value="Male">Male 
                    <input type="radio" name="gen" value="Female">Female
                    <input type="radio" name="gen" value="Other">Other
                </td>
                <td><span
                  class="
                    error
                  "
                >*<?php echo $genErr; ?></span></td>
            </tr>
            <tr>
                <td colspan="2"> <button name="register" style="width:100%;">Register</button></td>
            </tr>
        </table>
    </form>

    <br>
    <br>
    <h2>Your Entered Data</h2>
    <table>
        <tr>
            <td>Name</td>
            <td>: <?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td>: <?php echo $mob; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>: <?php echo $gen; ?></td>
        </tr>
    </table>
</body>
</html>