<?php
    define ('TITLE', 'Registration');
    include 'templates\header.html';

?>
<!--User Information form-->

</head>
<body>
    <h1>Registration</h1>
    <p>Please complete this form to register a student:</p>

    <form action="handle_signup.php" method="post">
        <p>First Name: <input type="text" name="firstName" size="30"></p>
        <p>Last Name: <input type="text" name="lastName" size="30"></p>
        <p>Address: <input type="text" name="address" size="30"></p>
        <p>City: <input type="text" name="city" size="30"></p>
        <p>State: <input type="text" name="state" size="30"></p>
        <p>Phone Number: <input type="text" name="phoneNumber" size="30"></p>
        <p>Email Address <input type="text" name="email" size="30"></p>
            
        <input type="submit" name="submit" value="Register">

    </form>

</body>
<?php
    include 'H:\XAMPP\htdocs\templates\footer.html';
?>
