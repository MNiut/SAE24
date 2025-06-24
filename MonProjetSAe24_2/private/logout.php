<?php
// Start the session to access it
session_start();

// Destroy all session data
session_destroy(); 

// Redirects to the homepage (now index.php)
header('Location: ../index.php'); 
exit;
?>