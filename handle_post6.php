<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Forum Posting</title>
    </head>
    <body>
        <?php
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $posting = trim($_POST['posting'], false);

        $name = $first_name . ' '. $last_name;

        $words = str_word_count($posting);

        $posting = str_ireplace('badword','xxxxx', $posting);
        
        print "<div> Thank you, $name, for your posting:
            <p>$posting...</P>
            <p>($words words)</p></div>";

        ?>
    </body>
</html>
