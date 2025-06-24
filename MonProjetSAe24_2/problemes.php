<?php
// English comments as requested.
// Define page-specific variables for the header
$page_title = "Problèmes Rencontrés";
$header_title = "Problèmes Rencontrés et Solutions Apportées";
$current_page_url = "problemes.php";
$path_prefix = "./";

// Include the French header
include 'includes/header_fr.php';
?>

<main>
    <h2>Les défis du projet SAé24</h2>
    <p>
        Tout projet technique comporte son lot de défis. 
        Cette page documente les principaux obstacles que nous avons rencontrés 
        et les solutions que nous avons mises en œuvre pour les surmonter.
    </p>

    <!-- Section for Windows Server issues -->
    <h3>Conflit de Serveurs DHCP</h3>
    <p>
        <strong>Problème :</strong> Au début du projet, 
        nos postes clients n'obtenaient pas les adresses IP de notre serveur Windows Server, 
        mais recevaient celles du réseau de la salle de TP.
    </p>
    <p>
        <strong>Solution :</strong> En isolant notre topologie sur un vSwitch dédié dans ESXi 
        et en utilisant des postes clients connectés physiquement uniquement à notre propre switch, 
        nous avons créé un environnement réseau isolé où notre serveur DHCP était le seul maître.
    </p>

    <!-- Section for Intersite Telephony issues -->
    <h3>Configuration du Trunk SIP pour la Téléphonie Intersites</h3>
    <p>
        <strong>Problème :</strong> Les appels téléphoniques entre nos serveurs Asterisk ne passaient pas. 
        L'analyse des logs (<em>asterisk -rvvv</em>) a montré une erreur d'authentification.
    </p>
    <p>
        <strong>Solution :</strong> Le problème venait d'une incohérence dans les "secrets" (mots de passe) 
        et les "contexts" définis dans les fichiers <em>sip.conf</em> de chaque serveur. 
        Après une coordination rigoureuse avec l'autre équipe, les appels ont pu être établis.
    </p>

    <!-- Section for Project Management issues -->
    <h3>Gestion du Temps et Dépendances des Tâches</h3>
    <p>
        <strong>Problème :</strong> Nous avions sous-estimé le temps nécessaire pour la configuration des services Linux, 
        ce qui a retardé le début du développement du site web.
    </p>
    <p>
        <strong>Solution :</strong> Nous avons réajusté notre diagramme de Gantt. 
        Le responsable du site a commencé le développement HTML/CSS en local (avec XAMPP) 
        sans attendre que le serveur soit 100% prêt. 
        Cette parallélisation des tâches nous a permis de rattraper le retard.
    </p>
</main>

<?php
// Include the shared footer
include 'includes/footer.php';
?>