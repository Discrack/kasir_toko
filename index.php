<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: pages/dashboard.php');
    exit;
} else {
    header('Location: pages/login.php');
    exit;
}
?>
