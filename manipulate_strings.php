<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Manipulating Strings</title>
    </head>
    <body>
        <?php

        $sentence = "PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.";
 
        // This is to redact the specified word.
        $redacted = str_ireplace('server','xxxxx', $sentence);

        // This  gets the redacted word.
        $words = substr($sentence, 8, 8 );

        // This is to ge the total number of numbers. 
        $total_num = strlen("$sentence");

        
        print "<p>The full sentence with one word redacted <div> $redacted</P>
            <p>This is the word: $words</p>
            <p>Total number of letters: $total_num</div>";
            
        ?>
    </body>
</html>
