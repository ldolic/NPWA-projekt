<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}
?>

<?php include 'header.php'; ?>

<main>
    <h2>Dobrodošli, administratoru!</h2>
    <p>Ovdje možete uređivati sadržaj web stranice.</p>
    <a href="logout.php"><button>Odjava</button></a>
</main>

<?php include 'footer.php'; ?>
