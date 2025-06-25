<?php
// English comments as requested.
// Define page-specific variables for the header.
$page_title = "Espace Patient";
$header_title = "Connectez-vous ou créez votre compte";
$current_page_url = "espace_patient.php";
$path_prefix = "./";

// If a patient is already logged in, redirect them to their account page.
if (isset($_SESSION['patient_id'])) {
    header('Location: mon_compte.php');
    exit();
}

// Include the French header.
include 'includes/header_fr.php';
?>

<main>
    <div class="patient-forms-container">
        <!-- Login Form -->
        <div class="form-section">
            <h2>Déjà patient ? Connectez-vous</h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'login') echo '<p class="error-message">
			Email ou mot de passe incorrect.</p>'; ?>
            <form action="private/patient_portail.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div>
                    <label for="login_email">Email :</label>
                    <input type="email" id="login_email" name="email" required>
                </div>
                <div>
                    <label for="login_password">Mot de passe :</label>
                    <input type="password" id="login_password" name="password" required>
                </div>
                <div>
                    <button type="submit">Se connecter</button>
                </div>
            </form>
        </div>

        <!-- Registration Form -->
        <div class="form-section">
            <h2>Nouveau patient ? Créez un compte</h2>
            <?php if (isset($_GET['error']) && $_GET['error'] == 'register') echo '<p class="error-message">
			Cet email est déjà utilisé. Veuillez vous connecter.</p>'; ?>
            <form action="private/patient_portail.php" method="POST">
                <input type="hidden" name="action" value="register">
                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="register_email">Email :</label>
                    <input type="email" id="register_email" name="email" required>
                </div>
                 <div>
                    <label for="telephone">Téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" required>
                </div>
                <div>
                    <label for="register_password">Mot de passe :</label>
                    <input type="password" id="register_password" name="password" required>
                </div>
                <div>
                    <button type="submit">Créer mon compte</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
// Include the shared footer.
include 'includes/footer.php';
?>