<?php
// English comments as requested.
// Define page-specific variables for the English header
$page_title = "Issues Encountered";
$header_title = "Issues Encountered and Solutions Implemented";
$current_page_url = "problemes.php";
$path_prefix = "../";

// Include the English header
include '../includes/header_en.php';
?>

<main>
    <h2>Challenges of the SAé24 Project</h2>
    <p>
        Every technical project comes with its share of challenges.
        This page documents the main obstacles we encountered
        and the solutions we implemented to overcome them.
    </p>

    <!-- Section for Windows Server issues -->
    <h3>DHCP Server Conflict</h3>
    <p>
        <strong>Problem:</strong> At the beginning of the project,
        our client machines were not obtaining IP addresses from our Windows Server,
        but were instead receiving them from the lab's network.
    </p>
    <p>
        <strong>Solution:</strong> By isolating our topology on a dedicated vSwitch in ESXi
        and using client machines physically connected only to our own switch,
        we created an isolated network environment where our DHCP server was the sole master.
    </p>

    <!-- Section for Intersite Telephony issues -->
    <h3>SIP Trunk Configuration for Intersite Telephony</h3>
    <p>
        <strong>Problem:</strong> Phone calls between our Asterisk servers were not going through.
        Log analysis (<em>asterisk -rvvv</em>) revealed an authentication error.
    </p>
    <p>
        <strong>Solution:</strong> The issue stemmed from an inconsistency in the "secrets" (passwords)
        and "contexts" defined in the <em>sip.conf</em> files of each server.
        After rigorous coordination with the other team, the calls were successfully established.
    </p>

    <!-- Section for Project Management issues -->
    <h3>Time Management and Task Dependencies</h3>
    <p>
        <strong>Problem:</strong> We had underestimated the time required for configuring the Linux services,
        which delayed the start of the website development.
    </p>
    <p>
        <strong>Solution:</strong> We readjusted our Gantt chart.
        The person in charge of the website began HTML/CSS development locally (with XAMPP)
        without waiting for the server to be 100% ready.
        This parallelization of tasks allowed us to catch up on the delay.
    </p>
</main>

<?php
// Include the shared footer
include '../includes/footer.php';
?>