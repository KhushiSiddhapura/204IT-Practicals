<!DOCTYPE html>
<html>
<head>
    <title>Practical 3 (i)</title>
</head>
<body>
    <?php
    function checkNum($num)
    {
        if ($num % 2 == 0) {
            echo "<br><br>".$num." is even number";
        } else {
            echo "<br><br>".$num." is odd number";
        }
    }
    ?>
    <form method="post">
        <h1>Find Nuumber is odd or even</h1>
        Enter a Number: <input type="num" name="num"> <br> <br>
        <button name="submit">Submit</button>
        <?php
        if (isset($_POST["submit"])) {
            $num = $_POST["num"];
            checkNum($num);
        }
        ?>
    </form>
</body>

</html>