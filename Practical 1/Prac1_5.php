<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (v)</title>
    </head>
    <body>
        <h1>Swap two numbers:</h1>
        <form method="post">
            Number 1: <input type="num" name="num1"> <br><br>
            Number 2: <input type="num" name="num2"> <br><br>
            <button name="submit">Swap</button>
        </form>

        <?php if (isset($_POST["submit"])) {
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];

          echo "<br>Before Swapping: ";
          echo "<br> Number 1 = " . $num1;
          echo "<br> Number 2 = " . $num2;

          $temp = $num1;
          $num1 = $num2;
          $num2 = $temp;

          echo "<br>After swapping: ";
          echo "<br> Number 1 = " . $num1;
          echo "<br> Number 2 = " . $num2;
        } ?>
    </body>
</html>