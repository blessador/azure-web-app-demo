<?php
// Start a session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: index.html');
exit();
?>
