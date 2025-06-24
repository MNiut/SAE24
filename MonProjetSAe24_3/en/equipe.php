<?php
// English comments as requested.
// Define page-specific variables for the English header
$page_title = "Our Team";
$header_title = "Project Team Presentation";
$current_page_url = "equipe.php";
$path_prefix = "../";

// Include the English header
include '../includes/header_en.php';
?>

<main>
    <h2>Organization and Role Distribution</h2>
    <p>
        To ensure complete coverage of the requirements from the specifications
        and to optimize our efficiency, we have distributed tasks and responsibilities
        within our team as follows:
    </p>

    <!-- The team presentation table -->
    <table class="team-table">
        <thead>
            <tr>
                <th class="task-col">Main Tasks</th>
                <th class="name-col">Name</th>
                <th class="role-col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Configuration of the Cisco router, definition of the IP addressing plan,
                management of basic network security, and setup of the Packet Tracer simulation.</td>
                <td>AIT OUARET Mathis, EL JAHJOUKI Yasser</td>
                <td>Project Manager & Network Leads</td>
            </tr>
            <tr>
                <td>Installation and configuration of the Windows Server 2019 VM,
                promotion to domain controller (Active Directory),
                configuration of DHCP and DNS services,
                creation of user accounts and file shares,
                and installation of The Dude monitoring tool.</td>
                <td>AIT OUARET Mathis, Ethan DUBOS</td>
                <td>Windows System Leads</td>
            </tr>
            <tr>
                <td>Installation and configuration of the Ubuntu Mate VM,
                setting up the LAMP stack (Apache, MySQL, PHP),
                development of the responsive website (public and private sections),
                and management of the GitHub repository for site versioning.</td>
                <td>Yasser EL JAHJOUKI, Madeleine NUADI</td>
                <td>Linux System & Web Leads</td>
            </tr>
            <tr>
                <td>Detailed installation and configuration of the Asterisk server on the Linux VM,
                creation of SIP accounts and the dial plan,
                configuration of physical phones (FortiFone, Aastra)
                and the softphone, and deployment of messaging services (SMTP/POP3).</td>
                <td>NUADI Madeleine, Ethan DUBOS</td>
                <td>Telephony & Advanced Services Leads</td>
            </tr>
        </tbody>
    </table>
    
    <p>
        This distribution allowed us to develop specialization in key technical areas while maintaining the close and necessary collaboration between the different project poles.
    </p>
</main>

<?php
// Include the shared footer
include '../includes/footer.php';
?>