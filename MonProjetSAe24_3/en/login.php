<?php
// English comments as requested.
// Define page-specific variables for the English header
$page_title = "Login";
$header_title = "Access to the Private Area";
$current_page_url = "login.php";
$path_prefix = "../";

// Include the English header
include '../includes/header_en.php';
?>

<main>
    <?php
        // This PHP block displays the error message if the login fails
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo '<p class="error-message">Incorrect username or password. Please try again.</p>';
        }
    ?>

    <form action="../private/portail.php" method="POST">
        <!-- We add a hidden field to know the login comes from the EN page -->
        <input type="hidden" name="lang" value="en">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <div>
            <button type="submit">Log In</button>
        </div>
    </form>
</main>

<?php
// Include the shared footer
include '../includes/footer.php';
?>