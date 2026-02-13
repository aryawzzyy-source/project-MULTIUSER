<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Multi User</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
    <div class="login-box">
        <h2>Login Sistem</h2>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>