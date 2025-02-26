<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Date Menus</title>
    </head>
    <body>
        <?php

        function make_date_menus() {
            $months = [1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            print '<select name="$months">';

            foreach ($months as $key => $value) {
                print "\n<option value=\"$key\">$value</option>";
            }
            print '</select>';

            print '<select name="day">';
            for ($day =1; $day <= 31; $day++) {
                print "\n<option value=\"$day\">$day</option>";
            }
            print '</select>';

            print '<select name="year">';
            $start_year = date('y');
            for ($y = $start_year; $y <= ($start_year + 10); $y++) {
                print "\n<option value=\"$y\">$y</option>";
            }
            print '</select>';

        }

        print '<form action="" method="post">';
        make_date_menus();
        print '</form>';
        ?>
        
    </body>
</html>
