<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (vi)</title>
    </head>
    <body>
        <h1>Number Pyramid</h1>
        <form method="post">
            Number of Rows: <input type="num" name="num"> <br><br>
            <button name="submit">Show</button>
        </form>
        <?php if (isset($_POST["submit"])) {
          $num = $_POST["num"];
          for ($i = 1; $i <= $num; $i++) {
            for ($j = 1; $j <= $i; $j++) {
              echo $i . " ";
            }
            echo "<br>";
          }
        } ?>
    </body>
</html>