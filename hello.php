<!DOCTYPE html>
<html lang="en">
</head>
    <meta charset="utf-8">
    <title>Greetings!</title>
    <style type="text/css">
        .bold {
            font-size: bolder;
        }
</style>

<head>
<body>
    <?php
    ini_set('display_errors',1);
    error_reporting (E_ALL);

    $name= $_GET['name'];
    print "<p>Hello, <span
    class=\"bold\">$name</span>!</p>";

    ?>
</body>
</html>



