<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Private Area</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>
        <h1>Private Area Access</h1>
    </header>
    <nav>
        <!-- English navigation -->
        <a href="index_en.html">Home</a>
        <a href="equipe_en.html">Our Team</a>
		<a href="problemes_en.html">Encountered Problems</a>
        <a href="login_en.php">Private Area</a>
        <!-- The language switcher button, linking back to the French login page -->
        <a href="login.php" class="lang-switcher">🇫🇷 Français</a>
    </nav>
    <div class="main-container">
        <main>
            <?php
                // Displays the error message if it's in the URL
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<p class="error-message">Incorrect username or password. Please try again.</p>';
                }
            ?>
            <form action="private/portail.php" method="POST">
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
    </div>
     <footer>
	  <p>Cabinet Paramédicale Groupe C</p>
	  <p>AIT OUARET, DUBOS, EL JAHJOUKI, NUADI</p>
	  
<aside id="last">
    <hr />
    <p><em>Validation de la page HTML5 - CSS3</em></p>
    <a href="https://validator.w3.org/" target="_blank"> 
        <!-- I added a 'validator-badge' class to the image -->
        <img class="validator-badge" src="./images/html5-validator-badge-blue.png" alt="HTML5 Valide !" />
    </a>
            
    <a href="https://jigsaw.w3.org/css-validator/" target="_blank">
        <!-- I also added the 'validator-badge' class here -->
        <img class="validator-badge" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" />
    </a>
</aside>
  </footer>
</body>
</html>