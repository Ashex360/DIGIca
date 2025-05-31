<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page if not logged in
    header("Location:login.php");
    exit;
}
?>
