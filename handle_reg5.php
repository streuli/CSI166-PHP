
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <style type="text/css"
        media="screen">
        .error {color: red}
        </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        <?php
        ini_set('log_errors', 1);
        ini_set('error_log', 'errors.log');

      
        $okay=true;

        if (empty($_POST["email"])) {
            print'<p class="error">Please enter your email address. </p>';
        }

        if (empty($_POST['password'])) {
            print '<p class="error"> Please enter your password.</p>';
            $okay = false;
        }

        // Validate password
        if (trim($_POST['password'] != $_POST['confirm'])) {
            print '<p class="error"> Your confirmed password does not match. </p>';
            $okay = false;
        }

        //Validate the year.
        if ( is_numeric($_POST['year']) && (strlen($_POST['year']) == 4)) {

            // Check that they were born before 2016.
            if ($_POST['year'] < 2025 ) {
                $age = 2025 - $_POST['year'];

            }
            else {
                print'<p class="error">Year is in the future.</p>';
                $okay = false;
            }

        }
        else {
            print '<p class="error"> Please enter the year you were born as four digits.</p>';
            $okay = false;
        }
        // Validate the terms.
        if (!isset($_POST['terms'])) {
            print '<p class="error"> You must accept the terms. </p>';
            $okay = false;
        }


        if ($okay) {
            print '<p>You have been successfully registered.</p>';
            print "<p> You will turn $age this year.</P>";
        }


        ?>
    </body>
</html>

