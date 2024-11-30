<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $admin_user = 'admin';
    $admin_pass = 'dinamo123';

    if ($username === $admin_user && $password === $admin_pass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $error = "Neispravni podaci za prijavu!";
    }
}
?>

<?php include 'header.php'; ?>

<main>
    <h2>Prijava za administratore</h2>
    <form action="login.php" method="post">
        <label for="username">Korisničko ime:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Lozinka:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Prijava</button>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
    </form>
</main>

<?php include 'footer.php'; ?>
