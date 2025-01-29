<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your feedback</title>

</head>

<body>
    <?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Script 3.3 handle_form.php
    //This page receives the data from feedback.html
    //It will receive, comments, and submit in &_POST.

    $title= $_POST['title'];
    $name1= $_POST['name1'];
    $name2= $_POST['name2'];
    $response= $_POST['response'];
    $comment= $_POST['comments'];

    //print data

    print "<p> Thank you, $title $name1 $name2, for your comments.</p>
    <p> You stated that you found this example to be '$response' and added: <br>$comment</p>";

    




    ?>
</body>
</html>
