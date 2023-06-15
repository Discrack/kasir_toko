<?php
session_start();
include_once '../includes/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$query = "SELECT * FROM items";
$result = mysqli_query($conn, $query);
$items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir - Daftar Item</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"> -->
</head>

<body bgcolor="#1e2124">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <h1 class="h1-login">Daftar Item</h1>
        <a href="dashboard.php" class="btn-logout">Back</a>
        <br>
        <br>
        <table border="1" cellpadding="10" class="">
            <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($items as $item) { ?>
                    <tr>
                    <td align="center"><?= $i++; ?></td>
                    <td align="center"><?php echo $item['item_name']; ?></td>
                    <td align="center"><?php echo $item['price']; ?></td>
                    </tr>
                
            <?php } ?>

        </table>
    </div>
</body>

</html>
