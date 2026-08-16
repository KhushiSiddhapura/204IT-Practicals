<!DOCTYPE html>
<html>
<head>
    <title>Practical 3 (ii)</title>
</head>
<body>
    <?php
    function passByVal($a, $b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<br>Inside function: ";
        echo "<br>a = " . $a;
        echo "<br>b = " . $b;
    }

    function passByRef(&$a, &$b)
    {
        $temp = $a;
        $a = $b;
        $b = $temp;

        echo "<br>Inside function: ";
        echo "<br>a = " . $a;
        echo "<br>b = " . $b;
    }
    ?>
    <h1>Swapping Value using pass by value and pass by reference</h1>
    <form method="post">
        Enter values of <br>
        a : <input type="num" name="num1"> <br>
        b : <input type="num" name="num2"> <br> <br>
        <button name="val">Pass by value</button> <button name="ref">Pass by reference</button>
        <?php

        if (isset($_POST["val"])) {
            $a = $_POST["num1"];
            $b = $_POST["num2"];
            echo "<br>Before Function call: ";
            echo "<br>a = " . $a;
            echo "<br>b = " . $b;
            passByVal($a, $b);
            echo "<br>After Function call: ";
            echo "<br>a = " . $a;
            echo "<br>b = " . $b;
        }

        if(isset($_POST["ref"])) {
            $a = $_POST["num1"];
            $b = $_POST["num2"];
            echo "<br>Before Function call: ";
            echo "<br>a = " . $a;
            echo "<br>b = " . $b;
            passByRef($a, $b);
            echo "<br>After Function call: ";
            echo "<br>a = ".$a;
            echo "<br>b = ".$b;
        }
        ?>
    </form>
</body>

</html>