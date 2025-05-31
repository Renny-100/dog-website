<?php
$host = 'localhost';
$user = 'root'; // change if necessary
$pass = '';     // change if necessary
$db   = 'dog_users';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
