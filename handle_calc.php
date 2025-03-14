
<?php
    define ('TITLE', 'Calculate');
    include 'templates\header.html';
?>

    <h1>Calculate</h1>
    <p>Enter the student scores:</p>

    
    <form action=handle_calc.php method="post">
        <p>Math: <input type="text" name="math" size="30"></p>
        <p>English: <input type = "text" name="english" size="30"></p>
        <p>Science: <input type="text" name="science" size="30"></p>
        <p>Social Studies: <input type="text" name="socialStudies" size="30"></p>
        <input type="submit" name="submit" value="Calculate Scores">
    </form>
    
    
<?php

$problem = false;

//Perform math using PHP code.
if ($_SERVER['REQUEST_METHOD'] =='POST') {

    if (!empty($_POST['math']) && !empty($_POST['english']) && !empty($_POST['science']) && !empty($_POST['socialStudies'])) {

        if (is_numeric($_POST['math']) && is_numeric($_POST['english']) && is_numeric($_POST['science']) && is_numeric($_POST['socialStudies'])) {

            //Use of an array.
            $math = $_POST['math'];
            $english = $_POST['english'];
            $science = $_POST['science'];
            $socialStudies = $_POST['socialStudies'];
    
    
            $scores = $math + $english + $science + $socialStudies;
            $total = $scores / 400;
    
            $percentage = sprintf("%.2f%%", $total * 100);
    
    
            print '<p>The total is ' . $scores . '<br>'. $percentage. '</p>';

        } else {
            print 'Error! Please enter the correct scores';

        }

    

    
    } else {
        print 'Error! Please enter the correct scores ';
        $problem = true;

    }


    

}



include 'H:\XAMPP\htdocs\templates\footer.html';


?>
