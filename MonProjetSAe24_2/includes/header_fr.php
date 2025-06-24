<?php
// English comments as requested.
// This file contains the French header and navigation bar.
// It uses PHP variables $page_title and $current_page_url which must be defined
// in the parent page before this file is included.
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title); ?> - Cabinet PM2</title>
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($header_title); ?></h1>
    </header>
    <nav>
        <a href="index.php">Accueil</a>
        <a href="equipe.php">Notre Équipe</a>
        <a href="problemes.php">Problèmes Rencontrés</a>
        <a href="login.php">Accès Privé</a>
        <!-- The language switcher button, linking to the English version of the current page -->
        <a href="./en/<?php echo $current_page_url; ?>" class="lang-switcher">🇬🇧 English</a>
    </nav>
    <div class="main-container">