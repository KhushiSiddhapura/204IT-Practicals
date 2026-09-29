<!DOCTYPE html>
<html>
    <head>
        <title>Practical 1 (vii)</title>
    </head>
    <body>
        <h1>Even Numbers between 1 to 100</h1>
        <?php for ($i = 1; $i <= 100; $i++) {
          if ($i % 2 == 0) {
            echo " " . $i;
          }
        } ?>
    </body>
</html>