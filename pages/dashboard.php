<?php
session_start();
include_once '../includes/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir - Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body bgcolor="#1e2124">
    <div class="container">
        <h1 class="h1-login">Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="read.php" class="btn-login">Table</a>
        <a href="create.php" class="btn-login">Create</a>
        <a href="update.php" class="btn-login">Update</a>
        <a href="logout.php" class="btn-logout">Sign Out</a>
    </div>
</body>

</html>
