<?php
// We start the session to check if the user is logged in.
session_start();

// If the 'loggedin' session variable doesn't exist or is not true,
// we forcibly redirect the user to the login page.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../login.php'); // Redirects to the French login page.
    exit;
}

// Check the language from the session, default to French
$lang = $_SESSION['lang'] ?? 'fr';

// Define texts based on language
if ($lang === 'en') {
    $page_title = "Dashboard - Deliverables";
    $header_title = "Dashboard - Private Area";
    $main_title = "Download Deliverables";
    $main_text = "You will find below the links to access all documents and files produced during the SAé24 project.";
    $doc_label = "Documentation:";
    $doc_link = "Final Technical Report (.pdf)";
    $pres_label = "Presentation:";
    $pres_link = "Presentation Video (3 min)";
    $tech_label = "Technical Files:";
    $src_label = "Source Code:";
    $src_link = "Project GitHub Repository";
    $appendix_label = "Appendix:";
    $appendix_link = "Credentials File (.txt)";
    $logout_text = "Log Out";
} else {
    $page_title = "Tableau de bord - Livrables";
    $header_title = "Tableau de Bord - Espace Privé";
    $main_title = "Téléchargement des Livrables";
    $main_text = "Vous trouverez ci-dessous les liens pour accéder à l'ensemble des documents et fichiers produits durant le projet SAé24.";
    $doc_label = "Documentation :";
    $doc_link = "Rapport Technique Final (.pdf)";
    $pres_label = "Présentation :";
    $pres_link = "Vidéo de Présentation (3 min)";
    $tech_label = "Fichiers Techniques :";
    $src_label = "Code Source :";
    $src_link = "Dépôt GitHub du Projet";
    $appendix_label = "Annexe :";
    $appendix_link = "Fichier des Identifiants (.txt)";
    $logout_text = "Se Déconnecter";
}

?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <!-- The path to the CSS file is corrected, as this page is inside the 'private' folder -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1><?php echo $header_title; ?></h1>
    </header>
    <!-- A simple nav for the private area -->
    <nav>
        <p style="color: white; margin: 0; padding: 0.5em; font-weight: bold;">Espace Sécurisé</p>
    </nav>
	
    <div class="main-container">
        <main>
            <h2><?php echo $main_title; ?></h2>
            <p><?php echo $main_text; ?></p>
            <ul class="deliverables-list">
                <li>
                    <strong><?php echo $doc_label; ?></strong>
                    <a href="../livrables/rapport_sae24.pdf" target="_blank"><?php echo $doc_link; ?></a>
                </li>
                <li>
                    <strong><?php echo $pres_label; ?></strong>
                    <a href="../livrables/video_sae24.mp4" target="_blank"><?php echo $pres_link; ?></a>
                </li>
                <li>
                    <strong><?php echo $tech_label; ?></strong>
                    <a href="../livrables/simulation.pkt" target="_blank">Simulation Packet Tracer (.pkt)</a> | 
                    <a href="../livrables/schema_reseau.png" target="_blank">Schéma Réseau (.png)</a> | 
                    <a href="../livrables/plan_numerotation.pdf" target="_blank">Plan de Numérotation (.pdf)</a> |
		    <a href="../livrables/plan_adressage.pdf" target="_blank">Plan d'Adressage (.pdf)</a> |
		    <a href="../livrables/psswd_github.pdf" target="_blank">Mots de Passe et lien GitHub (.pdf)</a> |
                </li>
                 <li>
                    <strong><?php echo $src_label; ?></strong>
                    <a href="https://github.com/votre-equipe/sae24-pm2" target="_blank"><?php echo $src_link; ?></a>
                </li>
                <li>
                    <strong><?php echo $appendix_label; ?></strong>
                    <a href="../livrables/logins.txt" target="_blank"><?php echo $appendix_link; ?></a>
                </li>
            </ul>
            <hr>
            <div style="text-align: center; margin-top: 30px;">
                <a href="logout.php" class="logout-button"><?php echo $logout_text; ?></a>
            </div>
        </main>
    </div>
	
    <footer>
        <p>Cabinet Paramédicale Groupe C</p>
        <p>AIT OUARET, DUBOS, EL JAHJOUKI, NUADI</p>
    </footer>
</body>
</html>
