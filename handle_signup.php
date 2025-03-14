
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="CSS/page.css">

        <style type="text/css"
        media="screen">
        .error {color: red}
        </style>

        <?php
            define ('TITLE', 'Signup');
            include 'templates\header.html';

        ?>
    </head>
    <body>
        <h1>Registration Results</h1>

      

        <?php
            //Use of a Function
            ini_set('log_errors', 1);
            ini_set('error_log', 'errors.log');

            $usersInfo = mysqli_connect('localhost', 'root', '', 'users');

            //Use of a control structure.

            if (!$usersInfo) {
                die('<p class="error">Could not connect to the database:<br>' . mysqli_connect_error() . '</p>
                <p><a href="Registration.php"><input type="submit" value="Go Back"></a></p>');
            }


            $table_check_query = "SHOW TABLES LIKE 'usersInformation'";
            $table_exists = mysqli_query($usersInfo, $table_check_query);


            if (mysqli_num_rows($table_exists) == 0) {

                $query = 'CREATE TABLE usersInformation (id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, FirstName VARCHAR(100)
                NOT NULL, LastName TEXT NOT NULL, address TEXT NOT NULL, city TEXT NOT NULL, state TEXT NOT NULL, phoneNumber TEXT NOT NULL, email TEXT NOT NULL ) CHARACTER SET utf8';
    
                if (@mysqli_query($usersInfo, $query)) {
                    print '<p> The table has been created!</p>';
                } else {
                    print '<p style="color:red;">Could not create the table because:<br>' . mysqli_error($usersInfo) . '</p>
                    <p>The query being run was: ' . $query .'</p><p><a href="Registration.php"><input type="submit" name="submit" value="Add Student"></a></p>';
                }


            } else {
                print '' . mysqli_connect_error() . '</p>';
            }

         

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
    
                mysqli_set_charset($usersInfo, 'utf8');

                $problem = false;

                if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && (!empty($_POST['phoneNumber']))) {
    
                    $firstName = mysqli_real_escape_string($usersInfo, trim(strip_tags($_POST['firstName'])));
                    $lastName = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['lastName'])));
                    
                    $address = mysqli_real_escape_string($usersInfo, trim(strip_tags($_POST['address'])));
                    $city = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['city'])));
                    $state = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['state'])));

                    
                    $phoneNumber = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['phoneNumber'])));
                    $email = trim($_POST['email']);

                    //Email Verification
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        print '<p class="error">Invalid Email Format!</p>
                        <p>
                           <a href="Registration.php"><input type="submit" name="submit" value="Back"></a>
                           <a href="index.php"><input type="submit" name="submit" value="Home"></a>
                        </p>';
                        $problem = true;
                    } else {
                     
                        $email = mysqli_real_escape_string($usersInfo, $email);
                    }
                    

                } else {
    
                    print '<p style="color:red;">Please enter all the fields required!<p><a href="Registration.php"><input type="submit" name="submit" value="Add Student"></a></p></p>';
                    $problem = true;
    
                }


                if (!$problem) {

                    $stmt = $usersInfo->prepare("INSERT INTO usersInformation (firstName, lastName, address, city, state, phoneNumber, email) VALUES (?, ?, ?, ?, ?,?, ?)");
                    $stmt->bind_param("sssssss", $firstName, $lastName, $address, $city, $state, $phoneNumber, $email);
    
                    if ($stmt->execute()) {
                        print '<p>Registration saved!</p>
                        <p>
                           <a href="Registration.php"><input type="submit" name="submit" value="Add Student"></a>
                           <a href="index.php"><input type="submit" name="submit" value="Home"></a>
                        </p>';

                    } else {
                        print '<p style="color:red;">Error: ' . mysqli_error($usersInfo) . '</p>';
                    }
    
                    $stmt->close();
                }

    

            }

            mysqli_close($usersInfo);

            
            
            include 'H:\XAMPP\htdocs\templates\footer.html';
        

        ?>


    

    </body>
</html>
