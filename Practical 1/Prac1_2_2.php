<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (ii)-form2</title>
    </head>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" value="<?php echo $_POST[
                      "name"
                    ]; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="text" name="email" value="<?php echo $_POST[
                      "email"
                    ]; ?>"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>: <input type="text" name="mob"></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>: <input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td colspan="2"><button name="submit">Submit Data</button></td>
                </tr>
            </table>
        </form>
        <?php if (isset($_POST["submit"])) {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $mob = $_POST["mob"];
          $dob = $_POST["dob"];

          echo "<br>Name: " . $name;
          echo "<br>Email: " . $email;
          echo "<br>Phone Number: " . $mob;
          echo "<br>Date of Birth: " . $dob;
        } ?>
    </body>
</html>