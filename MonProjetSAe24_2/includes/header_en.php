<?php
// English comments as requested.
// This file contains the English header and navigation bar.
// It uses PHP variables $page_title and $current_page_url which must be defined
// in the parent page before this file is included.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($page_title); ?> - PM2 Office</title>
    <!-- The path to CSS must go up one level -->
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($header_title); ?></h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="equipe.php">Our Team</a>
        <a href="problemes.php">Issues Encountered</a>
        <a href="login.php">Private Area</a>
        <!-- The language switcher button, linking to the French version of the current page -->
        <a href="../<?php echo $current_page_url; ?>" class="lang-switcher">🇫🇷 Français</a>
    </nav>
    <div class="main-container">