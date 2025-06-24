<?php
// English comments as requested.
// Define page-specific variables for the header
$page_title = "Notre Équipe";
$header_title = "Présentation de l'Équipe Projet";
$current_page_url = "equipe.php";
$path_prefix = "./";

// Include the French header
include 'includes/header_fr.php';
?>

<main>
    <h2>Organisation et Répartition des Rôles</h2>
    <p>
        Afin d'assurer une couverture complète des exigences du cahier des charges 
        et d'optimiser notre efficacité, nous avons réparti les tâches et les responsabilités 
        au sein de notre équipe de la manière suivante :
    </p>

    <!-- The team presentation table -->
    <table class="team-table">
        <thead>
            <tr>
                <th class="task-col">Tâches Principales</th>
                <th class="name-col">Nom</th>
                <th class="role-col">Rôle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Configuration du routeur Cisco, définition du plan d'adressage IP, 
                gestion de la sécurité de base du réseau et mise en place de la simulation Packet Tracer.</td>
                <td>AIT OUARET Mathis, EL JAHJOUKI Yasser</td>
                <td>Chef de Projet & Responsables Réseau</td>
            </tr>
            <tr>
                <td>Installation et configuration de la VM Windows Server 2019, 
                promotion en contrôleur de domaine (Active Directory), 
                configuration des services DHCP et DNS, 
                création des comptes utilisateurs et des partages de fichiers, 
                et installation de l'outil de supervision The Dude.</td>
                <td>AIT OUARET Mathis, Ethan DUBOS</td>
                <td>Responsables Système Windows</td>
            </tr>
            <tr>
                <td>Installation et configuration de la VM Ubuntu Mate, 
                mise en place de la pile LAMP (Apache, MySQL, PHP), 
                développement du site web responsif (parties publique et privée) 
                et gestion du dépôt GitHub pour le versionning du site.</td>
                <td>Yasser EL JAHJOUKI, Madeleine NUADI</td>
                <td>Responsables Système Linux & Web</td>
            </tr>
            <tr>
                <td>Installation et configuration fine du serveur Asterisk sur la VM Linux, 
                création des comptes SIP et du plan de numérotation, 
                configuration des téléphones physiques (FortiFone, Aastra) 
                et du softphone, et déploiement des services de messagerie (SMTP/POP3). </td>
                <td>NUADI Madeleine, Ethan DUBOS</td>
                <td>Responsables Téléphonie & Services Avancés</td>
            </tr>
        </tbody>
    </table>
    
    <p>
        Cette répartition nous a permis de développer une spécialisation sur des domaines techniques clés tout en maintenant une collaboration étroite et nécessaire entre les différents pôles du projet.
    </p>
</main>

<?php
// Include the shared footer
include 'includes/footer.php';
?>