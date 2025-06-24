<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Espace Privé</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- This style is specific to the error message on this page -->
    
</head>
<body>

    <header>
        <h1>Accès à l'espace privé</h1>
    </header>

    <!-- The navigation bar is updated with the team page and the language switcher -->
    <nav>
        <a href="index.html">Accueil</a>
        <a href="equipe.html">Notre Équipe</a>
		<a href="problemes.html">Problèmes Rencontrés</a>
        <a href="login.php">Accès Privé</a>
        <!-- The language switcher button, linking to the English login page -->
        <a href="login_en.php" class="lang-switcher">🇬🇧 English</a>
    </nav>
	
    <!-- This container is crucial for the layout to work correctly -->
    <div class="main-container">
        <main>
            <?php
                // This PHP block displays the error message if the login fails
                if (isset($_GET['error']) && $_GET['error'] == 1) {
                    echo '<p class="error-message">Identifiant ou mot de passe incorrect. Veuillez réessayer.</p>';
                }
            ?>
        
            <form action="private/portail.php" method="POST">
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