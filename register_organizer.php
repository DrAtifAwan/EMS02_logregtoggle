<?php
// register_organizer.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture form inputs
    $name = $_POST['org_name'];
    $email = $_POST['org_email'];
    $password = password_hash($_POST['org_password'], PASSWORD_DEFAULT); // Secure password
    $organization = $_POST['organization'];

    // Database connection
    require_once 'db_connect.php'; // Include your database connection script

    // Insert into database
    $sql = "INSERT INTO organizers (name, email, password, organization) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute([$name, $email, $password, $organization])) {
        echo "Organizer registration successful!";
        header("Location: Registration.php"); // Redirect to main page
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
