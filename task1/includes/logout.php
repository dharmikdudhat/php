<?php
header('Content-Type: application/json');

session_start();
session_unset();
session_destroy();
session_start(); // Start the session again to set the message
$_SESSION['message'] = "You have logged out successfully.";
echo json_encode(['success' => true]);

// header("Location: login.php");
exit;


