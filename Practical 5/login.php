<?php
session_start();
include "connection.php";
?>

<body>

    <h1>Login Form</h1>

    <form method="post">

        <table>

            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="mail">
                </td>
            </tr>

            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" name="pass">
                </td>
            </tr>

            <tr>
                <td>
                    <button name="login">Login</button>
                </td>
            </tr>

            <tr>
                <td>
                    Don't have an account?
                    <a href="register.php">Register</a>
                </td>
            </tr>

        </table>

    </form>

    <?php if (isset($_POST["login"])) {
      $Email = $_POST["mail"];
      $pass = $_POST["pass"];

      $sql = "select * from users where email='$Email'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row["password"])) {
          // Store user information in session
          $_SESSION["email"] = $row["email"];
          $_SESSION["name"] = $row["name"];

          header("Location: home.php");
          exit();
        } else {
          echo "Invalid password";
        }
      } else {
        echo "Email not found";
      }
    } ?>

</body>