<!DOCTYPE html>
<html lang  = "en">
    <head>
        <meta charset="utf-8">
        <title>No Soup for You!</title>
    </head>
    <body>
        <h1>Mmm...soups</h1>
        <?php
        ini_set('log_errors', 1);
        ini_set('error_log', 'errors.log');

         $soups = [
            'Monday'=> 'Clam Chowder',
            'Tuesday'=> 'White Chicken Chili',
            'Wednesday'=> 'Vegetarian',
            'Thursday'=> 'Chicken Noodle',
            'Friday'=> 'Tomato',
            'Saturday'=> 'Cream of Brocoli',


         ];
         
         print_r($soups);
         
        ?>

    </body>
</html>
