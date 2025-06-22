<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Set the message
$message = "Thanks For Using Our Service..! See You Again....!";

// Redirect to the landing page with the message
echo "<script type='text/javascript'>
        alert('$message');
        window.location.href = 'landing.php';
      </script>";
?>
