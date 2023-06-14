<?php
session_start();
include_once '../includes/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM items WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $item = mysqli_fetch_assoc($result);
} else {
    header('Location: dashboard.php');
    exit;
}

if (isset($_POST['submit'])) {
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];

    $query = "UPDATE items SET item_name = '$item_name', price = '$price' WHERE id = $id";
    mysqli_query($conn, $query);

    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kasir - Edit Item</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="h1-login">Edit Item</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="item_name">Nama Item</label>
                <input type="text" name="item_name" value="<?php echo $item['item_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="text" name="price" value="<?php echo $item['price']; ?>" required>
            </div>
            <input type="submit" name="submit" value="Simpan">
        </form>
    </div>
</body>

</html>
