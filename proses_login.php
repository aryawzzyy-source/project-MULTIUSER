<?php
session_start();
include 'config/database.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query(
    $conn,
    "SELECT * FROM users WHERE username='$username' AND password='$password'"
);
$data = mysqli_fetch_assoc($query);
$cek = mysqli_num_rows($query);
if ($cek > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];
    if ($data['role'] == "admin") {
        header("location:dashboard_admin.php");
    } else {
        header("location:dashboard_user.php");
    }
} else {
    echo
    "
<script>
alert('Login gagal!');
window.location='login.php';
</script>
";
}
