<?php
// English comments as requested.
// This script handles patient login and registration logic.
session_start();
include 'db_connect.php'; // Include our database connection file.

// Check if an action was submitted.
if (!isset($_POST['action'])) {
    header('Location: ../index.php'); // Redirect if accessed directly.
    exit();
}

$action = $_POST['action'];

if ($action == 'register') {
    // --- Handle Registration ---
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password_plain = $_POST['password'];

    // --- Security: Hash the password ---
    $password_hashed = password_hash($password_plain, PASSWORD_DEFAULT);

    // --- Check if email already exists using a prepared statement ---
    $stmt = mysqli_prepare($conn, "SELECT id FROM patients WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        // Email exists, redirect with an error.
        header('Location: ../espace_patient.php?error=register');
        exit();
    }
    mysqli_stmt_close($stmt);

    // --- Insert the new patient using a prepared statement ---
    $stmt = mysqli_prepare($conn, "INSERT INTO patients (nom, prenom, email, password, telephone) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "sssss", $nom, $prenom, $email, $password_hashed, $telephone);
    
    if (mysqli_stmt_execute($stmt)) {
        // Registration successful, log the user in automatically.
        $_SESSION['patient_id'] = mysqli_insert_id($conn);
        $_SESSION['patient_prenom'] = $prenom;
        header('Location: ../mon_compte.php'); // Redirect to their account page.
    } else {
        echo "Erreur lors de la création du compte.";
    }
    mysqli_stmt_close($stmt);

} elseif ($action == 'login') {
    // --- Handle Login ---
    $email = $_POST['email'];
    $password_plain = $_POST['password'];

    // --- Fetch user from DB using a prepared statement ---
    $stmt = mysqli_prepare($conn, "SELECT id, prenom, password FROM patients WHERE email = ?");
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($patient = mysqli_fetch_assoc($result)) {
        // User found, now verify the password.
        if (password_verify($password_plain, $patient['password'])) {
            // Password is correct.
            $_SESSION['patient_id'] = $patient['id'];
            $_SESSION['patient_prenom'] = $patient['prenom'];
            header('Location: ../mon_compte.php'); // Redirect to account page.
        } else {
            // Wrong password.
            header('Location: ../espace_patient.php?error=login');
        }
    } else {
        // User not found.
        header('Location: ../espace_patient.php?error=login');
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>