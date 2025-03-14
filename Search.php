<?php

define ('TITLE', 'Search');
include 'templates/header.html';

print '<h1>Search the File</h1>';

$filePath = "uploads/student_scores.txt";



if (file_exists($filePath)) {

    $file = fopen($filePath, "r");
    //Comparing two datafield using substrings.
    if ($file) {
        $lines = file($filePath);
        $totalLines = count($lines);

        //Use of an array.
        $userSearch = isset($_GET['userSearch']) ? $_GET['userSearch'] : '';

        //Use of a control structure.
        if (empty($userSearch)) {
            echo "<p>Please enter a name</p>";
        } else {
            echo "<h3>Search Results for: " . htmlspecialchars($userSearch) . "</h3>";

            $found = false;

            
            for ($i = 0; $i < $totalLines; $i++) {
                $line = $lines[$i];


                if (strpos($line, $userSearch) !== false) {
                    echo "<strong>- </strong>" . htmlspecialchars($line) . "<br>";
                    $found = true;
                }
            }


            if (!$found) {
                echo "<strong>No value found for: </strong>" . htmlspecialchars($userSearch) . "<br>";
            }
        }

        fclose($file);
    } else {
        echo "Failed to open the file.";
    }
} else {
    echo "File does not exist.";
}





?>

<form action="Search.php" method="get">
    <p>Search File: <input type="text" name="userSearch"></p>
    <p><input type="submit" name="submit" value="Search"></p>
</form>



<?php
    include 'H:\XAMPP\htdocs\templates\footer.html';
?>
