<?php
session_start();
if ($_SESSION['role'] != "admin") {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="dashboard">
        <h1>Dashboard Admin</h1>
        <p>Selamat datang, <?php echo $_SESSION['username']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>