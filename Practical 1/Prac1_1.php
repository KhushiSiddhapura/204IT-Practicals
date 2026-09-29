<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (i)</title>
    </head>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td>: <input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td>: <input type="number" name="mob"></td>
                </tr>
                <tr>
                    <td colspan="2"><button name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
        <?php if (isset($_POST["submit"])) {
          $name = $_POST["name"];
          $email = $_POST["email"];
          $mob = $_POST["mob"];

          echo "<br>Name: " . $name;
          echo "<br>Email: " . $email;
          echo "<br>Phone Number: " . $mob;
        } ?>
    </body>
</html>