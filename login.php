<?php
// login.php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    require_once 'db_connect.php'; // Include your database connection script

    // Check in organizers table
    $sql = "SELECT id, password FROM organizers WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $organizer = $stmt->fetch();

    if ($organizer && password_verify($password, $organizer['password'])) {
        $_SESSION['user_id'] = $organizer['id'];
        $_SESSION['role'] = 'organizer';
        header("Location: organizer_dashboard.php"); // Redirect to organizer dashboard
        exit;
    }

    // Check in attendees table
    $sql = "SELECT id, password FROM attendees WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $attendee = $stmt->fetch();

    if ($attendee && password_verify($password, $attendee['password'])) {
        $_SESSION['user_id'] = $attendee['id'];
        $_SESSION['role'] = 'attendee';
        header("Location: attendee_dashboard.php"); // Redirect to attendee dashboard
        exit;
    }

    // If no match, show error
    echo "Invalid username or password!";
}
