<?php
// English comments as requested.
// This is the patient's dashboard page.
session_start();
include '../private/db_connect.php'; // Correct path for a file inside /en/

// --- Security: Protect this page ---
// If no patient is logged in, redirect them to the English login page.
if (!isset($_SESSION['patient_id'])) {
    header('Location: patient_area.php');
    exit();
}

$patient_id = $_SESSION['patient_id'];
$patient_prenom = $_SESSION['patient_prenom'];

// --- Handle new appointment submission ---
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'book_rdv') {
    $date_rdv = $_POST['date_rdv'];
    $motif = $_POST['motif'];
    
    $stmt = mysqli_prepare($conn, "INSERT INTO rendezvous (id_patient, date_rdv, motif, statut) VALUES (?, ?, ?, 'Confirmed')");
    mysqli_stmt_bind_param($stmt, "iss", $patient_id, $date_rdv, $motif);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    // Redirect to the same page to avoid form re-submission on refresh.
    header('Location: my_account.php?success=1');
    exit();
}

// --- Fetch existing appointments for this patient ---
$appointments = [];
$stmt = mysqli_prepare($conn, "SELECT date_rdv, motif, statut FROM rendezvous WHERE id_patient = ? ORDER BY date_rdv DESC");
mysqli_stmt_bind_param($stmt, "i", $patient_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    $appointments[] = $row;
}
mysqli_stmt_close($stmt);
mysqli_close($conn);

// --- Page variables for the header ---
$page_title = "My Account";
$header_title = "Welcome, " . htmlspecialchars($patient_prenom);
$current_page_url = "mon_compte.php"; // The URL of the French equivalent page
$path_prefix = "../";
include '../includes/header_en.php';
?>

<main>
    <h2>My Appointments</h2>
    <?php if (empty($appointments)) : ?>
        <p>You have no appointments at this time.</p>
    <?php else : ?>
        <table class="team-table">
            <thead>
                <tr>
                    <th>Date and Time</th>
                    <th>Reason</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $rdv) : ?>
                <tr>
                    <td><?php echo htmlspecialchars(date('d/m/Y \a\t H:i', strtotime($rdv['date_rdv']))); ?></td>
                    <td><?php echo htmlspecialchars($rdv['motif']); ?></td>
                    <td><?php echo htmlspecialchars($rdv['statut']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <hr>

    <h2>Book a New Appointment</h2>
    <?php if (isset($_GET['success'])) echo '<p class="success-message">Your appointment has been successfully booked!</p>'; ?>
    <form action="my_account.php" method="POST">
        <input type="hidden" name="action" value="book_rdv">
        <div>
            <label for="date_rdv">Desired date and time:</label>
            <input type="datetime-local" id="date_rdv" name="date_rdv" required>
        </div>
        <div>
            <label for="motif">Reason for consultation:</label>
            <textarea id="motif" name="motif" rows="4" required></textarea>
        </div>
        <div>
            <button type="submit">Confirm Appointment</button>
        </div>
    </form>
</main>

<?php
include '../includes/footer.php';
?>