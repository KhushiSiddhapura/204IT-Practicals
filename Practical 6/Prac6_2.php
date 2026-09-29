<!DOCTYPE html>
<html>
    <body>
        <?php
        $file = fopen("file2.txt", "w") or die("Error: File is not opening");
        $txt = "Khushi Siddhapura";
        fputs($file, $txt);
        fclose($file);

        $file = fopen("file2.txt", "r") or die("Error: File is not opening");
        echo fgets($file);
        fclose($file);
        ?>
    </body>
</html>