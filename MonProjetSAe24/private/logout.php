<?php
session_start();
session_destroy(); // Destroys all session data
header('Location: ../index.html'); // Redirects to the homepage
exit;
?>