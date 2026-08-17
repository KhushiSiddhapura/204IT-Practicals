<!DOCTYPE html>
<html>
    <body>
        <?php 
            //setting default time zone to India
            date_default_timezone_set('Asia/Kolkata');

            echo "<br>Date function without time stamp:<br>";
            echo date('d-m-Y h:i:s a');

            echo "<br><br>Date function with time stamp:<br>";
            $dt1 = strtotime('2007-10-20');
            echo date('d-m-Y',$dt1);

            echo "<br><br>Date function with time stamp using mktime():<br>";
            $dt2 = mktime(12,30,54,10,20,2007);
            echo date('d-m-Y h:i:s a',$dt2);

            echo "<br><br>Number of seconds from Unix Epoch to now:<br>";
            echo time();

            echo "<br><br>Date function with time stamp using strtotime of +2 weeks 2 hour 2 minutes 2 seconds from 20-Oct-2007 12:30:54 :<br>";
            $dt3 = strtotime('+2 Weeks 2 hours 2 minutes 2 seconds',$dt2);
            echo date('l, F d,Y H:i:s ',$dt3);

        ?>
    </body>
</html>