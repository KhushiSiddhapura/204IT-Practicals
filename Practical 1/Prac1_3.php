<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (iii)</title>
    </head>
    <body>
        <form method = "post">
            <h1>Calculate Factorial</h1>
            Enter a number: <input type="num" name="number"> <br>
            <button name="submit">Calculate</button>
    </form>
        <?php if (isset($_POST["submit"])) {
          $num = $_POST["number"];
          $res = 1;
          for ($i = $num; $i >= 1; $i--) {
            $res *= $i;
          }

          echo "<br>Factorial: " . $res;
        } ?>
    </body>
</html>