<!DOCTYPE html>
<html>
    <head>
        <title>Practical 2 (i)</title>
        <style>
        .result,
        .result tr,
        .result tr td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
        }
        </style>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form method="post">
            <table>
                <tr>
                    <td><label for="uname">Name </label></td>
                    <td><input type="text" name="uname" id="uname"></td>
                </tr>
                <tr>
                    <td><label for="pass">Password </label></td>
                    <td><input type="password" name="pass" id="pass"></td>
                </tr>
                <tr>
                    <td><label for="mail">Email </label></td>
                    <td><input type="email" name="mail" id="mail"></td>
                </tr>
                <tr>
                    <td><label for="pin">PIN CODE </label></td>
                    <td><input type="number" name="pin" id="pin"></td>
                </tr>
                <tr>
                    <td><label for="mob">Mobile Number </label></td>
                    <td><input type="number" name="mob" id="mob"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><button style="width: 100%;" name="register">Register</button></td>
                </tr>
            </table>
        </form>
        <br>
        <br>
        <br>
        <?php if (isset($_POST["register"])) {
          $name = $_POST["uname"];
          $email = $_POST["mail"];
          $pin = $_POST["pin"];
          $mob = $_POST["mob"];
          $password = $_POST["pass"];
          echo "<h2>Registered Data</h2>";
          echo '<table
            class="
              result
            "
          >';
          echo "<tr><td>Name</td><td>: " . $name . " </td></tr>";
          echo "<tr><td>Email</td><td>: " . $email . " </td></tr>";
          echo "<tr><td>PIN CODE</td><td>: " . $pin . " </td></tr>";
          echo "<tr><td>Mobile Number</td><td>: " . $mob . "</td></tr>";
          echo "</table>";
        } ?>
    </body>
</html>