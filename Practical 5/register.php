<?php
session_start();
include "connection.php";
?>

<body>

    <h1>Registration Form</h1>

    <form method="post">
        <table>

            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="mail"></td>
            </tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td><input type="password" name="cpass"></td>
            </tr>

            <tr>
                <td>
                    <button name="register">Register</button>
                </td>
            </tr>

            <tr>
                <td>
                    Already have an account?
                    <a href="login.php">Login</a>
                </td>
            </tr>

        </table>
    </form>

    <?php if (isset($_POST["register"])) {
      $name = $_POST["name"];
      $mail = $_POST["mail"];
      $pass = $_POST["pass"];
      $cpass = $_POST["cpass"];

      if ($pass != $cpass) {
        echo "Password and Confirm Password do not match";
      } else {
        // Check if email already exists
        $check = "select * from users where email='$mail'";
        $checkResult = mysqli_query($conn, $check);

        if (mysqli_num_rows($checkResult) > 0) {
          echo "Email already exists";
        } else {
          $hash = password_hash($pass, PASSWORD_DEFAULT);

          $sql = "insert into users (name,email,password)
                        values('$name','$mail','$hash')";

          $result = mysqli_query($conn, $sql);

          if ($result) {
            echo "Registered successfully";
            $_SESSION["email"] = $mail;
            $_SESSION["name"] = $name;
            Header("Location: home.php");
          } else {
            echo mysqli_error($conn);
          }
        }
      }
    } ?>

</body>