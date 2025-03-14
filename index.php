

<?php
define('TITLE', 'Home');
include 'templates/header.html';
?>
</head>
<body>

    <h1>Main Menu</h1>
    <p>Please register to add students</p>

    <br>

    <?php
    $usersInfo = mysqli_connect('localhost', 'root', '', 'users');

    if (!$usersInfo) {
        die("<p style='color:red;'>Connection failed: " . mysqli_connect_error() . "</p>");
    }

    $query = 'SELECT * FROM usersInformation ORDER BY email DESC';

    $r = mysqli_query($usersInfo, $query) or die("<p style='color:red;'>Query failed: " . mysqli_error($usersInfo) . "</p>");
    
    //Displaying the contents of the database with Add, Delete, and Edit.

    while ($row = mysqli_fetch_array($r)) {
        print "<div class= 'box'><p>
        <h2>{$row['FirstName']} {$row['LastName']}</h3>
        <strong>Address:</strong> {$row['address']}<br>
        <strong>City:</strong> {$row['city']}<br>
        <strong>State:</strong> {$row['state']}<br>
        <strong>Phone:</strong> {$row['phoneNumber']}<br>
        <strong>Email:</strong> {$row['email']}<br>
        </p><hr>\n<br>
        <a href=\"edit_entry.php?id={$row['id']}\"><input type='submit' name='submit' value='Edit'></a>
        <a href=\"delete_entry.php?id={$row['id']}\"><input type='submit' name='submit' value='Delete'></a>
        <a href=\"add_entry.php?id={$row['id']}\"><input type='submit' name='submit' value='Add'></a></div>";

    }


    mysqli_close($usersInfo);

    ?>

    <?php
        //Displaying a file directory

        echo "<div class='box'><ul>";
        print '<h1>File Directory</h1>';
        $directory = "H:/XAMPP/htdocs/uploads";


        $files = scandir($directory);


        $files = array_diff($files, array('.', '..'));


        
        foreach ($files as $file) {
            echo "<li>" . $file . "</li>";
        }
        echo "</ul></div>";





    ?>

    </form>
</body>

<?php
include 'H:\XAMPP\htdocs\templates\footer.html';
?>

</html>
