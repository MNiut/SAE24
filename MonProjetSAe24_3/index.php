<?php
// English comments as requested.
// Define page-specific variables for the header
$page_title = "Accueil";
$header_title = "Bienvenue au Cabinet Paramédical PM2";
$current_page_url = "index.php"; // Used for the language switcher
$path_prefix = "./"; // Path prefix for resources like images

// Include the French header
include 'includes/header_fr.php';
?>

<main>
    <h2>Une prise en charge coordonnée au cœur de Blagnac</h2>
    <p>
        Notre cabinet regroupe une équipe de professionnels passionnés et dédiés à votre santé et votre bien-être. 
        Nous avons à cœur de vous offrir une prise en charge complète et coordonnée, 
        en mettant à votre disposition une infrastructure moderne et des soins de haute qualité.
    </p>
    <h3>Notre Équipe Pluridisciplinaire</h3>
    <p>
        Pour répondre à l'ensemble de vos besoins, notre cabinet rassemble plusieurs spécialités sous un même toit :
    </p>
    <ul>
        <li>1 Médecin Généraliste</li>
        <li>3 Kinésithérapeutes</li>
        <li>1 Dentiste</li>
        <li>Notre secrétaire médicale est également à votre disposition pour vous accueillir et vous orienter.</li>
    </ul>
    <h3>Un Système d'Information Moderne au Service de nos Patients</h3>
    <p>
        Pour assurer la meilleure coordination possible des soins et garantir la sécurité de vos données, 
        notre cabinet s'est doté d'un système d'information entièrement neuf. 
        Cette infrastructure robuste nous permet une communication fluide entre nos praticiens 
        et une gestion sécurisée de vos dossiers, le tout pour une prise en charge plus efficace.
    </p>
    
    <h3>À Propos de ce Site Web</h3>
    <p>
        <strong>Note pour les évaluateurs :</strong> 
        Ce site web, ainsi que l'ensemble de notre infrastructure informatique et téléphonique, 
        ont été conçus et déployés dans le cadre du projet 
        <strong>"SAé24 : Déployer le système d'information de cabinets paramédicaux"</strong> 
        du BUT Réseaux & Télécoms de l'IUT de Blagnac.
    </p>
    <p>
        Développé par Madeleine NUADI, ce site est hébergé sur un serveur Linux (Ubuntu) utilisant les technologies Apache, 
        MySQL et PHP.  Il est conçu pour être "responsif", s'adaptant à tous les types d'écrans.
    </p>
    <p>
        Une <a href="login.php">partie privée</a>, sécurisée par mot de passe, 
        est réservée à l'équipe projet et aux évaluateurs 
        pour l'accès aux livrables techniques et au suivi du projet.
    </p>
</main>

<?php
// Include the shared footer
include 'includes/footer.php';
?>