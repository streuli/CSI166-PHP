<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Connect MySQL</title>
    </head>
    <body>
        <?php
        if ($dbc = mysqli_connect('localhost','root','','myblog')) {
            print '<p>Successfully connected to the database!</p>';

            mysqli_close($dbc);

        } else {

            print '<p style="color:red;">Could not connect to the database.</p>';
        }
        ?>
    </body>
</html>
