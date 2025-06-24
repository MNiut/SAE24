<?php
// English comments as requested.
// Define page-specific variables for the English header
$page_title = "Home";
$header_title = "Welcome to the PM2 Paramedical Office";
$current_page_url = "index.php";
$path_prefix = "../"; // Path goes up one level

// Include the English header
include '../includes/header_en.php';
?>

<main>
    <h2>Coordinated Care in the Heart of Blagnac</h2>
    <p>
        Our office brings together a team of passionate professionals dedicated to your health and well-being.
        We are committed to offering you comprehensive and coordinated care,
        providing a modern infrastructure and high-quality treatments.
    </p>
    <h3>Our Multidisciplinary Team</h3>
    <p>
        To meet all your needs, our office gathers several specialties under one roof:
    </p>
    <ul>
        <li>1 General Practitioner</li>
        <li>3 Physiotherapists</li>
        <li>1 Dentist</li>
        <li>Our medical secretary is also available to welcome and guide you.</li>
    </ul>
    <h3>A Modern Information System for Our Patients</h3>
    <p>
        To ensure the best possible coordination of care and the security of your data,
        our office has implemented an entirely new information system.
        This robust infrastructure allows for fluid communication between our practitioners
        and secure management of your records, all for more effective care.
    </p>
    
    <h3>About This Website</h3>
    <p>
        <strong>Note for evaluators:</strong> 
        This website, along with our entire IT and telephone infrastructure,
        was designed and deployed as part of the
        <strong>"SAé24: Deploying the information system for paramedical offices"</strong> 
        project for the Networks & Telecoms BUT program at IUT of Blagnac.
    </p>
    <p>
        Developed by Madeleine NUADI, this site is hosted on a Linux server (Ubuntu) using Apache,
        MySQL, and PHP technologies. It is designed to be "responsive," adapting to all screen types.
    </p>
    <p>
        A <a href="login.php">private section</a>, secured by a password,
        is reserved for the project team and evaluators
        for access to technical deliverables and project tracking.
    </p>
</main>

<?php
// Include the shared footer
include '../includes/footer.php';
?>