<?php
// English comments as requested.
// This script destroys the patient's session and logs them out.
session_start();
session_destroy();
// Redirect to the homepage after logout.
header('Location: ../index.php');
exit();
?>