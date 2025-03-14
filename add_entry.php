<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Add A Blog Entry</title>
    </head>
    <body>
        <h1>Add A Blog Entry</h1>
        <?php
             
        define ('TITLE', 'Signup');
        include 'templates\header.html';
  
    
        $usersInfo = mysqli_connect('localhost', 'root', '', 'users');

        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
    
            mysqli_set_charset($usersInfo, 'utf8');

            $problem = false;

            if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && (!empty($_POST['phoneNumber']) && !empty($_POST['email']))) {

                $firstName = mysqli_real_escape_string($usersInfo, trim(strip_tags($_POST['firstName'])));
                $lastName = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['lastName'])));
                
                $address = mysqli_real_escape_string($usersInfo, trim(strip_tags($_POST['address'])));
                $city = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['city'])));
                $state = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['state'])));

                
                $phoneNumber = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['phoneNumber'])));
                $email = mysqli_real_escape_string($usersInfo,trim(strip_tags($_POST['email'])));

            } else {

                print '<p style="color:red;">Please enter all the fields required!.</p>';
                $problem = true;

            }
            if (!$problem) {

                $stmt = $usersInfo->prepare("INSERT INTO usersInformation (firstName, lastName, address, city, state, phoneNumber, email) VALUES (?, ?, ?, ?, ?,?, ?)");
                $stmt->bind_param("sssssss", $firstName, $lastName, $address, $city, $state, $phoneNumber, $email);

                if ($stmt->execute()) {
                    print '<p>Registration saved!</p>';
                } else {
                    print '<p style="color:red;">Error: ' . mysqli_error($usersInfo) . '</p>';
                }

                $stmt->close();
            }



        }

        mysqli_close($usersInfo);

    ?>

                <form action="add_entry.php" method="post">
                <p>First Name: <input type="text" name="firstName" size="30"></p>
                <p>Last Name: <input type="text" name="lastName" size="30"></p>
                <p>Address: <input type="text" name="address" size="30"></p>
                <p>City: <input type="text" name="city" size="30"></p>
                <p>State: <input type="text" name="state" size="30"></p>
                <p>Phone Number: <input type="text" name="phoneNumber" size="30"></p>
                <p>Email Address <input type="text" name="email" size="30"></p>
                    

                <input type="submit" name="submit" value="Register">



    </body>
</html>
