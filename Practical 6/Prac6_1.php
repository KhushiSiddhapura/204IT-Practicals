<!DOCTYPE html>
<html>
    <body>
        <?php 
            $file = fopen("file1.txt","r") or die("Error: File is not opening");
            while(!feof($file)){
                echo fgets($file)."<br>";
            }
            fclose($file);
        ?>
    </body>
</html>