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

         ];

         $count1 = count($soups);
         print"<p>The soups array originally had $count1 element.</p>";

         // Add three items

         $soups['Thursday'] = 'Chicken Noodle';
         $soups['Friday'] = 'Tomato';
         $soups['Saturday'] = 'Cream of Brocoli';
         $soups['Sunday'] = 'Pho';

         //Count and print the number of elements:

         $count2 = count($soups);
         print "<p> After adding 4 more soups the array now has $count2 elements.</p>";

         print_r($soups);
         
        ?>

    </body>
</html>
