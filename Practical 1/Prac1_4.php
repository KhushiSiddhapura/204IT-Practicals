<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (iv)</title>
    </head>
    <body>
        <h1>Simple Calculator</h1>
        <form method = "post">
            number 1: <input type="num" name="num1"> <br> <br>
            number 2: <input type="num" name="num2"> <br> <br>
            <select name="op">
                <option value="add">Addition (+)</option>
                <option value="sub">Subtraction (-)</option>
                <option value="mul">Multiplication (*)</option>
                <option value="div">Division (/)</option>
            </select> <br> <br>
            <button name="submit">Calculate</button>
        </form>
        <?php if (isset($_POST["submit"])) {
          $num1 = $_POST["num1"];
          $num2 = $_POST["num2"];
          $op = $_POST["op"];

          switch ($op) {
            case "add":
              $result = $num1 + $num2;
              break;
            case "sub":
              $result = $num1 - $num2;
              break;
            case "mul":
              $result = $num1 * $num2;
              break;
            case "div":
              if ($num2 != 0) {
                $result = $num1 / $num2;
              } else {
                $result = "Cannot divide by 0";
              }
              break;
            default:
              $result = "operator not selected";
          }

          echo "result: " . $result;
        } ?>
    </body>
</html>