<?php
// register_attendee.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form inputs
    $name = $_POST['att_name'];
    $email = $_POST['att_email'];
    $password = password_hash($_POST['att_password'], PASSWORD_DEFAULT); // Secure password

    // Database connection
    require_once 'db_connect.php'; // Include your database connection script

    // Insert into database
    $sql = "INSERT INTO attendees (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$name, $email, $password])) {
        echo "Attendee registration successful!";
        header("Location: Registration.php"); // Redirect to main page
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
