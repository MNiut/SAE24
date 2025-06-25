<?php
// English comments as requested.
// Define page-specific variables for the English header.
$page_title = "Patient Area";
$header_title = "Log in or create your account";
$current_page_url = "espace_patient.php"; // The URL of the French equivalent page
$path_prefix = "../";

// If a patient is already logged in, redirect them to their account page.
if (isset($_SESSION['patient_id'])) {
    header('Location: mon_compte.php');
    exit();
}

// Include the English header.
include '../includes/header_en.php';
?>

<main>
    <div class="patient-forms-container">
        <!-- Login Form -->
        <div class="form-section">
            <h2>Already a patient? Log In</h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'login') echo '<p class="error-message">Incorrect email or password.</p>'; ?>
            <form action="../private/patient_portail.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div>
                    <label for="login_email">Email:</label>
                    <input type="email" id="login_email" name="email" required>
                </div>
                <div>
                    <label for="login_password">Password:</label>
                    <input type="password" id="login_password" name="password" required>
                </div>
                <div>
                    <button type="submit">Log In</button>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div class="form-section">
            <h2>New patient? Create an account</h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'register') echo '<p class="error-message">This email is already in use. Please log in.</p>'; ?>
            <form action="../private/patient_portail.php" method="POST">
                <input type="hidden" name="action" value="register">
                <div>
                    <label for="nom">Last Name:</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div>
                    <label for="prenom">First Name:</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="register_email">Email:</label>
                    <input type="email" id="register_email" name="email" required>
                </div>
                 <div>
                    <label for="telephone">Phone:</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
                <div>
                    <label for="register_password">Password:</label>
                    <input type="password" id="register_password" name="password" required>
                </div>
                <div>
                    <button type="submit">Create My Account</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
// Include the shared footer.
include '../includes/footer.php';
?>