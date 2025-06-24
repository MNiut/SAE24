<?php
// We always start the session first.
session_start();

// --- Login credentials ---
$correct_user = "root24";
$correct_pass = "pass24!";

// --- We get the submitted data, checking if they exist ---
$user_entered = $_POST['username'] ?? '';
$pass_entered = $_POST['password'] ?? '';
$lang_source = $_POST['lang'] ?? 'fr'; // 'fr' by default

// --- We compare the credentials ---
if ($user_entered === $correct_user && $pass_entered === $correct_pass) {
    // If credentials are correct:
    
    // 1. We store in the session that the user is logged in.
    $_SESSION['loggedin'] = true;
    $_SESSION['lang'] = $lang_source; // We store the language for the dashboard
    
    // 2. We redirect to the private dashboard.
    header('Location: dashboard.php');
    exit; // We stop the script.
} else {
    // If credentials are incorrect:
    // We redirect back to the correct language login page with an error.
    if ($lang_source === 'en') {
        header('Location: ../en/login.php?error=1');
    } else {
        header('Location: ../login.php?error=1');
    }
    exit; // We stop the script.
}
?>