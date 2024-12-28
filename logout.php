<?php
// Start the session
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to the registration form
header("Location: registration.php"); // Replace with the actual registration form file
exit;
?>
