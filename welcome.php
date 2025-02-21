<?php

session_start();
define('TITLE','Welcome to the J.D. Salinger Fan Club!');
include 'H:\XAMPP\htdocs\header3.html';

print '<h2>Welcome to the J.D. Salinger Fan CLub!</h2>';
print '<p>Hello, '. $_SESSION['email'] .'!</p>';


date_default_timezone_set('America/New_York');

print '<p>You have been logged in since: '. date ('g:i a', $_SESSION['loggedin']) .'.</p>';

print '<p><a href="logout.php">Logout</a></p>';

include 'H:\XAMPP\htdocs\footer3.html';
?>
