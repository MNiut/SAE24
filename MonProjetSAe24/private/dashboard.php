<?php
// We start the session to check if the user is logged in.
session_start();

// If the 'loggedin' session variable doesn't exist or is not true,
// we forcibly redirect the user to the login page.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../login.php'); // Redirects to the PHP login page.
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - Livrables</title>
    <!-- The path to the CSS file is corrected, as this page is inside the 'private' folder -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <header>
        <h1>Tableau de Bord - Espace Privé</h1>
    </header>

    <!-- The complete navigation bar is added for consistency -->
    <nav>
        <a href="../index.html">Accueil</a>
        <a href="../equipe.html">Notre Équipe</a>
        <a href="../problemes.html">Problèmes Rencontrés</a>
        <!-- The "Private Area" link is styled differently to show it's the active section -->
        <a href="dashboard.php" style="font-weight: bold; text-decoration: underline;">Accès Privé</a>
        <!-- The language switcher should link to the English dashboard -->
        <!-- <a href="dashboard_en.php" class="lang-switcher">🇬🇧 English</a> -->
    </nav>
	
    <!-- The main-container div is crucial for the layout -->
    <div class="main-container">
        <main>
            <h2>Téléchargement des Livrables</h2>
            <p>
                Vous trouverez ci-dessous les liens pour accéder à l'ensemble des documents 
				et fichiers produits durant le projet SAé24.
            </p>

            <!-- A more structured list for the deliverables -->
            <ul class="deliverables-list">
                <li>
                    <strong>Documentation :</strong>
                    <a href="../livrables/rapport_sae24.pdf" target="_blank">Rapport Technique Final (.pdf)</a>
                </li>
                <li>
                    <strong>Présentation :</strong>
                    <a href="../livrables/video_sae24.mp4" target="_blank">Vidéo de Présentation (3 min)</a>
                </li>
                <li>
                    <strong>Fichiers Techniques :</strong>
                    <a href="../livrables/simulation.pkt" target="_blank">Simulation Packet Tracer (.pkt)</a> | 
                    <a href="../livrables/schema_reseau.png" target="_blank">Schéma Réseau (.png)</a> | 
                    <a href="../livrables/plan_numerotation.pdf" target="_blank">Plan de Numérotation (.pdf)</a>
                </li>
                 <li>
                    <strong>Code Source :</strong>
                    <a href="https://github.com/votre-equipe/sae24-pm2" target="_blank">Dépôt GitHub du Projet</a>
                </li>
                <li>
                    <strong>Annexe :</strong>
                    <a href="../livrables/logins.txt" target="_blank">Fichier des Identifiants (.txt)</a>
                </li>
            </ul>

            <hr>

            <!-- Logout button moved here for better visibility -->
            <div style="text-align: center; margin-top: 30px;">
                <a href="logout.php" class="logout-button">Se Déconnecter</a>
            </div>
        </main>
    </div>
	
    <footer>
        <p class="footer-titre">Cabinet Paramédicale Groupe C</p>
        <p class="footer-noms">AIT OUARET, DUBOS, EL JAHJOUKI, NUADI</p>
    </footer>
  
</body>
</html>