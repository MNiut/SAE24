<?php
// We always start the session first.
session_start();

// --- Login credentials ---
$correct_user = "root24";
$correct_pass = "pass24!";

// --- We get the submitted data, checking if they exist ---
$user_entered = $_POST['username'] ?? '';
$pass_entered = $_POST['password'] ?? '';

// --- We compare the credentials ---
if ($user_entered === $correct_user && $pass_entered === $correct_pass) {
    // If credentials are correct:
    
    // 1. We store in the session that the user is logged in.
    $_SESSION['loggedin'] = true;
    
    // 2. We redirect to the private dashboard using JavaScript.
    echo '<script type="text/javascript">
            window.location.href = "dashboard.php";
          </script>';
    exit; // We stop the script.

} else {
    // If credentials are incorrect:

    // We redirect back to the French login page, adding an error parameter to the URL.
    // The login.php page will detect this parameter and display an error message.
    header('Location: ../login.php?error=1');
    exit; // We stop the script.
}
?><?php
// We always start the session first.
session_start();

// --- Login credentials ---
$correct_user = "root24";
$correct_pass = "pass24!";

// --- We get the submitted data, checking if they exist ---
$user_entered = $_POST['username'] ?? '';
$pass_entered = $_POST['password'] ?? '';

// --- We compare the credentials ---
if ($user_entered === $correct_user && $pass_entered === $correct_pass) {
    // If credentials are correct:
    
    // 1. We store in the session that the user is logged in.
    $_SESSION['loggedin'] = true;
    
    // 2. We redirect to the private dashboard using JavaScript.
    echo '<script type="text/javascript">
            window.location.href = "dashboard.php";
          </script>';
    exit; // We stop the script.

} else {
    // If credentials are incorrect:

    // We redirect back to the French login page, adding an error parameter to the URL.
    // The login.php page will detect this parameter and display an error message.
    header('Location: ../login.php?error=1');
    exit; // We stop the script.
}
?>