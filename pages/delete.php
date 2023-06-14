<?php
session_start();
include_once '../includes/config.php';

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM items WHERE id = $id";
    mysqli_query($conn, $query);
}

header('Location: dashboard.php');
exit;
?>
