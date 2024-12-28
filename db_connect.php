<?php
$host = 'localhost';
$username = 'root'; // Default for XAMPP
$password = '';     // Default for XAMPP
$dbname = 'event_management'; // Use the name you created

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
