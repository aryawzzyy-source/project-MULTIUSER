<?php
session_start();
if ($_SESSION['role'] != "user") {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard User</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="dashboard">
        <h1>Dashboard User</h1>
        <p>Halo, <?php echo $_SESSION['username']; ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>