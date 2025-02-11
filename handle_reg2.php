
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


        if ($okay) {
            print '<p>You have been successfully registered.</p>';
        }


        ?>
    </body>
</html>

