<?php
session_start();
include_once '../includes/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_POST['submit'])) {
    $item_name = htmlspecialchars($_POST['item_name']);
    $price = htmlspecialchars($_POST['price']);

    $query = "INSERT INTO items (item_name, price) VALUES ('$item_name', '$price')";
    mysqli_query($conn, $query);

    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir - Tambah Item</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body bgcolor="#1e2124">
    <div class="container">
        <h1 class="h1-login">Tambah Item</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="item_name" class="h1-login">Nama Item</label>
                <input type="text" name="item_name" required>
            </div>
            <div class="form-group">
                <label for="price" class="h1-login">Harga</label>
                <input type="text" name="price" required>
            </div>
            <a href="dashboard.php" class="btn-logout">Back</a>
            <input type="submit" name="submit" value="Simpan" class="btn-login">
        </form>
    </div>
</body>

</html>
