<?php
// English comments as requested.
// Define page-specific variables for the header
$page_title = "Connexion";
$header_title = "Accès à l'espace privé";
$current_page_url = "login.php";
$path_prefix = "./";

// Include the French header
include 'includes/header_fr.php';
?>

<main>
    <?php
        // This PHP block displays the error message if the login fails
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<p class="error-message">Identifiant ou mot de passe incorrect. Veuillez réessayer.</p>';
        }
    ?>

    <form action="private/portail.php" method="POST">
        <!-- We add a hidden field to know the login comes from the FR page -->
        <input type="hidden" name="lang" value="fr">
        <div>
            <label for="username">Identifiant :</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div>
            <button type="submit">Se connecter</button>
        </div>
    </form>
</main>

<?php
// Include the shared footer
include 'includes/footer.php';
?>