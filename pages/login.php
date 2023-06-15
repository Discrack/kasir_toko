<?php
session_start();
include_once '../includes/config.php';
error_reporting(0);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    } else {
        $error_msg = "Username atau password salah! masukin yang bener!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi apa ga tau - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
    <br>
    <br>
    <br>
    <br>

    <div class="container" color="#282b30">
        <div class="">
            <h1 class="h1-login">Login Panel</h1>
            <?php if (isset($error_msg)) { ?>
                <div class="error-msg"><?php echo $error_msg; ?></div>
            <?php } ?>
            <h5 class="h1-red">No Login No Access</h5>
            <h5 class="h1-login">ini merupakan aplikasi project yang dibuat semata mata untuk mendapatkan nilai, dan memenuhi tugas formatif sebelum UAS</h5>
            <form method="POST">
                <div class="form-group">
                    <input type="text" name="username" required placeholder="Username" autofocus>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required placeholder="Password">
                </div>
                <input type="reset" value="Reset" class="btn-logout">
                <input type="submit" name="login" value="Sign In" class="btn-login">
            </form>
        </div>
    </div>
</body>

</html>
