<?php
// Start a session
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Here, you can add your authentication logic
    // For this example, we'll accept any username and password

    // Set session variables
    $_SESSION['username'] = $username;

    // Redirect to the dashboard
    header('Location: dashboard.php');
    exit();
} else {
    // If the form is not submitted, redirect back to the login page
    header('Location: login.html');
    exit();
}
?>
