<?php
// English comments as requested.
// This file centralizes the database connection.

// --- Database Credentials (for local XAMPP) ---
$db_host = 'localhost';
$db_user = 'root'; // Default XAMPP user
$db_pass = '';     // Default XAMPP password is empty
$db_name = 'cabinet_pm2';

// --- Establish the connection ---
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// --- Check for connection errors ---
if (!$conn) {
    // Stop the script and display an error if connection fails.
    // In a real production environment, you would log this error instead of showing it.
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set to utf8mb4 to handle special characters correctly.
mysqli_set_charset($conn, "utf8mb4");